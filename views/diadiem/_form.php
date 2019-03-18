<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DDDL\Diadiem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diadiem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TENDD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DIACHI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MST')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
