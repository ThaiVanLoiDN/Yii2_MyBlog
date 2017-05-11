<?php

namespace common\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;
use yii2tech\ar\softdelete\SoftDeleteBehavior;

/**
 * This is the model class for table "social_network".
 *
 * @property integer $id
 * @property string $name
 * @property string $link
 * @property string $class
 * @property string $updated_at
 * @property string $created_at
 * @property integer $is_deleted
 */
class SocialNetwork extends \yii\db\ActiveRecord
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
        return 'social_network';
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
            [['name', 'link', 'class'], 'required'],
            [['updated_at', 'created_at'], 'safe'],
            [['is_deleted'], 'integer'],
            [['name', 'link'], 'string', 'max' => 255],
            [['class'], 'string', 'max' => 50],
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
            'link' => 'Link',
            'class' => 'Class',
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
}
