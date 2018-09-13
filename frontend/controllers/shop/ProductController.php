<?php
namespace frontend\controllers\shop;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use domain\entities\Shop\Product\Product;
use domain\repositories\Shop\CategoryRepository;
use domain\repositories\Shop\ProductRepository;
use domain\readRepositories\Shop\ProductReadRepository;

/**
 * Catalog controller
 */
class ProductController extends Controller
{
    private $repository;
    private $repoProduct;
    private $readRepository;

    public function __construct($id, $module, CategoryRepository $repository,
                                ProductRepository $repoProduct,
                                ProductReadRepository $readRepository,
                                $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->repository = $repository;
        $this->repoProduct = $repoProduct;
        $this->readRepository = $readRepository;
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

    public function actionSearch($q)
    {
        $dataProvider = $this->readRepository->searchByText($q);

        return $this->render('search', [
            'dataProvider' => $dataProvider,
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
