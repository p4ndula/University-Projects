<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Supplier;

/**
 * SupplierSearch represents the model behind the search form of `frontend\models\Supplier`.
 */
class SupplierSearch extends Supplier
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['supplier_no', 'supplier_contact_no'], 'integer'],
            [['supplier_name', 'supplier_type', 's_address', 'supplier_contact_point'], 'safe'],
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
        $query = Supplier::find();

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
            'supplier_no' => $this->supplier_no,
            'supplier_contact_no' => $this->supplier_contact_no,
        ]);

        $query->andFilterWhere(['like', 'supplier_name', $this->supplier_name])
            ->andFilterWhere(['like', 'supplier_type', $this->supplier_type])
            ->andFilterWhere(['like', 's_address', $this->s_address])
            ->andFilterWhere(['like', 'supplier_contact_point', $this->supplier_contact_point]);

        return $dataProvider;
    }
}
