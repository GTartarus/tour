<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tour\CtptTour */

$this->title = 'Create Ctpt Tour';
$this->params['breadcrumbs'][] = ['label' => 'Ctpt Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ctpt-tour-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
