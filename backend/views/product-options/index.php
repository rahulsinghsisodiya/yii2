<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Category;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductOptionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Product Options');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 c_btn" >
                            <p>
                                 <?= Html::a(Yii::t('app', 'Create Product Options'), ['create'], ['class' => 'btn btn-success']) ?>
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
                                                
                                                'option_name',
                                                'option_type',
                                                'create_time',
                                                 [
                                                 'attribute'=>'category_id',
                                                 'value'=>function ($model){$category_name="";
                                                 if($model->category_id)
                                                    
                                                    {$parent_category=Category::findOne(['category_id'=>$model->category_id]);
                                                    
                                                 $parent_category_name=empty($parent_category->category_title) ? "" : $parent_category->category_title;}
                                                 return $parent_category_name;}
                                                 ],   
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
