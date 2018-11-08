<?php

namespace domain\readRepositories\Shop;

use Yii;
use yii\caching\Cache;
use yii\caching\TagDependency;
use domain\entities\Shop\Attribute\Attribute;
use domain\forms\Shop\Search\ValueForm;
use Elasticsearch\Client;
use yii\data\ActiveDataProvider;
use domain\forms\Shop\Search\SearchForm;
use domain\entities\Shop\Product\Product;
use yii\data\DataProviderInterface;
use yii\helpers\ArrayHelper;

class ProductReadRepository
{
    private $client;
    private $adapter;
    private $cache;

    public function __construct(Client $client, ProductStorageAdapter $adapter, Cache $cache)
    {
        $this->client = $client;
        $this->adapter = $adapter;
        $this->cache = $cache;
    }

    public function all(): DataProviderInterface
    {
        $query = Product::find()->where(['status' => Product::STATUS_ACTIVE])
            ->joinWith(['mainPicture']);

        return $this->getProvider($query);
    }

    public function getAll($categoryIds): DataProviderInterface
    {
        $query = Product::find()->andWhere(['category_id' => $categoryIds])
            ->andWhere(['status' => Product::STATUS_ACTIVE])
            ->joinWith(['mainPicture']);

        return $this->getProvider($query);
    }

    public function getNewest(): DataProviderInterface
    {
        $query = Product::find()
            ->where(['status' => Product::STATUS_ACTIVE])
            ->orderBy('created_at')
            ->limit(100)
            ->joinWith(['mainPicture']);

        return $this->getProvider($query);
    }

    public function getBestSellers(): DataProviderInterface
    {
        $query = Product::find()
            ->where(['status' => Product::STATUS_ACTIVE])
            ->orderBy('rating')
            ->limit(100)
            ->joinWith(['mainPicture']);

        return $this->getProvider($query);
    }

    /**
     * @param $q
     * @return null|ActiveDataProvider
     */
    public function searchByText($q)
    {
        $params = [
            'index' => 'shop_products',
            'type' => 'products',
            'body' => [
                'query' => [
                    'match' => [
                        'name' => [
                            'query' => $q,
                            'analyzer' => 'standard',
                        ],
                    ]
                ]
            ]
        ];

        $response = $this->client->search($params);
        $ids = ArrayHelper::getColumn($response['hits']['hits'], '_id');

        if ($ids) {
            $query = Product::find()
                ->andWhere(['status' => Product::STATUS_ACTIVE])
                ->andWhere(['id' => $ids]);
        } else {
            $query = Product::find()->where(['id' => 0]);
        }

        return $this->getProvider($query);
    }

    public function search(SearchForm $form)
    {
        $cacheKey = 'count-of-products';
        if (!$size = $this->cache->get($cacheKey)) {

            $size = Product::find()->count();
            Yii::$app->cache->set($cacheKey, $size, null, new TagDependency([
                'tags' => ['shop', 'products'],
            ]));
        }
        $params = [
            'index' => 'shop_products',
            'type' => 'products',
            'body' => [
                "from" => 0,
                "size" => $size,
                "query" => [
                    "bool" => [
                        "filter" =>
                            call_user_func(function () use ($form) {
                                if (!empty($form->priceFrom) && !empty($form->priceTo)) {
                                    return [
                                        ["range" => ["price" => ["gte" => $form->priceFrom, "lte" => $form->priceTo]]],
                                        ["match" => ["category_slug" => $form->slug] ],
                                    ];
                                } else {
                                    return [
                                        ["match" => ["category_slug" => $form->slug] ],
                                    ];
                                }
                            }),
                        "must" =>
                            array_values(
                                array_map(function (ValueForm $value) {

                                return [
                                    "nested" => [
                                        "path" => "values",
                                        "score_mode" => "avg",
                                        "query" => [
                                            "bool" => [
                                                "must" =>
                                                    call_user_func(function () use ($value) {
                                                        if ($value->attribute0->type == Attribute::TYPE_INTEGER) {
                                                            return [
                                                                [  "match" => ["values.attribute_id" => $value->attribute0->id] ],
                                                                [  "range" => ["values.value_int" => ["gte" => $value->value['min']]]  ],
                                                                [  "range" => ["values.value_int" => ["lte" => $value->value['max']]]  ],
                                                            ];
                                                        }
                                                        else if ($value->attribute0->type == Attribute::TYPE_RADIO_BUTTON) {
                                                            return [
                                                                [  "match" => ["values.attribute_id" => $value->attribute0->id] ],
                                                                [  "terms" => ["values.value_radio_btn" => $value->value]],
                                                            ];
                                                        }
                                                        else if ($value->attribute0->type == Attribute::TYPE_CHECKBOX) {
                                                            return array_map(function ($v) use ($value) {
                                                                return [
                                                                    [  "match" => ["values.attribute_id" => $value->attribute0->id] ],
                                                                    [  "terms" => ["values.values" => [$v]]],
                                                                ];
                                                            }, $value->value);
                                                        }
                                                    }),
                                            ],
                                        ],
                                    ],
                                ];

                            }, array_filter($form->values, function (ValueForm $value) { return $value->isFilled(); }))
                        ),
                    ],
                ],
            ],
        ];

        $response = $this->client->search($params);
        $productIds = ArrayHelper::getColumn($response['hits']['hits'], '_id');

        $query = Product::find()->alias('p')->andWhere(['p.id' => $productIds])
            ->joinWith(['mainPicture']);

        return $this->getProvider($query);
    }

    private function getProvider($query)
    {
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 12,
            ],
        ]);

        return $dataProvider;
    }
}