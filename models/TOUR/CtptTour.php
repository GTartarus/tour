<?php

namespace app\models\TOUR;

use Yii;
use app\models\PhuongTien\Phuongtien;

/**
 * This is the model class for table "{{%ctpt_tour}}".
 *
 * @property int $MSTOUR
 * @property int $MSPT
 *
 * @property Tour $mSTOUR
 * @property Phuongtien $mSPT
 */
class CtptTour extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ctpt_tour}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MSTOUR', 'MSPT'], 'required'],
            [['MSTOUR', 'MSPT'], 'integer'],
            [['MSTOUR', 'MSPT'], 'unique', 'targetAttribute' => ['MSTOUR', 'MSPT']],
            [['MSTOUR'], 'exist', 'skipOnError' => true, 'targetClass' => Tour::className(), 'targetAttribute' => ['MSTOUR' => 'MSTOUR']],
            [['MSPT'], 'exist', 'skipOnError' => true, 'targetClass' => Phuongtien::className(), 'targetAttribute' => ['MSPT' => 'MSPT']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MSTOUR' => 'M S T O U R',
            'MSPT' => 'M S P T',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMSTOUR()
    {
        return $this->hasOne(Tour::className(), ['MSTOUR' => 'MSTOUR']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMSPT()
    {
        return $this->hasOne(Phuongtien::className(), ['MSPT' => 'MSPT']);
    }
}
