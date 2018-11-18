<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Jobs;

/**
 * JobsSearch represents the model behind the search form of `frontend\models\Jobs`.
 */
class JobsSearch extends Jobs
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['job_number', 'job_completion_period', 'job_revisit_count', 'job_completion_price'], 'integer'],
            [['job_type_of_failure', 'job_category', 'job_status', 'job_created_time', 'job_modified_time', 'job_discription', 'job_technician_status', 'job_assigned_technician', 'job_customer_name', 'job_customer_address', 'job_item_serial_number', 'job_solution', 'job_completed_date_time', 'job_customer_contact_point', 'job_customer_type', 'job_customer_email', 'job_payment_status', 'job_payment_method'], 'safe'],
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
        $query = Jobs::find();

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
            'job_number' => $this->job_number,
            'job_created_time' => $this->job_created_time,
            'job_modified_time' => $this->job_modified_time,
            'job_completed_date_time' => $this->job_completed_date_time,
            'job_completion_period' => $this->job_completion_period,
            'job_revisit_count' => $this->job_revisit_count,
            'job_completion_price' => $this->job_completion_price,
        ]);

        $query->andFilterWhere(['like', 'job_type_of_failure', $this->job_type_of_failure])
            ->andFilterWhere(['like', 'job_category', $this->job_category])
            ->andFilterWhere(['like', 'job_status', $this->job_status])
            ->andFilterWhere(['like', 'job_discription', $this->job_discription])
            ->andFilterWhere(['like', 'job_technician_status', $this->job_technician_status])
            ->andFilterWhere(['like', 'job_assigned_technician', $this->job_assigned_technician])
            ->andFilterWhere(['like', 'job_customer_name', $this->job_customer_name])
            ->andFilterWhere(['like', 'job_customer_address', $this->job_customer_address])
            ->andFilterWhere(['like', 'job_item_serial_number', $this->job_item_serial_number])
            ->andFilterWhere(['like', 'job_solution', $this->job_solution])
            ->andFilterWhere(['like', 'job_customer_contact_point', $this->job_customer_contact_point])
            ->andFilterWhere(['like', 'job_customer_type', $this->job_customer_type])
            ->andFilterWhere(['like', 'job_customer_email', $this->job_customer_email])
            ->andFilterWhere(['like', 'job_payment_status', $this->job_payment_status])
            ->andFilterWhere(['like', 'job_payment_method', $this->job_payment_method]);

        return $dataProvider;
    }
}
