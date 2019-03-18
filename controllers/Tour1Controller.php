<?php

namespace app\controllers;

use Yii;
use app\models\TOUR\Tour1;
use app\models\TOUR\Tour1Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

/**
 * Tour1Controller implements the CRUD actions for Tour1 model.
 */
class Tour1Controller extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Tour1 models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Tour1Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Tour1 model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Tour1 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Tour1();
        $items1 = ArrayHelper::map(\app\models\TOUR\Loaitour::find()->all(), 'MALOAI', 'TENLOAI');
        $items2 = ArrayHelper::map(\app\models\DDDL\Khachsan::find()->all(), 'MSKS', 'TENKS');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->MSTOUR]);
        }

        return $this->render('create', [
            'model' => $model,
            'items1' => $items1,
            'items2' => $items2,
        ]);
    }

    /**
     * Updates an existing Tour1 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $items1 = ArrayHelper::map(\app\models\TOUR\Loaitour::find()->all(), 'MALOAI', 'TENLOAI');
        $items2 = ArrayHelper::map(\app\models\DDDL\Khachsan::find()->all(), 'MSKS', 'TENKS');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->MSTOUR]);
        }

        return $this->render('update', [
            'model' => $model,
            'items1' => $items1,
            'items2' => $items2,
        ]);
    }

    /**
     * Deletes an existing Tour1 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Tour1 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Tour1 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Tour1::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
