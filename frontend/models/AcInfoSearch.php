<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AcInfo;

/**
 * AcInfoSearch represents the model behind the search form of `frontend\models\AcInfo`.
 */
class AcInfoSearch extends AcInfo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ac_serial_number', 'ac_purchursed_date', 'ac_make_company', 'ac_model_number', 'ac_system_create_time', 'ac_model_type', 'ac_discription', 'ac_installed_customer_name', 'ac_supplier', 'last_modified', 'last_modified_by', 'ac_type'], 'safe'],
            [['ac_installed_customer_no', 'ac_userful_time'], 'integer'],
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
        $query = AcInfo::find();

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
            'ac_purchursed_date' => $this->ac_purchursed_date,
            'ac_system_create_time' => $this->ac_system_create_time,
            'ac_installed_customer_no' => $this->ac_installed_customer_no,
            'last_modified' => $this->last_modified,
            'ac_userful_time' => $this->ac_userful_time,
        ]);

        $query->andFilterWhere(['like', 'ac_serial_number', $this->ac_serial_number])
            ->andFilterWhere(['like', 'ac_make_company', $this->ac_make_company])
            ->andFilterWhere(['like', 'ac_model_number', $this->ac_model_number])
            ->andFilterWhere(['like', 'ac_model_type', $this->ac_model_type])
            ->andFilterWhere(['like', 'ac_discription', $this->ac_discription])
            ->andFilterWhere(['like', 'ac_installed_customer_name', $this->ac_installed_customer_name])
            ->andFilterWhere(['like', 'ac_supplier', $this->ac_supplier])
            ->andFilterWhere(['like', 'last_modified_by', $this->last_modified_by])
            ->andFilterWhere(['like', 'ac_type', $this->ac_type]);

        return $dataProvider;
    }
}
