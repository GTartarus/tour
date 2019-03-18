<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DDDL\DiadiemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Diadiems';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diadiem-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Diadiem', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'MADD',
            'TENDD',
            'DIACHI',
            'MST',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
