<?php

namespace app\models\TOUR;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TOUR\Tour1;

/**
 * Tour1Search represents the model behind the search form of `app\models\TOUR\Tour1`.
 */
class Tour1Search extends Tour1
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MSTOUR', 'SOLUONG', 'MSKS', 'MALOAI'], 'integer'],
            [['TENTOUR', 'NGAYBD', 'NGAYKT', 'Image'], 'safe'],
            [['GIA'], 'number'],
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
        $query = Tour1::find();

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
            'MSTOUR' => $this->MSTOUR,
            'NGAYBD' => $this->NGAYBD,
            'NGAYKT' => $this->NGAYKT,
            'GIA' => $this->GIA,
            'SOLUONG' => $this->SOLUONG,
            'MSKS' => $this->MSKS,
            'MALOAI' => $this->MALOAI,
        ]);

        $query->andFilterWhere(['like', 'TENTOUR', $this->TENTOUR])
            ->andFilterWhere(['like', 'Image', $this->Image]);

        return $dataProvider;
    }
}
