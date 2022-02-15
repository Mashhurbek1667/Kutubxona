<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order_item".
 *
 * @property int $id
 * @property float|null $price
 * @property int|null $count
 * @property int $order_id
 * @property int $book_id
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Book $book
 * @property Order $order
 */
class OrderItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'order_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['count', 'order_id', 'book_id', 'created_at', 'updated_at'], 'integer'],
            [['order_id', 'book_id'], 'required'],
            [['book_id'], 'exist', 'skipOnError' => true, 'targetClass' => Book::className(), 'targetAttribute' => ['book_id' => 'id']],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Order::className(), 'targetAttribute' => ['order_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('yii', 'ID'),
            'price' => Yii::t('yii', 'Price'),
            'count' => Yii::t('yii', 'Count'),
            'order_id' => Yii::t('yii', 'Order ID'),
            'book_id' => Yii::t('yii', 'Book ID'),
            'created_at' => Yii::t('yii', 'Created At'),
            'updated_at' => Yii::t('yii', 'Updated At'),
        ];
    }

    /**
     * Gets query for [[Book]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBook()
    {
        return $this->hasOne(Book::className(), ['id' => 'book_id']);
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
    }
}
