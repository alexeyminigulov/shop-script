<?php
namespace frontend\controllers\shop;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use domain\entities\Shop\Category;
use domain\helpers\ActiveRecordHelper;
use domain\repositories\Shop\CategoryRepository;
use domain\repositories\Shop\ProductRepository;

/**
 * Catalog controller
 */
class CatalogController extends Controller
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
        $category = $this->findModel($slug);
        $categories = $this->repository->getWithParents($category->id, false);
        $categoryIds = ActiveRecordHelper::getFields($categories, 'id');
        $products = $this->repoProduct->getProducts($categoryIds);

        return $this->render('view', [
            'category' => $category,
            'categories' => $categories,
            'products' => $products,
        ]);
    }

    protected function findModel($slug)
    {
        if (($model = Category::findOne(['slug' => $slug])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
