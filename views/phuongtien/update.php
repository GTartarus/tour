<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PhuongTien\Phuongtien */

$this->title = 'Update Phuongtien: ' . $model->MSPT;
$this->params['breadcrumbs'][] = ['label' => 'Phuongtiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MSPT, 'url' => ['view', 'id' => $model->MSPT]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="phuongtien-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
