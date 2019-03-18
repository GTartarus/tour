<?php

namespace app\models\PhuongTien;

use Yii;

/**
 * This is the model class for table "{{%phuongtien}}".
 *
 * @property int $MSPT
 * @property string $TENPT
 * @property string $LOAIPT
 * @property string $HIENTRANG
 * @property int $SUCCHUA
 * @property string $GIATHUE
 *
 * @property CtptTour[] $ctptTours
 * @property Tour[] $mSTOURs
 */
class Phuongtien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%phuongtien}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TENPT', 'SUCCHUA'], 'required'],
            [['SUCCHUA'], 'integer'],
            [['GIATHUE'], 'number'],
            [['TENPT', 'LOAIPT', 'HIENTRANG'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MSPT' => 'M S P T',
            'TENPT' => 'T E N P T',
            'LOAIPT' => 'L O A I P T',
            'HIENTRANG' => 'H I E N T R A N G',
            'SUCCHUA' => 'S U C C H U A',
            'GIATHUE' => 'G I A T H U E',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCtptTours()
    {
        return $this->hasMany(CtptTour::className(), ['MSPT' => 'MSPT']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMSTOURs()
    {
        return $this->hasMany(Tour::className(), ['MSTOUR' => 'MSTOUR'])->viaTable('{{%ctpt_tour}}', ['MSPT' => 'MSPT']);
    }
}
