<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TOUR\Tour */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tour-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'TENTOUR')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NGAYBD')->textInput([date("Y-m-d")]) ?>

    <?= $form->field($model, 'NGAYKT')->textInput([date("Y-m-d")]) ?>

    <?= $form->field($model, 'GIA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SOLUONG')->textInput() ?>

    <?= $form->field($model, 'MSKS')->dropDownList($items2) ?>

    <?= $form->field($model, 'MALOAI')->dropDownList($items1) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
