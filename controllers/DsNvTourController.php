<?php

namespace app\controllers;

use Yii;
use app\models\TOUR\DsNvTour;
use app\models\TOUR\DsNvTourSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DsNvTourController implements the CRUD actions for DsNvTour model.
 */
class DsNvTourController extends Controller
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
     * Lists all DsNvTour models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DsNvTourSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DsNvTour model.
     * @param integer $MSTOUR
     * @param integer $MSNV
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($MSTOUR, $MSNV)
    {
        return $this->render('view', [
            'model' => $this->findModel($MSTOUR, $MSNV),
        ]);
    }

    /**
     * Creates a new DsNvTour model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DsNvTour();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'MSTOUR' => $model->MSTOUR, 'MSNV' => $model->MSNV]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing DsNvTour model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $MSTOUR
     * @param integer $MSNV
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($MSTOUR, $MSNV)
    {
        $model = $this->findModel($MSTOUR, $MSNV);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'MSTOUR' => $model->MSTOUR, 'MSNV' => $model->MSNV]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing DsNvTour model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $MSTOUR
     * @param integer $MSNV
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($MSTOUR, $MSNV)
    {
        $this->findModel($MSTOUR, $MSNV)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DsNvTour model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $MSTOUR
     * @param integer $MSNV
     * @return DsNvTour the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($MSTOUR, $MSNV)
    {
        if (($model = DsNvTour::findOne(['MSTOUR' => $MSTOUR, 'MSNV' => $MSNV])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
