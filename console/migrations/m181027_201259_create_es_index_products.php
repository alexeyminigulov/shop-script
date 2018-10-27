<?php

use yii\db\Migration;
use Elasticsearch\Client;
use Elasticsearch\Common\Exceptions\Missing404Exception;

/**
 * Class m181027_201259_create_es_index_products
 */
class m181027_201259_create_es_index_products extends Migration
{
    public function up()
    {
        $client = $this->getClient();

        if ($client->indices()->exists(['index' => 'shop_products'])) {

            $client->indices()->delete(['index' => 'shop_products']);
        }

        $client->indices()->create([
            'index' => 'shop_products',
            'body' => [
                'settings' => [
                    'analysis' => [
                        'filter' => [
                            'autocomplete_filter' => [
                                'type' => 'edge_ngram',
                                'min_gram' => 1,
                                'max_gram' => 20,
                            ]
                        ],
                        'analyzer' => [
                            'autocomplete' => [
                                'type' => 'custom',
                                'tokenizer' => 'standard',
                                'filter' => [
                                    'lowercase',
                                    'autocomplete_filter',
                                ]
                            ]
                        ]
                    ]
                ],
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
                                'analyzer' => 'autocomplete',
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
                            'category_slug' => [
                                'type' => 'text',
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
                                    'value_radio_btn' => [
                                        'type' => 'integer',
                                    ],
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]);
    }

    public function down()
    {
        try {
            $this->getClient()->indices()->delete([
                'index' => 'shop_products'
            ]);
        } catch (Missing404Exception $e) {}
    }

    private function getClient(): Client
    {
        return Yii::$container->get(Client::class);
    }
}
