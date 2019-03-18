<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Nhanvien\Nhanvien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nhanvien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TENNV')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NGAYSINH')->textInput() ?>

    <?= $form->field($model, 'GIOITINH')->checkbox() ?>

    <?= $form->field($model, 'DIACHI')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'SDT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CMND')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'MSCV')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
