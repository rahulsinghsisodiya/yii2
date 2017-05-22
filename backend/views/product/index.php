<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 c_btn" >
                            <p>
                                 <?= Html::a(Yii::t('app', 'Create Product'), ['create'], ['class' => 'btn btn-success']) ?>
                            </p>
                        </div>
                        <div class="col-md-12">
                           
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="rose">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title"><?= Html::encode($this->title) ?></h4>
                                     <div class="table-responsive">
                                          <?= GridView::widget([
                                            'dataProvider' => $dataProvider,
                                            'filterModel' => $searchModel,
                                            'columns' => [
                                                ['class' => 'yii\grid\SerialColumn'],
                                                'product_name',
                                                'product_details:ntext',
                                                'category_id',
                                                'product_price',
                                                // 'product_quantity',
                                                // 'status',
                                                // 'product_discount',
                                                // 'create_time',
                                                // 'update_time',

                                                ['class' => 'yii\grid\ActionColumn'],
                                            ],
                                        ]); ?>
                                </div>
                                </div>
                            </div>
                        </div>    
                    </div>    
                  </div>    
  </div>  
