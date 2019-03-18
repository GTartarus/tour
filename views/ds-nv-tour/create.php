<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TOUR\DsNvTour */

$this->title = 'Create Ds Nv Tour';
$this->params['breadcrumbs'][] = ['label' => 'Ds Nv Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ds-nv-tour-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
