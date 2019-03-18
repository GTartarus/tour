<?php

namespace app\models\Admin;

use Yii;

/**
 * This is the model class for table "Admin".
 *
 * @property string $ADMIN
 * @property string $PASS
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Admin';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ADMIN'], 'required'],
            [['ADMIN', 'PASS'], 'string', 'max' => 18],
            [['ADMIN'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ADMIN' => 'A D M I N',
            'PASS' => 'P A S S',
        ];
    }
}
