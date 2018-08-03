<?php

namespace backend\forms\Shop;

use yii\base\Model;
use domain\entities\Shop\DeliveryMethod;
use yii\data\ActiveDataProvider;

/**
 * DeliverySearch represents the model behind the search form of `domain\entities\Shop\DeliveryMethod`.
 */
class DeliverySearch extends Model
{
    public $id;
    public $name;
    public $cost;
    public $min_weight;
    public $max_weight;
    public $sort;

    public function rules()
    {
        return [
            [['id', 'cost', 'min_weight', 'max_weight', 'sort'], 'integer'],
            [['name'], 'safe'],
        ];
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
        $query = DeliveryMethod::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere([
            'cost' => $this->cost,
        ]);

        $query->andFilterWhere([
            'minWeight' => $this->min_weight,
        ]);

        $query->andFilterWhere([
            'maxWeight' => $this->max_weight,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
