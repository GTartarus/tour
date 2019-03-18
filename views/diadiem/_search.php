<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DDDL\DiadiemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diadiem-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'MADD') ?>

    <?= $form->field($model, 'TENDD') ?>

    <?= $form->field($model, 'DIACHI') ?>

    <?= $form->field($model, 'MST') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
