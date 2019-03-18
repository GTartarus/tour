<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TOUR\CtTour */

$this->title = 'Create Ct Tour';
$this->params['breadcrumbs'][] = ['label' => 'Ct Tours', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ct-tour-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
