<?php

namespace app\models\KhachHang;

use Yii;

/**
 * This is the model class for table "{{%khachhang}}".
 *
 * @property int $MSKH
 * @property string $TENKH
 * @property bool $GIOITINH
 * @property int $ML
 * @property string $SDT
 * @property bool $QUOCTICH
 *
 * @property Loai $mL
 */
class Khachhang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%khachhang}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TENKH'], 'required'],
            [['GIOITINH', 'QUOCTICH'], 'boolean'],
            [['ML'], 'integer'],
            [['TENKH'], 'string', 'max' => 50],
            [['SDT'], 'string', 'max' => 15],
            [['ML'], 'exist', 'skipOnError' => true, 'targetClass' => Loai::className(), 'targetAttribute' => ['ML' => 'ML']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MSKH' => 'MÃ SỐ KHÁCH HÀNG',
            'TENKH' => 'TÊN KHÁCH HÀNG',           
            'ML' => 'LOẠI KHÁCH',
            'SDT' => 'SỐ ĐIỆN THOẠI',
            'QUOCTICH' => 'QUỐC TỊCH',
            'GIOITINH' => 'GIỚI TÍNH',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getML()
    {
        return $this->hasOne(Loai::className(), ['ML' => 'ML']);
    }
}
