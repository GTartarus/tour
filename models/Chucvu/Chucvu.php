<?php

namespace app\models\Chucvu;

use Yii;

/**
 * This is the model class for table "chucvu".
 *
 * @property int $MSCV
 * @property string $TENCV
 * @property string $MOTA
 */
class Chucvu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'chucvu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TENCV'], 'required'],
            [['MOTA'], 'string'],
            [['TENCV'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MSCV' => 'M S C V',
            'TENCV' => 'T E N C V',
            'MOTA' => 'M O T A',
        ];
    }
}
