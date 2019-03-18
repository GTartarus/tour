<?php

namespace app\models\KhachHang;

use Yii;

/**
 * This is the model class for table "{{%loai}}".
 *
 * @property int $ML
 * @property string $TENLOAI
 *
 * @property Khachhang[] $khachhangs
 */
class Loai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%loai}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TENLOAI'], 'required'],
            [['TENLOAI'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ML' => 'M L',
            'TENLOAI' => 'T E N L O A I',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKhachhangs()
    {
        return $this->hasMany(Khachhang::className(), ['ML' => 'ML']);
    }
}
