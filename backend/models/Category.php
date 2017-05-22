<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\behaviors\SluggableBehavior;


/**
 * This is the model class for table "category".
 *
 * @property integer $category_id
 * @property string $category_title
 * @property string $status
 * @property string $create_time
 * @property string $update_time
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'category';
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
                    'attribute' => 'category_title',
                    'slugAttribute' => 'slug',
                    'ensureUnique' =>true,
                ],
            ];
        }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_title', 'status','description'], 'required'],
            [['status'], 'string'],
            [['file'], 'file'],
            [['file'], 'required', 'on' => 'create'],
            [['file'], 'safe', 'on' => 'update'],
            [['category_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'category_title' => 'Category Title',
            'status' => 'Status',
            'file'   => 'category_image',
            'description' => 'Description',
           
        ];
    }
}
