<?php

namespace domain\readRepositories\Shop;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use domain\entities\Shop\Product\Product;
use yii\data\DataProviderInterface;

class ProductReadRepository
{
    public function getAll($categoryIds): DataProviderInterface
    {
        $query = Product::find()->where(['category_id' => $categoryIds]);

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