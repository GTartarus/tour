<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DDDL\Tinh */

$this->title = 'Create Tinh';
$this->params['breadcrumbs'][] = ['label' => 'Tinhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tinh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
