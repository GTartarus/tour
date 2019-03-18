<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Nhanvien\NhanvienSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nhanvien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MSNV') ?>

    <?= $form->field($model, 'TENNV') ?>

    <?= $form->field($model, 'NGAYSINH') ?>

    <?= $form->field($model, 'GIOITINH')->checkbox() ?>

    <?= $form->field($model, 'DIACHI') ?>

    <?php // echo $form->field($model, 'SDT') ?>

    <?php // echo $form->field($model, 'CMND') ?>

    <?php // echo $form->field($model, 'MSCV') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
