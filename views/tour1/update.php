<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TOUR\Tour1 */

$this->title = 'Update Tour1: ' . $model->MSTOUR;
$this->params['breadcrumbs'][] = ['label' => 'Tour1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MSTOUR, 'url' => ['view', 'id' => $model->MSTOUR]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tour1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'items1' => $items1,
        'items2' => $items2,
    ]) ?>

</div>
