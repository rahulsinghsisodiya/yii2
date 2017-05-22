<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
 <?php $form = ActiveForm::begin(); ?>

<?php 
if(($inputtype == 'Check Box') OR ($inputtype == 'Dropdown') OR ($inputtype == 'Radio Button')){
$html =  $form->field($model, 'options')->textInput(['maxlength' => true,'class' =>'selectize','value' =>$opvalue]); 
}
else{
$html = '';
}
echo $html;
?>
<script type="text/javascript">
$(document).ready(function(){
$('.selectize').selectize({
    plugins: ['restore_on_backspace'],
    delimiter: ',',
    persist: false,
    create: function(input) {
        return {
            value: input,
            text: input
        }
    }
});
});   
</script>