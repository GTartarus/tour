<?php

namespace app\models\DDDL;

use Yii;

/**
 * This is the model class for table "{{%khachsan}}".
 *
 * @property int $MSKS
 * @property string $TENKS
 * @property string $DIACHI
 * @property string $SDT
 * @property int $MST
 *
 * @property Tinh $mST
 * @property Tour[] $tours
 */
class Khachsan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%khachsan}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TENKS', 'MST'], 'required'],
            [['MST'], 'integer'],
            [['TENKS'], 'string', 'max' => 50],
            [['DIACHI'], 'string', 'max' => 150],
            [['SDT'], 'string', 'max' => 15],
            [['MST'], 'exist', 'skipOnError' => true, 'targetClass' => Tinh::className(), 'targetAttribute' => ['MST' => 'MST']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MSKS' => 'MÃ SỐ KHÁCH SẠN',
            'TENKS' => 'TÊN KHÁCH SẠN',
            'DIACHI' => 'ĐỊA CHỈ',
            'SDT' => 'SỐ ĐIỆN THOẠI',
            'MST' => 'MÃ SỐ TĨNH',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMST()
    {
        return $this->hasOne(Tinh::className(), ['MST' => 'MST']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTours()
    {
        return $this->hasMany(Tour::className(), ['MSKS' => 'MSKS']);
    }
}
