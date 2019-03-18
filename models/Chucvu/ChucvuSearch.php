<?php

namespace app\models\Chucvu;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Chucvu\Chucvu;

/**
 * ChucvuSearch represents the model behind the search form of `app\models\Chucvu`.
 */
class ChucvuSearch extends Chucvu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MSCV'], 'integer'],
            [['TENCV', 'MOTA'], 'safe'],
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
        $query = Chucvu::find();

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
            'MSCV' => $this->MSCV,
        ]);

        $query->andFilterWhere(['like', 'TENCV', $this->TENCV])
            ->andFilterWhere(['like', 'MOTA', $this->MOTA]);

        return $dataProvider;
    }
}
