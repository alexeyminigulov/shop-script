<?php
namespace frontend\controllers\shop;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use domain\entities\Shop\Product\Product;
use domain\services\Shop\CartService;
use yii\helpers\VarDumper;

/**
 * Catalog controller
 */
class CartController extends Controller
{
    private $service;

    public function __construct($id, $module, CartService $service,
                                $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->service = $service;
    }

    public function actionIndex()
    {
        $cart = $this->service->getCart();
        VarDumper::dump($cart, 5, true);
        exit(34);
    }

    public function actionAdd($productId)
    {
        $product = $this->findProduct($productId);

        $this->service->add($product->id, 1);

        return $this->redirect(Yii::$app->request->referrer);
    }

    public function actionDelete($id)
    {
        $this->service->delete($id);

        return $this->redirect(Yii::$app->request->referrer);
    }

    /**
     * @param $id
     * @return Product
     * @throws NotFoundHttpException
     */
    protected function findProduct($id)
    {
        if (($model = Product::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
