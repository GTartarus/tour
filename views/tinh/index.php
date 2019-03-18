<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DDDL\TinhSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tinhs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tinh-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tinh', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'MST',
            'TENTINH',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
