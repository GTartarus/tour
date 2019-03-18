<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tour\CtptTour */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ctpt-tour-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'MSTOUR')->textInput() ?>

    <?= $form->field($model, 'MSPT')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
