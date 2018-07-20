<?php

namespace backend\forms\Shop;

use yii\base\Model;
use domain\entities\Shop\Filter;
use yii\data\ActiveDataProvider;

/**
 * GroupSearch represents the model behind the search form of `domain\entities\Shop\Group`.
 */
class FilterSearch extends Model
{
    public $id;
    public $name;
    public $attributeId;
    public $status;

    public function rules()
    {
        return [
            [['id', 'status'], 'integer'],
            [['name', 'attributeId'], 'safe'],
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
        $query = Filter::find();

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

        $query->andFilterWhere(['like', 'name', $this->name]);

        $query->andFilterWhere([
            'attribute_id' => $this->attributeId,
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
