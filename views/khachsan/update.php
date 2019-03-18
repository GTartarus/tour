<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DDDL\Khachsan */

$this->title = 'Update Khachsan: ' . $model->MSKS;
$this->params['breadcrumbs'][] = ['label' => 'Khachsans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MSKS, 'url' => ['view', 'id' => $model->MSKS]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="khachsan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'items' => $items,
    ]) ?>

</div>
