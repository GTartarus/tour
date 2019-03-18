<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\KhachHang\KhachhangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khachhang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MSKH') ?>

    <?= $form->field($model, 'TENKH') ?>

    <?= $form->field($model, 'GIOITINH')->checkbox() ?>

    <?= $form->field($model, 'ML') ?>

    <?= $form->field($model, 'SDT') ?>

    <?php // echo $form->field($model, 'QUOCTICH')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
