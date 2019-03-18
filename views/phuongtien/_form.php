<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PhuongTien\Phuongtien */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phuongtien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TENPT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LOAIPT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HIENTRANG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SUCCHUA')->textInput() ?>

    <?= $form->field($model, 'GIATHUE')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
