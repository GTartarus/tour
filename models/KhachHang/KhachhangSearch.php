<?php

namespace app\models\KhachHang;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\KhachHang\Khachhang;

/**
 * KhachhangSearch represents the model behind the search form of `app\models\KhachHang\Khachhang`.
 */
class KhachhangSearch extends Khachhang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MSKH', 'ML'], 'integer'],
            [['TENKH', 'SDT'], 'safe'],
            [['GIOITINH', 'QUOCTICH'], 'boolean'],
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
        $query = Khachhang::find();

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
            'MSKH' => $this->MSKH,
            'GIOITINH' => $this->GIOITINH,
            'ML' => $this->ML,
            'QUOCTICH' => $this->QUOCTICH,
        ]);

        $query->andFilterWhere(['like', 'TENKH', $this->TENKH])
            ->andFilterWhere(['like', 'SDT', $this->SDT]);

        return $dataProvider;
    }
}
