<?php

namespace backend\forms\Shop;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use domain\entities\Shop\Attribute;

/**
 * AttributeSearch represents the model behind the search form of `domain\entities\Shop\Attribute`.
 */
class AttributeSearch extends Model
{
    public $id;
    public $name;
    public $group_id;

    public function rules()
    {
        return [
            [['id', 'group_id'], 'integer'],
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
        $query = Attribute::find();

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
            'group_id' => $this->group_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
