<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\DDDL\Khachsan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khachsan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TENKS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DIACHI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SDT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MST')->dropDownList($items) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
