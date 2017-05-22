<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProductOptions */
/* @var $form yii\widgets\ActiveForm */
?>
<?php 
if(!empty($model)){
  if(!empty($model->productoptiontrans)){
    $op = $model->productoptiontrans->option_value;
  }
  else{
    $op = '';
  }
}
?>
<div class="product-options-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList($listcategoryData, ['prompt' => 'Please Select Category'],['onchange'=> 'showUser(this.value)']) ?>

    <?= $form->field($model, 'option_name')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'option_type')->dropDownList([ 'Text' => 'Text', 'Check Box' => 'Check Box', 'Dropdown' => 'Dropdown', 'Radio Button' => 'Radio Button', 'Textarea' => 'Textarea', ], ['prompt' => '']) ?>

    <span id="selectoption"></span>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <input type="hidden" value="<?php echo $op ?>" class="op">
    <input type="hidden" value="<?php echo $model->option_type; ?>" class="op_type">
    <?php ActiveForm::end(); ?>

</div>

<?php 
$url = \yii\helpers\Url::to([
    'product-options/simple', 
   ]);
$script = <<< JS

$('#productoptions-option_type').on('change', function(e) {
	var id = $(this).val();
 var op_type =$('.op_type').val();
    $.ajax({
       url: '$url',
       data: {id: id,opvalue:op_value},
       success: function(data) {
          $('#selectoption').html(data.body);
       }
    });
});
var op = $('.op').val();
var op_type =$('.op_type').val();
if(op_type != ''){
  var id = op_type;
  var op_value = op; 
    $.ajax({
       url: '$url',
       data: {id: id,opvalue:op_value},
       success: function(data) {
          $('#selectoption').html(data.body);
       }
    });
}


JS;
$this->registerJs($script);
?>
