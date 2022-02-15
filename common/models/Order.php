<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property int $id
 * @property string|null $fullName
 * @property string|null $phone
 * @property string|null $country
 * @property string|null $province
 * @property string|null $region
 * @property string|null $address
 * @property string|null $zip_code
 * @property float|null $total_price
 * @property int $user_id
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property OrderItem[] $orderItems
 * @property User $user
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['total_price'], 'number'],
            [['user_id'], 'required'],
            [['user_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['fullName', 'phone', 'country', 'province', 'region', 'address', 'zip_code'], 'string', 'max' => 255],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
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
            'phone' => Yii::t('yii', 'Phone'),
            'country' => Yii::t('yii', 'Country'),
            'province' => Yii::t('yii', 'Province'),
            'region' => Yii::t('yii', 'Region'),
            'address' => Yii::t('yii', 'Address'),
            'zip_code' => Yii::t('yii', 'Zip Code'),
            'total_price' => Yii::t('yii', 'Total Price'),
            'user_id' => Yii::t('yii', 'User ID'),
            'status' => Yii::t('yii', 'Status'),
            'created_at' => Yii::t('yii', 'Created At'),
            'updated_at' => Yii::t('yii', 'Updated At'),
        ];
    }

    /**
     * Gets query for [[OrderItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItem::className(), ['order_id' => 'id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
