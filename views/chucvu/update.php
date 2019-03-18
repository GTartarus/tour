<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chucvu */

$this->title = 'Update Chucvu: ' . $model->MSCV;
$this->params['breadcrumbs'][] = ['label' => 'Chucvus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MSCV, 'url' => ['view', 'id' => $model->MSCV]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chucvu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
