<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nhanvien\Nhanvien */

$this->title = 'Update Nhanvien: ' . $model->MSNV;
$this->params['breadcrumbs'][] = ['label' => 'Nhanviens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MSNV, 'url' => ['view', 'id' => $model->MSNV]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nhanvien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
