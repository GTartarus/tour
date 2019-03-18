<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tour\CtptTour */

$this->title = 'Update Ctpt Tour: ' . $model->MSTOUR;
$this->params['breadcrumbs'][] = ['label' => 'Ctpt Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MSTOUR, 'url' => ['view', 'MSTOUR' => $model->MSTOUR, 'MSPT' => $model->MSPT]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ctpt-tour-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
