<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PhuongTien\Phuongtien */

$this->title = 'Create Phuongtien';
$this->params['breadcrumbs'][] = ['label' => 'Phuongtiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phuongtien-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
