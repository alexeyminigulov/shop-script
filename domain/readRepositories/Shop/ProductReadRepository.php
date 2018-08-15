<?php

namespace domain\readRepositories\Shop;

use Yii;
use yii\base\Model;
use domain\entities\Shop\Product\Value;
use yii\data\ActiveDataProvider;
use domain\forms\Shop\Search\SearchForm;
use domain\entities\Shop\Product\Product;
use yii\data\DataProviderInterface;

class ProductReadRepository
{
    public function getAll($categoryIds): DataProviderInterface
    {
        $query = Product::find()->where(['category_id' => $categoryIds]);

        return $this->getProvider($query);
    }

    public function search(SearchForm $form)
    {
        $query = Product::find()->alias('p');

        $productIds = null;
        foreach ($form->values as $attributeId => $valueForm) {

            $values = $valueForm->value;

            if(empty($values)) {
                continue;
            }

            $q = Value::find()->andWhere(['attribute_id' => $attributeId]);

            if (array_key_exists('min', $values)) {
                $q->andFilterWhere(['>', 'value', $values['min']]);
                $q->andFilterWhere(['<', 'value', $values['max']]);

            } else {
                $q->andFilterWhere(['value' => $values]);
            }
            $foundIds = $q->select('product_id')->column();
            $productIds = $productIds == null ? $foundIds : array_intersect($productIds, $foundIds);
        }

        $query->andWhere(['id' => $productIds]);

        return $this->getProvider($query);
    }

    private function getProvider($query)
    {
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 16,
            ],
        ]);

        return $dataProvider;
    }
}