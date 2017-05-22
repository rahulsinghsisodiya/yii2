<?php

namespace backend\controllers;

use Yii;
use app\models\ProductOptions;
use app\models\ProductOptionsSearch;
use app\models\Category;
use app\models\ProductOptionTrans;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;
use yii\db\Query;
use yii\web\Response;

/**
 * ProductOptionsController implements the CRUD actions for ProductOptions model.
 */
class ProductOptionsController extends Controller
{
    /**
     * @inheritdoc
     */
     public $jsFile;

    public function behaviors()
    {   $this->layout = 'dashboard';
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function init() {
        parent::init();

        $this->jsFile = '@app/views/' . $this->id . '/ajax.js';

        // Publish and register the required JS file
        Yii::$app->assetManager->publish($this->jsFile);
        $this->getView()->registerJsFile(
            Yii::$app->assetManager->getPublishedUrl($this->jsFile),
            ['yii\web\YiiAsset'] // depends
        );
    }

    /**
     * Lists all ProductOptions models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductOptionsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProductOptions model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ProductOptions model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProductOptions();
        $listcategoryData = $this->Getcategory();
        if ($model->load(Yii::$app->request->post())) {
            $model->save();
            $inserid = $model->option_id;
            if(!empty($inserid)){
                if(!empty($model->options)){
                    $op = new ProductOptionTrans();
                        $op->product_option_id = $inserid;
                        $op->option_value = $model->options;
                        $op->save();
                }
            }
            return $this->redirect(['view', 'id' => $model->option_id]);
        } else {
            return $this->render('create', [
                'model' => $model,'listcategoryData'=>$listcategoryData,
            ]);
        }
    }

    /**
     * Updates an existing ProductOptions model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = ProductOptions::find()->joinWith('productoptiontrans')->where(['option_id' =>$id])->one();
        $listcategoryData = $this->Getcategory();
        if ($model->load(Yii::$app->request->post())) {
            //p($model);
            $model->save();
            $updateid = $model->option_id;
            if(!empty($updateid)){
                if(!empty($model->options)){
                    $op = ProductOptionTrans::find()->where(['id' => $model->productoptiontrans->id])->one();
                       
                        $op->product_option_id = $updateid;
                        $op->option_value = $model->options;
                        $op->save();
                }
            }
            return $this->redirect(['view', 'id' => $model->option_id]);
        } else {
            return $this->render('update', [
                'model' => $model,'listcategoryData'=>$listcategoryData,
            ]);
        }
    }

    /**
     * Deletes an existing ProductOptions model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ProductOptions model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ProductOptions the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProductOptions::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function Getcategory(){
         $category = category::find()->where(['status' => 'Active'])->all();
        $listcategoryData = ArrayHelper::map($category,'category_id','category_title');
        return $listcategoryData;
    }
    public function actionSimple($id = null,$opvalue = null) {
        
       $model = new ProductOptions();
        if (Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            $html = Yii::$app->view->renderFile('@app/views/product-options/partical.php',['inputtype' => $id,'model'=>$model,'opvalue'=>$opvalue]);        
            $res = array(
               'body'    => $html,
                'success' => true,
            );
            return $res;
        }
    }
}
