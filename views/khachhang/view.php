<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\KhachHang;
/* @var $this yii\web\View */
/* @var $model app\models\KhachHang\Khachhang */

$this->title = $model->MSKH;
$this->params['breadcrumbs'][] = ['label' => 'Khachhangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="khachhang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->MSKH], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->MSKH], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'MSKH',
            'TENKH',
            [
                'attribute' => 'GIOITINH',
                'value' => function($model){
                         if($model->GIOITINH == '1'){
                            return 'NAM';                                                   
                         }return 'NỮ';
                       }
            ],
            [
//                'name'=> 'LOẠI KHÁCH',
                'attribute' => 'ML',
                'value' => function($model){
                        $TenLoai= KhachHang\Loai::find()->select(['TENLOAI'])->where(['ML' => $model->ML])->one();
                        return $TenLoai ? $TenLoai->TENLOAI:'None';
                       }
            ],
            'SDT',
            [
                'attribute' => 'QUOCTICH',
                'value' => function($model){
                         if($model->QUOCTICH == '1'){
                            return 'KHÁCH NGOẠI QUỐC';                                                   
                         }return 'KHÁCH VÃNG LAI';
                       }
//                'value' => function($model){
//                $city_name = City::find()->select(['city_name'])->where(['city_id' => $model->order_delivery_address_city])->one();
//                return $city_name ? $city_name->city_name:'None';
//                },       
            ]
        ],
    ]) ?>

</div>
