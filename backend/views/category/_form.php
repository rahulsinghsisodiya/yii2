<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Category */
/* @var $form yii\widgets\ActiveForm */
if(!empty($model)){
    if(!empty($model->category_image)){
        $imagepath = Yii::$app->request->baseUrl.'/'.$model->category_image;
    }else{
        $imagepath = '';
    }
	}else{
    $imagepath = '';
	}
?>

<div class="category-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'category_title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'file')->fileInput(['class'=>'dropify','data-default-file' => $imagepath]) ?>
    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
        'options' => ['rows' => 6,'CKEDITOR.config.allowedContent' => 'true'],

        //'preset' => 'basic',
        //'editorTemplate'=>'full',
    ]) ?>
    <?= $form->field($model, 'status')->dropDownList([ 'Active' => 'Active', 'Inactive' => 'Inactive', '' => '', ], ['prompt' => '']) ?>
 <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
 </div>
    <?php ActiveForm::end(); ?>

</div>
