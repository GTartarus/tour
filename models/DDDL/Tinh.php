<?php

namespace app\models\DDDL;

use Yii;

/**
 * This is the model class for table "{{%tinh}}".
 *
 * @property int $MST
 * @property string $TENTINH
 *
 * @property Diadiem[] $diadiems
 * @property Khachsan[] $khachsans
 */
class Tinh extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tinh}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TENTINH'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MST' => 'M S T',
            'TENTINH' => 'T E N T I N H',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDiadiems()
    {
        return $this->hasMany(Diadiem::className(), ['MST' => 'MST']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKhachsans()
    {
        return $this->hasMany(Khachsan::className(), ['MST' => 'MST']);
    }
}
