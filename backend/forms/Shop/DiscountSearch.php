<?php

namespace backend\forms\Shop;

use Yii;
use yii\base\Model;
use domain\entities\Shop\Discount;
use yii\data\ActiveDataProvider;

/**
 * DiscountSearch represents the model behind the search form of `domain\entities\Shop\Discount`.
 */
class DiscountSearch extends Model
{
    public $id;
    public $name;
    public $percent;

    public function rules()
    {
        return [
            [['id', 'percent'], 'integer'],
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
        $query = Discount::find();

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
            'percent' => $this->percent,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}