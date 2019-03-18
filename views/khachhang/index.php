<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KhachHang\KhachhangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Khachhangs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="khachhang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Khachhang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'layout'=>"{pager}\n{summary}\n{items}",
        'columns' => [
            
            ['class' => 'yii\grid\SerialColumn'],
            'MSKH',
            'TENKH',
//            'GIOITINH:boolean',
            [
                'attribute' => 'GIOITINH',
                'value' => function($model){
                         if($model->GIOITINH == '1'){
                            return 'NAM';                                                   
                         }return 'NỮ';
                       }
            ],
            'SDT',
//            'QUOCTICH:boolean',
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
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
