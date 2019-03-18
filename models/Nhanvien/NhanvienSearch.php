<?php

namespace app\models\Nhanvien;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Nhanvien\Nhanvien;

/**
 * NhanvienSearch represents the model behind the search form of `app\models\Nhanvien\Nhanvien`.
 */
class NhanvienSearch extends Nhanvien
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MSNV', 'MSCV'], 'integer'],
            [['TENNV', 'NGAYSINH', 'DIACHI', 'SDT', 'CMND'], 'safe'],
            [['GIOITINH'], 'boolean'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Nhanvien::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'MSNV' => $this->MSNV,
            'NGAYSINH' => $this->NGAYSINH,
            'GIOITINH' => $this->GIOITINH,
            'MSCV' => $this->MSCV,
        ]);

        $query->andFilterWhere(['like', 'TENNV', $this->TENNV])
            ->andFilterWhere(['like', 'DIACHI', $this->DIACHI])
            ->andFilterWhere(['like', 'SDT', $this->SDT])
            ->andFilterWhere(['like', 'CMND', $this->CMND]);

        return $dataProvider;
    }
}
