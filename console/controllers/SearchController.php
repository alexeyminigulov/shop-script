<?php

namespace console\controllers;

use domain\entities\Shop\Attribute\Attribute;
use domain\entities\Shop\Product\Value;
use domain\repositories\Shop\ProductRepository;
use Elasticsearch\ClientBuilder;
use yii\console\Controller;

class SearchController extends Controller
{
    private $client;
    private $products;

    public function __construct($id, $module, ProductRepository $productReadRepository, $config = [])
    {
        $this->client = ClientBuilder::create()->setHosts(['127.0.0.1:9200'])->build();
        $this->products = $productReadRepository;
        parent::__construct($id, $module, $config);
    }

    public function actionReindex()
    {
        if ($this->client->indices()->exists(['index' => 'shop_products'])) {

            $this->client->indices()->delete(['index' => 'shop_products']);
        }

        $this->stdout('Creating of index' . PHP_EOL);

        $this->client->indices()->create([
            'index' => 'shop_products',
            'body' => [
                'mappings' => [
                    'products' => [
                        '_source' => [
                            'enabled' => true,
                        ],
                        'properties' => [
                            'id' => [
                                'type' => 'integer',
                            ],
                            'name' => [
                                'type' => 'text',
                            ],
                            'description' => [
                                'type' => 'text',
                            ],
                            'slug' => [
                                'type' => 'text',
                            ],
                            'price' => [
                                'type' => 'integer',
                            ],
                            'category_id' => [
                                'type' => 'integer',
                            ],
                            'brand_id' => [
                                'type' => 'integer',
                            ],
                            'code' => [
                                'type' => 'text',
                            ],
                            'weight' => [
                                'type' => 'integer',
                            ],
                            'quantity' => [
                                'type' => 'integer',
                            ],
                            'values' => [
                                'type' => 'nested',
                                'properties' => [
                                    'attribute_id' => [
                                        'type' => 'integer'
                                    ],
                                    'value_string' => [
                                        'type' => 'keyword',
                                    ],
                                    'value_int' => [
                                        'type' => 'integer',
                                    ],
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]);

        $this->stdout('Indexing of products' . PHP_EOL);

        $products = $this->products->getAll(false);

        foreach ($products as $product) {
            $this->client->index([
                'index' => 'shop_products',
                'type' => 'products',
                'id' => $product->id,
                'body' => [
                    'name' => $product->name,
                    'description' => $product->description,
                    'slug' => $product->slug,
                    'price' => $product->price,
                    'category_id' => $product->category_id,
                    'brand_id' => $product->brand_id,
                    'code' => $product->code,
                    'weight' => $product->weight,
                    'quantity' => $product->quantity,
                    'values' => array_map(function (Value $value) {

                        $productValue = call_user_func(function (Value $value) {
                            switch ($value->attribute0->type) {
                                case Attribute::TYPE_INTEGER:
                                case Attribute::TYPE_RADIO_BUTTON:
                                case Attribute::TYPE_CHECKBOX:
                                    $result = ['value_int' => $value->value];
                                    break;
                                default:
                                    $result = ['value_string' => $value->value];
                            }
                            return $result;
                        }, $value);

                        return [
                            'attribute_id' => $value->attribute_id,
                            key($productValue) => reset($productValue)
                        ];
                    }, $product->values),
                ],
            ]);
        }
    }
}