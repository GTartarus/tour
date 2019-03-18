<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DDDL\Khachsan */

$this->title = 'Create Khachsan';
$this->params['breadcrumbs'][] = ['label' => 'Khachsans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khachsan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'items' => $items,
    ]) ?>

</div>
