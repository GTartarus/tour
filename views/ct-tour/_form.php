<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TOUR\CtTour */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ct-tour-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MSTOUR')->textInput() ?>

    <?= $form->field($model, 'CHUTHICH')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MADD')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
