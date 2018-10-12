<?php
namespace frontend\controllers\shop;

use Yii;
use domain\forms\Shop\Search\SearchForm;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use domain\entities\Shop\Category\Category;
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

    /**
     * @param $slug
     * @return string
     * @throws NotFoundHttpException
     */
    public function actionView($slug)
    {
        $category = $this->findModel($slug);
        $categories = $this->repository->getWithParents($category->id, false);
        $attributes = $this->repository->getAttributes($category->id);
        $form = new SearchForm($attributes);
        $form->load(Yii::$app->request->get());

        $dataProvider = $this->products->search($form);

        return $this->render('view', [
            'category' => $category,
            'categories' => $categories,
            'dataProvider' => $dataProvider,
            'model' => $form,
        ]);
    }

    /**
     * @param $slug
     * @return Category|null
     * @throws NotFoundHttpException
     */
    protected function findModel($slug)
    {
        if (($model = Category::findOne(['slug' => $slug])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
