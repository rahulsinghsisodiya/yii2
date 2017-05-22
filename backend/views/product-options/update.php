<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ProductOptions */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Product Options',
]) . $model->option_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Product Options'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->option_id, 'url' => ['view', 'id' => $model->option_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                       <div class="col-md-12">
                            <div class="card">
                                    <div class="card-header card-header-text" data-background-color="rose">
                                        <h4 class="card-title"><?= Html::encode($this->title) ?></h4>
                                    </div>
                                    <div class="card-content">
                                       	<div class="company-create">
										    <?= $this->render('_form', [
       											 'model' => $model,'listcategoryData'=>$listcategoryData,
   											 ]) ?>
                                    	</div>
                            		</div>
                        	</div>
                		</div>
             		</div>     
				</div> 
