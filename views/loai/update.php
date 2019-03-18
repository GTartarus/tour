<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KhachHang\Loai */

$this->title = 'Update Loai: ' . $model->ML;
$this->params['breadcrumbs'][] = ['label' => 'Loais', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ML, 'url' => ['view', 'id' => $model->ML]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="loai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
