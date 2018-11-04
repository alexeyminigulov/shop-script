<?php

namespace api\controllers\shop;

use yii\helpers\Url;
use yii\rest\Controller;
use api\providers\MapDataProvider;
use yii\web\NotFoundHttpException;
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

    /**
     * @SWG\Get(
     *     path="/product",
     *     tags={"Catalog"},
     *     @SWG\Response(
     *         response=200,
     *         description="Success response",
     *         @SWG\Schema(
     *             type="array",
     *             @SWG\Items(ref="#/definitions/ProductItem")
     *         ),
     *     ),
     *     security={{"Bearer": {}, "OAuth2": {}}}
     * )
     */
    public function actionIndex()
    {
        $dataProvider = $this->products->all();
        return new MapDataProvider($dataProvider, [$this, 'serializeListItem']);
    }

    /**
     * @SWG\Get(
     *     path="/product/{productId}",
     *     tags={"Catalog"},
     *     @SWG\Parameter(
     *         name="productId",
     *         description="ID of product",
     *         in="path",
     *         required=true,
     *         type="integer"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Success response",
     *         @SWG\Schema(ref="#/definitions/ProductView")
     *     ),
     *     security={{"Bearer": {}, "OAuth2": {}}}
     * )
     *
     * @param $id
     * @return array
     * @throws NotFoundHttpException
     */
    public function actionView($id): array
    {
        if (!$product = $this->findModel($id)) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        return $this->serializeProduct($product);
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
            'description' => $product->description,
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
            'rating' => $product->rating,
            'weight' => $product->weight,
            'quantity' => $product->quantity,
        ];
    }

    private function findModel($id): Product
    {
        return Product::findOne(['id' => $id]);
    }
}

/**
 * @SWG\Definition(
 *     definition="ProductItem",
 *     type="object",
 *     @SWG\Property(property="id", type="integer"),
 *     @SWG\Property(property="code", type="string"),
 *     @SWG\Property(property="name", type="string"),
 *     @SWG\Property(property="category", ref="#/definitions/ProductCategory"),
 *     @SWG\Property(property="brand", ref="#/definitions/ProductBrand"),
 *     @SWG\Property(property="price", type="integer"),
 *     @SWG\Property(property="thumbnail", type="string"),
 *     @SWG\Property(property="_links", type="object",
 *         @SWG\Property(property="self", type="object", @SWG\Property(property="href", type="string")),
 *     ),
 * )
 *
 * @SWG\Definition(
 *     definition="ProductView",
 *     type="object",
 *     @SWG\Property(property="id", type="integer"),
 *     @SWG\Property(property="code", type="string"),
 *     @SWG\Property(property="name", type="string"),
 *     @SWG\Property(property="price", type="integer"),
 *     @SWG\Property(property="description", type="string"),
 *     @SWG\Property(property="category", ref="#/definitions/ProductCategory"),
 *     @SWG\Property(property="brand", ref="#/definitions/ProductBrand"),
 *     @SWG\Property(property="rating", type="float"),
 *     @SWG\Property(property="weight", type="integer"),
 *     @SWG\Property(property="quantity", type="integer"),
 * )
 *
 * @SWG\Definition(
 *     definition="ProductCategory",
 *     type="object",
 *     @SWG\Property(property="id", type="integer"),
 *     @SWG\Property(property="name", type="string"),
 *     @SWG\Property(property="_links", type="object",
 *         @SWG\Property(property="self", type="object", @SWG\Property(property="href", type="string")),
 *     ),
 * )
 *
 * @SWG\Definition(
 *     definition="ProductBrand",
 *     type="object",
 *     @SWG\Property(property="id", type="integer"),
 *     @SWG\Property(property="name", type="string"),
 *     @SWG\Property(property="_links", type="object",
 *         @SWG\Property(property="self", type="object", @SWG\Property(property="href", type="string")),
 *     ),
 * )
 *
 * @SWG\Definition(
 *     definition="ProductPhoto",
 *     type="object",
 *     @SWG\Property(property="thumbnail", type="string"),
 *     @SWG\Property(property="origin", type="string"),
 * )
 */