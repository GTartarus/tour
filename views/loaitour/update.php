<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TOUR\Loaitour */

$this->title = 'Update Loaitour: ' . $model->MALOAI;
$this->params['breadcrumbs'][] = ['label' => 'Loaitours', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MALOAI, 'url' => ['view', 'id' => $model->MALOAI]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="loaitour-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
