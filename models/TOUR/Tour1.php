<?php

namespace app\models\TOUR;
use app\models\DDDL\Khachsan;
use Yii;

/**
 * This is the model class for table "{{%tour}}".
 *
 * @property int $MSTOUR
 * @property string $TENTOUR
 * @property string $NGAYBD
 * @property string $NGAYKT
 * @property string $GIA
 * @property int $SOLUONG
 * @property int $MSKS
 * @property int $MALOAI
 * @property string $Image
 *
 * @property CtTour[] $ctTours
 * @property Diadiem[] $mADDs
 * @property DangkyTour[] $dangkyTours
 * @property Khachhang[] $mSKHs
 * @property DsNvTour[] $dsNvTours
 * @property Nhanvien[] $mSNVs
 * @property Loaitour $mALOAI
 * @property Khachsan $mSKS
 */
class Tour1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%tour}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['TENTOUR', 'NGAYBD', 'NGAYKT', 'GIA', 'MSKS'], 'required'],
            [['NGAYBD', 'NGAYKT'], 'safe'],
            [['GIA'], 'number'],
            [['SOLUONG', 'MSKS', 'MALOAI'], 'integer'],
            [['Image'], 'string'],
            [['TENTOUR'], 'string', 'max' => 150],
            [['MALOAI'], 'exist', 'skipOnError' => true, 'targetClass' => Loaitour::className(), 'targetAttribute' => ['MALOAI' => 'MALOAI']],
            [['MSKS'], 'exist', 'skipOnError' => true, 'targetClass' => Khachsan::className(), 'targetAttribute' => ['MSKS' => 'MSKS']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MSTOUR' => 'MÃ TOUR',
            'TENTOUR' => 'TÊN TOUR',
            'NGAYBD' => 'NGÀY BẮT ĐẦU ',
            'NGAYKT' => 'NGÀY KẾT THÚC',
            'GIA' => 'GIÁ',
            'SOLUONG' => 'SỐ LƯỢNG',
            'MSKS' => 'TÊN KHÁCH SẠN',
            'MALOAI' => 'LOẠI TOUR',
            'Image' => 'Image',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCtTours()
    {
        return $this->hasMany(CtTour::className(), ['MSTOUR' => 'MSTOUR']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMADDs()
    {
        return $this->hasMany(Diadiem::className(), ['MADD' => 'MADD'])->viaTable('{{%ct_tour}}', ['MSTOUR' => 'MSTOUR']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDangkyTours()
    {
        return $this->hasMany(DangkyTour::className(), ['MSTOUR' => 'MSTOUR']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMSKHs()
    {
        return $this->hasMany(Khachhang::className(), ['MSKH' => 'MSKH'])->viaTable('{{%dangky_tour}}', ['MSTOUR' => 'MSTOUR']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDsNvTours()
    {
        return $this->hasMany(DsNvTour::className(), ['MSTOUR' => 'MSTOUR']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMSNVs()
    {
        return $this->hasMany(Nhanvien::className(), ['MSNV' => 'MSNV'])->viaTable('{{%ds_nv_tour}}', ['MSTOUR' => 'MSTOUR']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMALOAI()
    {
        return $this->hasOne(Loaitour::className(), ['MALOAI' => 'MALOAI']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMSKS()
    {
        return $this->hasOne(Khachsan::className(), ['MSKS' => 'MSKS']);
    }
}
