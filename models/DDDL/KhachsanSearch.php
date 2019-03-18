<?php

namespace app\models\DDDL;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DDDL\Khachsan;

/**
 * KhachsanSearch represents the model behind the search form of `app\models\DDDL\Khachsan`.
 */
class KhachsanSearch extends Khachsan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MSKS', 'MST'], 'integer'],
            [['TENKS', 'DIACHI', 'SDT'], 'safe'],
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
        $query = Khachsan::find();

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
            'MSKS' => $this->MSKS,
            'MST' => $this->MST,
        ]);

        $query->andFilterWhere(['like', 'TENKS', $this->TENKS])
            ->andFilterWhere(['like', 'DIACHI', $this->DIACHI])
            ->andFilterWhere(['like', 'SDT', $this->SDT]);

        return $dataProvider;
    }
}
