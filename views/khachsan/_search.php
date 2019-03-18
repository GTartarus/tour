<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DDDL\KhachsanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khachsan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MSKS') ?>

    <?= $form->field($model, 'TENKS') ?>

    <?= $form->field($model, 'DIACHI') ?>

    <?= $form->field($model, 'SDT') ?>

    <?= $form->field($model, 'MST') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
