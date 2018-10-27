<?php

namespace domain\services\Search;

use Elasticsearch\Client;
use domain\entities\Shop\Product\Product;
use domain\entities\Shop\Product\Value;
use domain\entities\Shop\Attribute\Attribute;

class ProductIndexer
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function clear(): void
    {
        $this->client->deleteByQuery([
            'index' => 'shop_products',
            'type' => 'products',
            'body' => [
                'query' => [
                    'match_all' => new \stdClass(),
                ],
            ],
        ]);
    }

    public function index(Product $product): void
    {
        $values = call_user_func(function ($values) {

            $result = [];

            foreach ($values as $value) {

                $productValue = call_user_func(function (Value $value) {
                    switch ($value->attribute0->type) {
                        case Attribute::TYPE_INTEGER:
                            $result = ['value_int' => intval($value->value)];
                            break;
                        case Attribute::TYPE_RADIO_BUTTON:
                            $result = ['value_radio_btn' => intval($value->value)];
                            break;
                        case Attribute::TYPE_CHECKBOX:
                            $result = ['values' => [intval($value->value)]];
                            break;
                        default:
                            $result = ['value_string' => $value->value];
                    }
                    return $result;
                }, $value);

                if (isset($result[$value->attribute_id])) {
                    $values = $result[$value->attribute_id]['values'];
                    $values[] = reset($productValue['values']);

                    $result[$value->attribute_id] = [
                        'attribute_id' => $value->attribute_id,
                        'values' => $values,
                    ];
                    continue;
                }
                $result[$value->attribute_id] = [
                    'attribute_id' => $value->attribute_id,
                    key($productValue) => reset($productValue)
                ];
            }

            return array_values($result);
        }, $product->values);

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
                'category_slug' => $product->category->slug,
                'brand_id' => $product->brand_id,
                'code' => $product->code,
                'weight' => $product->weight,
                'quantity' => $product->quantity,
                'values' => $values,
            ],
        ]);
    }

    public function remove(Product $product): void
    {
        $this->client->delete([
            'index' => 'shop_products',
            'type' => 'products',
            'id' => $product->id,
        ]);
    }
}