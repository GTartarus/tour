<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TOUR\TourSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tour-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MSTOUR') ?>

    <?= $form->field($model, 'TENTOUR') ?>

    <?= $form->field($model, 'NGAYBD') ?>

    <?= $form->field($model, 'NGAYKT') ?>

    <?= $form->field($model, 'GIA') ?>

    <?php // echo $form->field($model, 'SOLUONG') ?>

    <?php // echo $form->field($model, 'MSKS') ?>

    <?php // echo $form->field($model, 'MALOAI') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
