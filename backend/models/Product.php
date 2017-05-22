<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the model class for table "product".
 *
 * @property integer $product_id
 * @property string $product_name
 * @property string $product_details
 * @property integer $category_id
 * @property string $product_price
 * @property integer $product_quantity
 * @property string $status
 * @property string $product_discount
 * @property string $create_time
 * @property string $update_time
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'product';
    }
    public function behaviors()
        {
            return [
                [
                    'class' => TimestampBehavior::className(),
                    'createdAtAttribute' => 'create_time',
                    'updatedAtAttribute' => 'update_time',
                    'value' => new Expression('NOW()'),
                ],
                [
                    'class' => SluggableBehavior::className(),
                    'attribute' => 'product_name',
                    'slugAttribute' => 'product_slug',
                    'ensureUnique' =>true,
                ],
                [
                    'class' => BlameableBehavior::className(),
                    'createdByAttribute' => 'author_id',
                    'updatedByAttribute' => 'updater_id',
                ],
            ];
        }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_name', 'product_details', 'category_id', 'product_price', 'status', 'product_discount'], 'required'],
            [['product_details', 'status'], 'string'],
            [['product_price', 'product_discount'], 'number'],
            [['category_id'], 'integer'],
            [['file'], 'file'],

            ['product_quantity', 'integer', 'message' => 'Please enter only number.'],
            [['product_name'], 'string', 'max' => 225],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'product_name' => 'Product Name',
            'product_details' => 'Product Details',
            'category_id' => 'Product Category',
            'product_price' => 'Product Price',
            'product_quantity' => 'Product Quantity',
            'status' => 'Status',
            'product_discount' => 'Product Discount',
            'file' => 'Product Images',
             ];
    }
    public function getCategory(){
        return $this->hasOne(Category::className(), ['category_id' => 'category_id']);
    }
}
