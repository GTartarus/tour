<?php

namespace app\controllers;

use Yii;
use app\models\TOUR\CtTour;
use app\models\TOUR\CtTourSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CtTourController implements the CRUD actions for CtTour model.
 */
class CtTourController extends Controller
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
     * Lists all CtTour models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CtTourSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CtTour model.
     * @param integer $MSTOUR
     * @param integer $MADD
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($MSTOUR, $MADD)
    {
        return $this->render('view', [
            'model' => $this->findModel($MSTOUR, $MADD),
        ]);
    }

    /**
     * Creates a new CtTour model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CtTour();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'MSTOUR' => $model->MSTOUR, 'MADD' => $model->MADD]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CtTour model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $MSTOUR
     * @param integer $MADD
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($MSTOUR, $MADD)
    {
        $model = $this->findModel($MSTOUR, $MADD);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'MSTOUR' => $model->MSTOUR, 'MADD' => $model->MADD]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CtTour model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $MSTOUR
     * @param integer $MADD
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($MSTOUR, $MADD)
    {
        $this->findModel($MSTOUR, $MADD)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CtTour model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $MSTOUR
     * @param integer $MADD
     * @return CtTour the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($MSTOUR, $MADD)
    {
        if (($model = CtTour::findOne(['MSTOUR' => $MSTOUR, 'MADD' => $MADD])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
