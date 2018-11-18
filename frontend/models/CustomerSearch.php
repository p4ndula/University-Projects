<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Customer;

/**
 * CustomerSearch represents the model behind the search form of `frontend\models\customer`.
 */
class CustomerSearch extends Customer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customer_no', 'customer_contact_no'], 'integer'],
            [['customer_name', 'customer_type', 'customer_address', 'customer_rating', 'customer_contact_point', 'customer_email'], 'safe'],
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
        $query = Customer::find();

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
            'customer_no' => $this->customer_no,
            'customer_contact_no' => $this->customer_contact_no,
        ]);

        $query->andFilterWhere(['like', 'customer_name', $this->customer_name])
            ->andFilterWhere(['like', 'customer_type', $this->customer_type])
            ->andFilterWhere(['like', 'customer_address', $this->customer_address])
            ->andFilterWhere(['like', 'customer_rating', $this->customer_rating])
            ->andFilterWhere(['like', 'customer_contact_point', $this->customer_contact_point])
            ->andFilterWhere(['like', 'customer_email', $this->customer_email]);

        return $dataProvider;
    }
}
