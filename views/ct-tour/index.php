<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TOUR\CtTourSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ct Tours';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ct-tour-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ct Tour', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'MSTOUR',
            'CHUTHICH',
            'MADD',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
