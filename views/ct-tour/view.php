<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TOUR\CtTour */

$this->title = $model->MSTOUR;
$this->params['breadcrumbs'][] = ['label' => 'Ct Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ct-tour-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'MSTOUR' => $model->MSTOUR, 'MADD' => $model->MADD], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'MSTOUR' => $model->MSTOUR, 'MADD' => $model->MADD], [
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
            'CHUTHICH',
            'MADD',
        ],
    ]) ?>

</div>
