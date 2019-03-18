<?php

namespace app\models\DDDL;

use Yii;

/**
 * This is the model class for table "{{%diadiem}}".
 *
 * @property int $MADD
 * @property string $TENDD
 * @property string $DIACHI
 * @property int $MST
 *
 * @property CtTour[] $ctTours
 * @property Tour[] $mSTOURs
 * @property Tinh $mST
 */
class Diadiem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%diadiem}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TENDD', 'MST'], 'required'],
            [['MST'], 'integer'],
            [['TENDD'], 'string', 'max' => 50],
            [['DIACHI'], 'string', 'max' => 150],
            [['MST'], 'exist', 'skipOnError' => true, 'targetClass' => Tinh::className(), 'targetAttribute' => ['MST' => 'MST']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MADD' => 'M A D D',
            'TENDD' => 'T E N D D',
            'DIACHI' => 'D I A C H I',
            'MST' => 'M S T',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCtTours()
    {
        return $this->hasMany(CtTour::className(), ['MADD' => 'MADD']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMSTOURs()
    {
        return $this->hasMany(Tour::className(), ['MSTOUR' => 'MSTOUR'])->viaTable('{{%ct_tour}}', ['MADD' => 'MADD']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMST()
    {
        return $this->hasOne(Tinh::className(), ['MST' => 'MST']);
    }
}
