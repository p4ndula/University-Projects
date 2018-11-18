<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TypeOfFailure;

/**
 * TypeOfFailureSearch represents the model behind the search form of `frontend\models\TypeOfFailure`.
 */
class TypeOfFailureSearch extends TypeOfFailure
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['failure_no'], 'integer'],
            [['failure_type', 'failure_discription'], 'safe'],
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
        $query = TypeOfFailure::find();

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
            'failure_no' => $this->failure_no,
        ]);

        $query->andFilterWhere(['like', 'failure_type', $this->failure_type])
            ->andFilterWhere(['like', 'failure_discription', $this->failure_discription]);

        return $dataProvider;
    }
}
