<?php

namespace common\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;
use yii2tech\ar\softdelete\SoftDeleteBehavior;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $name
 * @property string $updated_at
 * @property string $created_at
 * @property integer $is_deleted
 *
 * @property Post[] $posts
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

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

    public static function tableName()
    {
        return 'category';
    }

    public static function find()
    {
        return parent::find()->where(['is_deleted' => false]);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['updated_at', 'created_at'], 'safe'],
            [['is_deleted'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
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

    public static function listCategory(){
        return ArrayHelper::map(self::find()->all(), 'id', 'name');
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['category_id' => 'id']);
    }
}
