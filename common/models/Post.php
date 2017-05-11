<?php

namespace common\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;
use yii2tech\ar\softdelete\SoftDeleteBehavior;
use common\models\Category;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $user_id
 * @property string $name
 * @property string $image
 * @property string $preview
 * @property string $content
 * @property string $updated_at
 * @property string $created_at
 * @property integer $is_deleted
 *
 * @property User $user
 * @property Category $category
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $file_image;

    public function behaviors()
    {
        return [
            'softDeleteBehavior' => [
                'class' => SoftDeleteBehavior::className(),
                'softDeleteAttributeValues' => [
                    'is_deleted' => true
                ],
                'replaceRegularDelete' => true // mutate native `delete()` method
            ],
        ];
    }

    public static function find()
    {
        return parent::find()->where(['is_deleted' => false]);
    }

    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'user_id', 'name', 'preview', 'content'], 'required'],
            [['category_id', 'user_id', 'is_deleted'], 'integer'],
            [['preview', 'content'], 'string'],
            [['updated_at', 'created_at'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 50],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['file_image'], 'file', 'extensions' => 'png, jpg, jpeg, gif', 'skipOnEmpty' => true]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category',
            'user_id' => 'Author',
            'name' => 'Name',
            'image' => 'Image',
            'preview' => 'Preview',
            'content' => 'Content',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
            'is_deleted' => 'Is Deleted',
        ];
    }

    public function beforeSoftDelete()
    {
        $this->is_deleted = time(); // log the deletion date
        return true;
    }

    public function beforeRestore()
    {
        return $this->is_deleted > (time() - 3600); // allow restoration only for the records, being deleted during last hour
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
