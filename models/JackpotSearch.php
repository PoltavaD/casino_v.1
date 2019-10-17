<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jackpot;

/**
 * JackpotSearch represents the model behind the search form of `app\models\Jackpot`.
 * @property mixed date
 */
class JackpotSearch extends Jackpot
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_player', 'rate',], 'integer'],
            [['jackpot'], 'number'],
            [['date', ], 'safe'],
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
        $query = Jackpot::find();

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
            'id' => $this->id,
            'id_player' => $this->id_player,
            'rate' => $this->rate,
            'jackpot' => $this->jackpot,
            'date' => $this->date,
        ]);

//        $query->andWhere(['like', 'win', $this->jackpot/$this->rate]);

        return $dataProvider;
    }
}
