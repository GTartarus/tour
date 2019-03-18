<?php

namespace app\controllers;

use Yii;
use app\models\Tour\CtptTour;
use app\models\Tour\CtptTourSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CtptTourController implements the CRUD actions for CtptTour model.
 */
class CtptTourController extends Controller
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
     * Lists all CtptTour models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CtptTourSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CtptTour model.
     * @param integer $MSTOUR
     * @param integer $MSPT
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($MSTOUR, $MSPT)
    {
        return $this->render('view', [
            'model' => $this->findModel($MSTOUR, $MSPT),
        ]);
    }

    /**
     * Creates a new CtptTour model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CtptTour();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'MSTOUR' => $model->MSTOUR, 'MSPT' => $model->MSPT]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CtptTour model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $MSTOUR
     * @param integer $MSPT
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($MSTOUR, $MSPT)
    {
        $model = $this->findModel($MSTOUR, $MSPT);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'MSTOUR' => $model->MSTOUR, 'MSPT' => $model->MSPT]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CtptTour model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $MSTOUR
     * @param integer $MSPT
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($MSTOUR, $MSPT)
    {
        $this->findModel($MSTOUR, $MSPT)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CtptTour model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $MSTOUR
     * @param integer $MSPT
     * @return CtptTour the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($MSTOUR, $MSPT)
    {
        if (($model = CtptTour::findOne(['MSTOUR' => $MSTOUR, 'MSPT' => $MSPT])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
