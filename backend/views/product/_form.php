<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
if(!empty($model)){
    if(!empty($model->product_image)){
        $imagepath = Yii::$app->request->baseUrl.'/'.$model->product_image;
    }else{
        $imagepath = '';
    }
    }else{
    $imagepath = '';
    }
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'category_id')->dropDownList($listcategoryData, ['prompt' => 'Please Select Category']) ?>
    <?= $form->field($model, 'file')->fileInput(['class'=>'dropify','data-default-file' => $imagepath]) ?>

    <?= $form->field($model, 'product_details')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'product_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_quantity')->textInput() ?>
    <?= $form->field($model, 'product_discount')->textInput(['maxlength' => true]) ?>
     <?= $form->field($model, 'status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', '' => '', ], ['prompt' => '']) ?>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
