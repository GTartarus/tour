<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\KhachHang\Loai */

$this->title = 'Create Loai';
$this->params['breadcrumbs'][] = ['label' => 'Loais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
