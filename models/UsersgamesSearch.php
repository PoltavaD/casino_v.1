<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usersgames;

/**
 * UsersgamesSearch represents the model behind the search form of `app\models\Usersgames`.
 */
class UsersgamesSearch extends Usersgames
{
    public $pitBossLogin;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_game', 'id_player', 'points', 'summa_zala'], 'integer'],
            [['date','pitBossLogin', 'id_pitBoss', ], 'safe'],
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
        $query = Usersgames::find();
        $query->joinWith('pitBoss');


        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['pitBoss.login'] = [
          'asc' => [PitBosses::tableName().'.login' => SORT_ASC],
          'desc' => [PitBosses::tableName().'.login' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_game' => $this->id_game,
            'id_pitBoss' => $this->id_pitBoss,
            'id_player' => $this->id_player,
            'points' => $this->points,
            'summa_zala' => $this->summa_zala,
            'date' => $this->date,
        ]);

        $query->andFilterWhere(['like', 'pitBosses.login', $this->pitBossLogin,]);

        return $dataProvider;
    }

}