<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\AcParts;

/**
 * AcPartsSearch represents the model behind the search form of `frontend\models\AcParts`.
 */
class AcPartsSearch extends AcParts
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['part_no', 'part_useful_life', 'part_price'], 'integer'],
            [['part_purchursed_date', 'part_status', 'part_supplier', 'part_system_created_time', 'part_discription', 'part_installed_customer', 'part_installed_ac_unit', 'last_modified_time', 'last_modified_by', 'part_type'], 'safe'],
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
        $query = AcParts::find();

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
            'part_no' => $this->part_no,
            'part_purchursed_date' => $this->part_purchursed_date,
            'part_system_created_time' => $this->part_system_created_time,
            'last_modified_time' => $this->last_modified_time,
            'part_useful_life' => $this->part_useful_life,
            'part_price' => $this->part_price,
        ]);

        $query->andFilterWhere(['like', 'part_status', $this->part_status])
            ->andFilterWhere(['like', 'part_supplier', $this->part_supplier])
            ->andFilterWhere(['like', 'part_discription', $this->part_discription])
            ->andFilterWhere(['like', 'part_installed_customer', $this->part_installed_customer])
            ->andFilterWhere(['like', 'part_installed_ac_unit', $this->part_installed_ac_unit])
            ->andFilterWhere(['like', 'last_modified_by', $this->last_modified_by])
            ->andFilterWhere(['like', 'part_type', $this->part_type]);

        return $dataProvider;
    }
}
