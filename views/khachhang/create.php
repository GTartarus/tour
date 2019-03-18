<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KhachHang\Khachhang */

$this->title = 'Create Khachhang';
$this->params['breadcrumbs'][] = ['label' => 'Khachhangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khachhang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'items' => $items,
    ]) ?>

</div>
