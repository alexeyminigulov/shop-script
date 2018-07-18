<?php

namespace backend\forms\Shop\Attribute;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use domain\entities\Shop\Attribute\Item;

/**
 * ItemSearch represents the model behind the search form of `domain\entities\Shop\Attribute`.
 */
class ItemSearch extends Model
{
    public $id;
    public $option;

    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['option'], 'safe'],
        ];
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param int $attributeId
     *
     * @return ActiveDataProvider
     */
    public function search($attributeId)
    {
        $query = Item::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->andFilterWhere([
            'attribute_id' => $attributeId,
        ]);

        return $dataProvider;
    }
}