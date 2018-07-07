<?php

namespace backend\forms\Shop;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use domain\entities\Shop\Group;

/**
 * GroupSearch represents the model behind the search form of `domain\entities\Shop\Group`.
 */
class GroupSearch extends Model
{
    public $id;
    public $name;
    public $categoryId;

    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'categoryId'], 'safe'],
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
        $query = Group::find()->innerJoinWith('categoryAssignments', false);

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
            'category_id' => $this->categoryId
        ]);

        return $dataProvider;
    }
}
