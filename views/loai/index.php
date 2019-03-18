<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KhachHang\LoaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Loais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loai-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Loai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ML',
            'TENLOAI',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
