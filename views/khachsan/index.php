<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DDDL\KhachsanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Khachsans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khachsan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Khachsan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'MSKS',
            'TENKS',
            'DIACHI',
            'SDT',
            'MST',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
