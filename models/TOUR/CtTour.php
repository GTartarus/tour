<?php

namespace app\models\TOUR;

use Yii;
use app\models\DDDL\Diadiem;
/**
 * This is the model class for table "{{%ct_tour}}".
 *
 * @property int $MSTOUR
 * @property string $CHUTHICH
 * @property int $MADD
 *
 * @property Tour $mSTOUR
 * @property Diadiem $mADD
 */
class CtTour extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%ct_tour}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MSTOUR', 'MADD'], 'required'],
            [['MSTOUR', 'MADD'], 'integer'],
            [['CHUTHICH'], 'string', 'max' => 10],
            [['MSTOUR', 'MADD'], 'unique', 'targetAttribute' => ['MSTOUR', 'MADD']],
            [['MSTOUR'], 'exist', 'skipOnError' => true, 'targetClass' => Tour::className(), 'targetAttribute' => ['MSTOUR' => 'MSTOUR']],
            [['MADD'], 'exist', 'skipOnError' => true, 'targetClass' => Diadiem::className(), 'targetAttribute' => ['MADD' => 'MADD']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MSTOUR' => 'M S T O U R',
            'CHUTHICH' => 'C H U T H I C H',
            'MADD' => 'M A D D',
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
    public function getMADD()
    {
        return $this->hasOne(Diadiem::className(), ['MADD' => 'MADD']);
    }
}
