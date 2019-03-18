<?php

namespace app\models\TOUR;

use Yii;
use app\models\Nhanvien\Nhanvien;
/**
 * This is the model class for table "{{%ds_nv_tour}}".
 *
 * @property int $MSTOUR
 * @property int $MSNV
 *
 * @property Nhanvien $mSNV
 * @property Tour $mSTOUR
 */
class DsNvTour extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ds_nv_tour}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MSTOUR', 'MSNV'], 'required'],
            [['MSTOUR', 'MSNV'], 'integer'],
            [['MSTOUR', 'MSNV'], 'unique', 'targetAttribute' => ['MSTOUR', 'MSNV']],
            [['MSNV'], 'exist', 'skipOnError' => true, 'targetClass' => Nhanvien::className(), 'targetAttribute' => ['MSNV' => 'MSNV']],
            [['MSTOUR'], 'exist', 'skipOnError' => true, 'targetClass' => Tour::className(), 'targetAttribute' => ['MSTOUR' => 'MSTOUR']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MSTOUR' => 'M S T O U R',
            'MSNV' => 'M S N V',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMSNV()
    {
        return $this->hasOne(Nhanvien::className(), ['MSNV' => 'MSNV']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMSTOUR()
    {
        return $this->hasOne(Tour::className(), ['MSTOUR' => 'MSTOUR']);
    }
}
