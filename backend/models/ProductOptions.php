<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\BlameableBehavior;


/**
 * This is the model class for table "product_options".
 *
 * @property integer $option_id
 * @property integer $category_id
 * @property string $option_name
 * @property string $option_type
 * @property string $create_time
 * @property string $update_time
 * @property integer $author_id
 * @property integer $updater_id
 *
 * @property Category $category
 */
class ProductOptions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $options;
    public static function tableName()
    {
        return 'product_options';
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
            [['category_id', 'option_name', 'option_type'], 'required'],
            [['category_id'], 'integer'],
            [['option_type'], 'string'],
            [['options'], 'safe'],
            [['option_name'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'category_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'option_id' => 'Option ID',
            'category_id' => 'Category Name',
            'option_name' => 'Option Name',
            'option_type' => 'Option Type',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'author_id' => 'Author ID',
            'updater_id' => 'Updater ID',
            'options'   => 'options',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['category_id' => 'category_id']);
    }
    public function getProductoptiontrans()
    {
        return $this->hasOne(ProductOptionTrans::className(), ['product_option_id' => 'option_id']);
    }
}
