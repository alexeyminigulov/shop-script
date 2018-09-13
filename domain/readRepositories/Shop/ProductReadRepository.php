<?php

namespace domain\readRepositories\Shop;

use Elasticsearch\ClientBuilder;
use domain\entities\Shop\Product\Value;
use yii\data\ActiveDataProvider;
use domain\forms\Shop\Search\SearchForm;
use domain\entities\Shop\Product\Product;
use yii\data\DataProviderInterface;
use yii\helpers\ArrayHelper;

class ProductReadRepository
{
    public function getAll($categoryIds): DataProviderInterface
    {
        $query = Product::find()->where(['category_id' => $categoryIds])
            ->where(['status' => Product::STATUS_ACTIVE])
            ->joinWith(['mainPicture']);

        return $this->getProvider($query);
    }

    /**
     * @param $q
     * @return null|ActiveDataProvider
     */
    public function searchByText($q)
    {
        $client = ClientBuilder::create()->setHosts(['127.0.0.1:9200'])->build();

        $params = [
            'index' => 'shop_products',
            'type' => 'products',
            'body' => [
                'query' => [
                    'match' => [
                        'name' => $q,
                    ]
                ]
            ]
        ];

        $response = $client->search($params);

        $ids = ArrayHelper::getColumn($response['hits']['hits'], '_id');

        if ($ids) {
            $query = Product::find()
//                ->andWhere(['status' => Product::STATUS_ACTIVE])
                ->andWhere(['id' => $ids]);
        } else {
            $query = Product::find()->where(['id' => 0]);
        }

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