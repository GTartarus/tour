<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TOUR\CtTour */

$this->title = 'Update Ct Tour: ' . $model->MSTOUR;
$this->params['breadcrumbs'][] = ['label' => 'Ct Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MSTOUR, 'url' => ['view', 'MSTOUR' => $model->MSTOUR, 'MADD' => $model->MADD]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ct-tour-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
