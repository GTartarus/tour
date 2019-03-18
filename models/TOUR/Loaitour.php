<?php

namespace app\models\TOUR;

use Yii;

/**
 * This is the model class for table "{{%loaitour}}".
 *
 * @property int $MALOAI
 * @property string $TENLOAI
 * @property string $MOTA
 *
 * @property Tour[] $tours
 */
class Loaitour extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%loaitour}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MOTA'], 'string'],
            [['TENLOAI'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MALOAI' => 'M A L O A I',
            'TENLOAI' => 'T E N L O A I',
            'MOTA' => 'M O T A',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTours()
    {
        return $this->hasMany(Tour::className(), ['MALOAI' => 'MALOAI']);
    }
}
