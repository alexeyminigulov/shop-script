<?php
namespace frontend\controllers\cabinet;

use Yii;
use domain\cart\Cart;
use yii\web\Controller;
use yii\filters\AccessControl;
use domain\entities\User;
use domain\entities\Shop\Order;
use yii\web\NotFoundHttpException;
use domain\repositories\Shop\OrderRepository;

/**
 * Catalog controller
 */
class OrderController extends Controller
{
    private $orders;
    private $cart;

    public function __construct($id, $module, OrderRepository $orders,
                                Cart $cart,
                                $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->orders = $orders;
        $this->cart = $cart;
    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $this->layout = 'layout_site';

        /** @var User $user */
        $user = Yii::$app->user->identity;
        $orders = $user->orders;

        return $this->render('index', [
            'orders' => $orders,
        ]);
    }

    public function actionView($id)
    {
        $this->layout = 'layout_site';

        if (!$order = $this->orders->findOwn(\Yii::$app->user->id, $id)) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        return $this->render('view', [
            'order' => $order,
        ]);
    }

    /**
     * @param $id
     * @return Order
     * @throws NotFoundHttpException
     */
    protected function findProduct($id)
    {
        if (($model = Order::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
