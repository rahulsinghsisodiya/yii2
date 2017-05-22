<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\BlameableBehavior;

/**
 * This is the model class for table "product_option_trans".
 *
 * @property integer $id
 * @property integer $product_option_id
 * @property string $option_value
 * @property string $status
 * @property string $create_time
 * @property string $update_time
 */
class ProductOptionTrans extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_option_trans';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_option_id', 'option_value'], 'required'],
            [['product_option_id'], 'integer'],
            [['status'], 'string'],
            [['create_time', 'update_time'], 'safe'],
            [['option_value'], 'string', 'max' => 255],
        ];
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
                
            ];
        }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_option_id' => 'Product Option ID',
            'option_value' => 'Option Value',
            'status' => 'Status',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
