<?php

namespace app\models\DDDL;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\DDDL\Diadiem;

/**
 * DiadiemSearch represents the model behind the search form of `app\models\DDDL\Diadiem`.
 */
class DiadiemSearch extends Diadiem
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MADD', 'MST'], 'integer'],
            [['TENDD', 'DIACHI'], 'safe'],
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
        $query = Diadiem::find();

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
            'MADD' => $this->MADD,
            'MST' => $this->MST,
        ]);

        $query->andFilterWhere(['like', 'TENDD', $this->TENDD])
            ->andFilterWhere(['like', 'DIACHI', $this->DIACHI]);

        return $dataProvider;
    }
}
