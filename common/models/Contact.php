<?php

namespace common\models;

use Yii;
use yii\db\Expression;
use yii\behaviors\TimestampBehavior;
use yii2tech\ar\softdelete\SoftDeleteBehavior;

/**
 * This is the model class for table "contact".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $body
 * @property string $updated_at
 * @property string $created_at
 * @property integer $is_deleted
 */
class Contact extends \yii\db\ActiveRecord
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
        return 'contact';
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
            [['name', 'email', 'subject', 'body'], 'required'],
            [['body'], 'string'],
            [['updated_at', 'created_at'], 'safe'],
            [['is_deleted'], 'integer'],
            [['name', 'email', 'subject'], 'string', 'max' => 255],
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
            'email' => 'Email',
            'subject' => 'Subject',
            'body' => 'Body',
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
