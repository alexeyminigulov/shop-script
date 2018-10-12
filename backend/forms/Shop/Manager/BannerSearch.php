<?php

namespace backend\forms\Shop\Manager;

use Yii;
use yii\base\Model;
use domain\entities\Shop\Manager\Banner\Banner;
use yii\data\ActiveDataProvider;

/**
 * BannerSearch represents the model behind the search form of `domain\entities\Shop\Manager\Banner`.
 */
class BannerSearch extends Model
{
    public $id;
    public $name;
    public $title;

    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'title'], 'safe'],
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
        $query = Banner::find();

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
        $query->andFilterWhere(['like', 'title', $this->title]);

        return $dataProvider;
    }
}