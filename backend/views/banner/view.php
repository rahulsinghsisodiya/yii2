<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Banner */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Banners'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<style type="text/css">
.card img {
  width: 200px;
}
</style>

<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 c_btn" >
                           <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                            <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
                                'class' => 'btn btn-danger',
                                'data' => [
                                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                    'method' => 'post',
                                ],
                            ]) ?>
                                    </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header card-header-icon" data-background-color="rose">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <div class="card-content">
                                    <h4 class="card-title"><?= Html::encode($this->title) ?></h4>
                                     <div class="table-responsive">
                                        <?= DetailView::widget([
                                            'model' => $model,
                                            'attributes' => [
                                                'id',
                                                'title',
                                                ['attribute' => 'banner_image',
                                                                'format' => 'html',    
                                                                'value' => function ($data) {
                                                                    return Html::img(Yii::getAlias('@web').'/'. $data['banner_image'],
                                                                        ['width' => '70px']);
                                                                },
                                                            ],
                                                'status',
                                                'create_time',
                                                'update_time',
                                            ],
                                        ]) ?>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>    
                  </div>    
  </div> 


