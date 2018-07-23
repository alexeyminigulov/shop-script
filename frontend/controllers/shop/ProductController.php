<?php
namespace frontend\controllers\shop;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use domain\entities\Shop\Product\Product;
use domain\repositories\Shop\CategoryRepository;
use domain\repositories\Shop\ProductRepository;

/**
 * Catalog controller
 */
class ProductController extends Controller
{
    private $repository;
    private $repoProduct;

    public function __construct($id, $module, CategoryRepository $repository,
                                ProductRepository $repoProduct,
                                $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->repository = $repository;
        $this->repoProduct = $repoProduct;
    }

    public function actionView($slug)
    {
        $product = $this->findModel($slug);
        $categories = $this->repository->getWithParents($product->category_id, false);

        return $this->render('view', [
            'product' => $product,
            'categories' => $categories,
        ]);
    }

    protected function findModel($slug)
    {
        if (($model = Product::findOne(['slug' => $slug])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
