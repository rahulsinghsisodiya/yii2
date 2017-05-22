<?php
use backend\assets\LoginAsset;
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div>rahul</div>
                        <?php 

                        if(!empty($count)){
                        foreach ($count as $key => $value) {
                            $ran = array('red','green','blue','orange','red','purple');
                            $randomElement = $ran[array_rand($ran, 1)];
                            ?>
                        <div class="col-md-4">
                            <div class="card card-chart">
                                <div class="card-header" data-background-color="<?php echo $randomElement; ?>" data-header-animation="true">
                                    <div class="number"><?php echo $value; ?></div>
                                </div>
                                <div class="card-content">
                                    <div class="card-actions">
                                        <button type="button" class="btn btn-danger btn-simple fix-broken-card">
                                            <i class="material-icons">build</i> Fix Header!
                                        </button>
                                         <?= Html::a('<i class="material-icons">format_list_bulleted</i>', ['/'.$key.'/index'], ['class'=>'btn btn-default btn-simple']) ?>
                                        <?= Html::a('<i class="material-icons">edit</i>', ['/'.$key.'/create'], ['class'=>'btn btn-default btn-simple']) ?>
                                    </div>
                                   
                                    <h4 class="card-title"><?php echo $key; ?></h4>
                                    
                                </div>
                               
                            </div>
                        </div>
                        <?php 
                         }
                    }
                    ?>
                        