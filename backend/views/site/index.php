<?php
use backend\assets\LoginAsset;
use yii\helpers\Html;
use backend\components\HelloWidget;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<style type="text/css">
    .number {
  font-size: 61px;
  font-weight: bold;
  padding-top: 26%;
  text-align: center;
}
.card-title {
  text-align: center;
  text-transform: uppercase;
}
</style>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                      <?php //echo HelloWidget::widget(['message' => ' Yii2.0','alert' => 'alert']) ?>
                      <?php 
                      echo $html;
                      ?>
                    </div>
                </div>
            </div>
           
       
