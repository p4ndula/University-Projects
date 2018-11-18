<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Service;

/**
 * ServicesSearch represents the model behind the search form of `frontend\models\Service`.
 */
class ServicesSearch extends Service
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['service_job_number', 'service_customer_contact_no'], 'integer'],
            [['service_job_type', 'service_sheduled_date', 'service_item_serial_number', 'service_job_status', 'service_reshedule_date', 'service_customer_name', 'customer_rating', 'customer_address', 'service_job_customer_type'], 'safe'],
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
        $query = Service::find();

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
            'service_job_number' => $this->service_job_number,
            'service_sheduled_date' => $this->service_sheduled_date,
            'service_reshedule_date' => $this->service_reshedule_date,
            'service_customer_contact_no' => $this->service_customer_contact_no,
        ]);

        $query->andFilterWhere(['like', 'service_job_type', $this->service_job_type])
            ->andFilterWhere(['like', 'service_item_serial_number', $this->service_item_serial_number])
            ->andFilterWhere(['like', 'service_job_status', $this->service_job_status])
            ->andFilterWhere(['like', 'service_customer_name', $this->service_customer_name])
            ->andFilterWhere(['like', 'customer_rating', $this->customer_rating])
            ->andFilterWhere(['like', 'customer_address', $this->customer_address])
            ->andFilterWhere(['like', 'service_job_customer_type', $this->service_job_customer_type]);

        return $dataProvider;
    }
}
