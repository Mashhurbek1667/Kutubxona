<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "visitor".
 *
 * @property int $id
 * @property string|null $fullName
 * @property string|null $comment
 * @property string|null $theme
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Visitor extends \yii\db\ActiveRecord
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'visitor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['fullName', 'theme'], 'string', 'max' => 255],
            [['comment'], 'string', 'max' => 500],
            ['status', 'default', 'value' => self::STATUS_INACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_INACTIVE]],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('yii', 'ID'),
            'fullName' => Yii::t('yii', 'Full Name'),
            'comment' => Yii::t('yii', 'Comment'),
            'theme' => Yii::t('yii', 'Theme'),
            'status' => Yii::t('yii', 'Status'),
            'created_at' => Yii::t('yii', 'Created At'),
            'updated_at' => Yii::t('yii', 'Updated At'),
        ];
    }
}
