<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BannerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Banners');
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 c_btn" >
                            <p>
                                <?= Html::a(Yii::t('app', 'Create Banner'), ['create'], ['class' => 'btn btn-success']) ?>
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

                                                'id',
                                                'title',
                                                
                                                 [
                                                        'attribute' => 'banner_image',
                                                        'format' => 'html',    
                                                        'value' => function ($data) {
                                                            return Html::img(Yii::getAlias('@web').'/'. $data['banner_image'],
                                                                ['width' => '70px']);
                                                        },
                                                    ],
                                                'status',
                                                'create_time',
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

