<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TOUR\Tour1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tour1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour1-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tour1', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'MSTOUR',
            'TENTOUR',
            'NGAYBD',
            'NGAYKT',
            'GIA',
            //'SOLUONG',
            //'MSKS',
            //'MALOAI',
            //'Image:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
