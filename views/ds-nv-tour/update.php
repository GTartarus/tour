<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TOUR\DsNvTour */

$this->title = 'Update Ds Nv Tour: ' . $model->MSTOUR;
$this->params['breadcrumbs'][] = ['label' => 'Ds Nv Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MSTOUR, 'url' => ['view', 'MSTOUR' => $model->MSTOUR, 'MSNV' => $model->MSNV]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ds-nv-tour-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
