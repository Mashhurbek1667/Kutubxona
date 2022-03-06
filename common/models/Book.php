<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $name
 * @property float|null $star
 * @property float|null $price
 * @property float|null $discount
 * @property string|null $description
 * @property string|null $published
 * @property int|null $page_count
 * @property int|null $author_id
 * @property int|null $language_id
 * @property int|null $format_id
 * @property int|null $publisher_id
 * @property int|null $category_id
 * @property int|null $status
 * @property int|null $created_at
 * @property int|null $updated_at
 *
 * @property Author $author
 * @property Category $category
 * @property Format $format
 * @property Language $language
 * @property OrderItem[] $orderItems
 * @property Publisher $publisher
 */
class Book extends \yii\db\ActiveRecord
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
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['price'], 'double'],
            [['star', 'price', 'discount'], 'number'],
            [['published'], 'safe'],
            [['page_count', 'author_id', 'language_id', 'format_id', 'publisher_id', 'category_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 500],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Author::className(), 'targetAttribute' => ['author_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
            [['format_id'], 'exist', 'skipOnError' => true, 'targetClass' => Format::className(), 'targetAttribute' => ['format_id' => 'id']],
            [['language_id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['language_id' => 'id']],
            [['publisher_id'], 'exist', 'skipOnError' => true, 'targetClass' => Publisher::className(), 'targetAttribute' => ['publisher_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('yii', 'ID'),
            'name' => Yii::t('yii', 'Name'),
            'star' => Yii::t('yii', 'Star'),
            'price' => Yii::t('yii', 'Price'),
            'discount' => Yii::t('yii', 'Discount'),
            'description' => Yii::t('yii', 'Description'),
            'published' => Yii::t('yii', 'Published'),
            'page_count' => Yii::t('yii', 'Page Count'),
            'author_id' => Yii::t('yii', 'Author ID'),
            'language_id' => Yii::t('yii', 'Language ID'),
            'format_id' => Yii::t('yii', 'Format ID'),
            'publisher_id' => Yii::t('yii', 'Publisher ID'),
            'category_id' => Yii::t('yii', 'Category ID'),
            'status' => Yii::t('yii', 'Status'),
            'created_at' => Yii::t('yii', 'Created At'),
            'updated_at' => Yii::t('yii', 'Updated At'),
        ];
    }

    /**
     * Gets query for [[Author]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Author::className(), ['id' => 'author_id']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * Gets query for [[Format]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFormat()
    {
        return $this->hasOne(Format::className(), ['id' => 'format_id']);
    }

    /**
     * Gets query for [[Language]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLanguage()
    {
        return $this->hasOne(Language::className(), ['id' => 'language_id']);
    }

    /**
     * Gets query for [[OrderItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItem::className(), ['book_id' => 'id']);
    }

    /**
     * Gets query for [[Publisher]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPublisher()
    {
        return $this->hasOne(Publisher::className(), ['id' => 'publisher_id']);
    }
}
