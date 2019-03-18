<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\KhachHang\Khachhang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="khachhang-form">
    
    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'TENKH')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'GIOITINH')->dropDownList(['1' => 'NAM', '0' => 'NỮ']) ?>

    <?= $form->field($model, 'ML')->dropDownList($items) ?>

    <?= $form->field($model, 'SDT')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'QUOCTICH')->dropDownList(['1' => 'KHÁCH NGOẠI QUỐC', '0' => 'KHÁCH VÃNG LAI']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
