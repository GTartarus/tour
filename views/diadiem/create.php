<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DDDL\Diadiem */

$this->title = 'Create Diadiem';
$this->params['breadcrumbs'][] = ['label' => 'Diadiems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diadiem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
