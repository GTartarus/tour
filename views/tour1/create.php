<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TOUR\Tour1 */

$this->title = 'Create Tour1';
$this->params['breadcrumbs'][] = ['label' => 'Tour1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tour1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'items1' => $items1,
        'items2' => $items2,
    ]) ?>

</div>
