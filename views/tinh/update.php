<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DDDL\Tinh */

$this->title = 'Update Tinh: ' . $model->MST;
$this->params['breadcrumbs'][] = ['label' => 'Tinhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->MST, 'url' => ['view', 'id' => $model->MST]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tinh-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
