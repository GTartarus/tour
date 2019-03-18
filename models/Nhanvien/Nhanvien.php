<?php

namespace app\models\Nhanvien;

use Yii;

/**
 * This is the model class for table "nhanvien".
 *
 * @property int $MSNV
 * @property string $TENNV
 * @property string $NGAYSINH
 * @property bool $GIOITINH
 * @property string $DIACHI
 * @property string $SDT
 * @property string $CMND
 * @property int $MSCV
 */
class Nhanvien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nhanvien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TENNV', 'NGAYSINH', 'DIACHI', 'SDT', 'CMND', 'MSCV'], 'required'],
            [['NGAYSINH'], 'safe'],
            [['GIOITINH'], 'boolean'],
            [['DIACHI'], 'string'],
            [['MSCV'], 'integer'],
            [['TENNV'], 'string', 'max' => 50],
            [['SDT', 'CMND'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MSNV' => 'M S N V',
            'TENNV' => 'T E N N V',
            'NGAYSINH' => 'N G A Y S I N H',
            'GIOITINH' => 'G I O I T I N H',
            'DIACHI' => 'D I A C H I',
            'SDT' => 'S D T',
            'CMND' => 'C M N D',
            'MSCV' => 'M S C V',
        ];
    }
}
