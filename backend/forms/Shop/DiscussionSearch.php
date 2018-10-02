<?php

namespace backend\forms\Shop;

use Yii;
use yii\base\Model;
use domain\entities\Shop\Discussion;
use yii\data\ActiveDataProvider;

/**
 * DiscussionSearch represents the model behind the search form of `domain\entities\Shop\Discussion`.
 */
class DiscussionSearch extends Model
{
    public $user_id;
    public $product_id;
    public $status;

    public function rules()
    {
        return [
            [['user_id', 'product_id', 'status'], 'integer'],
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
        $query = Discussion::find();

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
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere([
            'product_id' => $this->product_id,
        ]);

        $query->andFilterWhere([
            'status' => $this->status,
        ]);

        return $dataProvider;
    }
}
