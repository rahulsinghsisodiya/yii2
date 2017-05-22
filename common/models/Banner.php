<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "banner".
 *
 * @property integer $id
 * @property string $title
 * @property string $banner_image
 * @property string $status
 * @property string $create_time
 * @property string $update_time
 */
class Banner extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
     public $file;
    public static function tableName()
    {
        return 'banner';
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
    public function rules()
    {
        return [
            [['title', 'status'], 'required'],
            [['status'], 'string'],
            [['file'], 'file'],
            [['title'], 'string', 'max' => 225],
            [['file'], 'required', 'on' => 'create'],
            [['file'], 'safe', 'on' => 'update'],
            [['banner_image'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'file' => 'Banner Image',
            'status' => 'Status',
            
        ];
    }
}
