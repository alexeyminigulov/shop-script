<?php

namespace api\controllers\shop;

use yii\helpers\Url;
use yii\rest\Controller;
use api\helpers\DateHelper;
use domain\helpers\UserHelper;
use api\providers\MapDataProvider;
use domain\entities\Shop\Product\Product;
use domain\readRepositories\Shop\ProductReadRepository;

class ProductController extends Controller
{
    private $products;

    public function __construct($id, $module, ProductReadRepository $products, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->products = $products;
    }

    public function verbs(): array
    {
        return [
            'index' => ['get'],
            'view'  => ['get'],
        ];
    }

    public function actionIndex()
    {
        $dataProvider = $this->products->all();
        return new MapDataProvider($dataProvider, [$this, 'serializeListItem']);
    }

    public function actionView($id): array
    {
        return $this->serializeProduct($this->findModel($id));
    }

    public function serializeListItem(Product $product): array
    {
        return [
            'id' => $product->id,
            'code' => $product->code,
            'name' => $product->name,
            'category' => [
                'id' => $product->category->id,
                'name' => $product->category->name,
                '_links' => [
                    'self' => ['href' => Url::to(['category', 'id' => $product->category->id], true)],
                ],
            ],
            'brand' => [
                'id' => $product->brand->id,
                'name' => $product->brand->name,
                '_links' => [
                    'self' => ['href' => Url::to(['brand', 'id' => $product->brand->id], true)],
                ],
            ],
            'price' => $product->price,
            'thumbnail' => $product->mainPicture ? $product->mainPicture->getThumbFileUrl('picture'): null,
            '_links' => [
                'self' => ['href' => Url::to(['view', 'id' => $product->id], true)],
            ],
        ];
    }

    private function serializeProduct(Product $product): array
    {
        return [
            'id' => $product->id,
            'name' => $product->name,
            'code' => $product->code,
            'price' => $product->price,
            'date' => [
                'created' => DateHelper::formatApi($product->created_at),
                'updated' => DateHelper::formatApi($product->updated_at),
            ],
            'status' => [
                'code' => $product->status,
                'name' => UserHelper::statusName($product->status),
            ],
        ];
    }

    private function findModel($id): Product
    {
        return Product::findOne(['id' => $id]);
    }
}
