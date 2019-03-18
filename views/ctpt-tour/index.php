<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Tour\CtptTourSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ctpt Tours';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ctpt-tour-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ctpt Tour', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'MSTOUR',
            'MSPT',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
