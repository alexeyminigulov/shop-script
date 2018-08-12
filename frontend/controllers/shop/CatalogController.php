<?php
namespace frontend\controllers\shop;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use domain\entities\Shop\Category;
use domain\helpers\ActiveRecordHelper;
use domain\repositories\Shop\CategoryRepository;
use domain\readRepositories\Shop\ProductReadRepository;

/**
 * Catalog controller
 */
class CatalogController extends Controller
{
    private $repository;
    private $products;

    public function __construct($id, $module, CategoryRepository $repository,
                                ProductReadRepository $products,
                                $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->repository = $repository;
        $this->products = $products;
    }

    public function actionView($slug)
    {
        $category = $this->findModel($slug);
        $categories = $this->repository->getWithParents($category->id, false);
        $descendantsCategory = [$category];
        $descendantsCategory = array_merge($descendantsCategory, $category->descendants);
        $categoryIds = ActiveRecordHelper::getFields($descendantsCategory, 'id');
        $dataProvider = $this->products->getAll($categoryIds);

        return $this->render('view', [
            'category' => $category,
            'categories' => $categories,
            'dataProvider' => $dataProvider,
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
