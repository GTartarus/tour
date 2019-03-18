<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TOUR\Tour1 */

$this->title = $model->MSTOUR;
$this->params['breadcrumbs'][] = ['label' => 'Tour1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tour1-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->MSTOUR], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->MSTOUR], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'MSTOUR',
            'TENTOUR',
            'NGAYBD',
            'NGAYKT',
            'GIA',
            'SOLUONG',
            'MSKS',
            'MALOAI',
            'Image:ntext',
        ],
    ]) ?>

</div>
