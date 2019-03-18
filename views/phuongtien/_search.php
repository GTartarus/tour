<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PhuongTien\PhuongtienSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phuongtien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MSPT') ?>

    <?= $form->field($model, 'TENPT') ?>

    <?= $form->field($model, 'LOAIPT') ?>

    <?= $form->field($model, 'HIENTRANG') ?>

    <?= $form->field($model, 'SUCCHUA') ?>

    <?php // echo $form->field($model, 'GIATHUE') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
