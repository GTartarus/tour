<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhuongTien\PhuongtienSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phuongtiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phuongtien-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Phuongtien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'MSPT',
            'TENPT',
            'LOAIPT',
            'HIENTRANG',
            'SUCCHUA',
            //'GIATHUE',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
