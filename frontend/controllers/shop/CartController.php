<?php
namespace frontend\controllers\shop;

use Yii;
use yii\filters\VerbFilter;
use yii\web\Controller;
use domain\services\Shop\CartService;
use domain\forms\Shop\Cart\AddProductForm;

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

    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'add' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $cartItems = $this->service->getCart()->getItems();
        $cost = $this->service->getCart()->getCost();

        return $this->render('index', [
            'cartItems' => $cartItems,
            'cost' => $cost,
        ]);
    }

    public function actionAdd()
    {
        $form = new AddProductForm();
        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $this->service->add($form);
                return $this->redirect(Yii::$app->request->referrer);

            } catch (\DomainException $e) {
                Yii::$app->errorHandler->logException($e);
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }
        return $this->redirect(Yii::$app->request->referrer);
    }

    public function actionRecount()
    {
        $reqParams = Yii::$app->request->getQueryParams()['cart_products'];

        foreach ($reqParams as $id => $current) {
            $this->service->set($id, $current['amount']);
        }
        return $this->redirect(Yii::$app->request->referrer);
    }

    public function actionDelete($id)
    {
        $this->service->delete($id);

        return $this->redirect(Yii::$app->request->referrer);
    }
}
