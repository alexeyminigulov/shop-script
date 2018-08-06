<?php
namespace frontend\controllers\shop;

use domain\cart\Cart;
use domain\forms\Shop\Order\OrderForm;
use domain\services\Shop\OrderService;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use domain\entities\Shop\Product\Product;

/**
 * Catalog controller
 */
class OrderController extends Controller
{
    private $service;
    private $cart;

    public function __construct($id, $module, OrderService $service,
                                Cart $cart,
                                $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->service = $service;
        $this->cart = $cart;
    }

    public function actionIndex()
    {
        $form = new OrderForm($this->cart->getWeight());

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $order = $this->service->checkout(Yii::$app->user->id, $form);
                return $this->redirect(['/cabinet/order/view', 'id' => $order->id]);
            } catch (\DomainException $e) {
                Yii::$app->errorHandler->logException($e);
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }

        return $this->render('index', [
            'cart' => $this->cart,
            'model' => $form,
        ]);
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
