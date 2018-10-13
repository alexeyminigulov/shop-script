<?php

namespace frontend\controllers\cabinet;

use Yii;
use domain\entities\Shop\WishItem;
use domain\services\Shop\WishItemService;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use domain\entities\User\User;
use yii\web\NotFoundHttpException;

class WishlistController extends Controller
{
    private $service;

    public function __construct($id, $module, WishItemService $service, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->service = $service;
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
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = 'layout_site';

        /** @var User $user */
        $user = Yii::$app->user->identity;
        $wishItems = $user->wishItems;

        return $this->render('index', [
            'wishItems' => $wishItems,
        ]);
    }

    /**
     * @param $id
     * @return \yii\web\Response
     */
    public function actionAdd($id)
    {
        try {
            $wishItem = $this->service->add(Yii::$app->user->identity, $id);
            Yii::$app->session->setFlash('success', 'Success added.');

        } catch (\DomainException $e) {
            Yii::$app->errorHandler->logException($e);
            Yii::$app->session->setFlash('error', $e->getMessage());
        }
        return $this->redirect(Yii::$app->request->referrer ?: ['index']);
    }

    /**
     * @param $id
     * @return \yii\web\Response
     */
    public function actionAddToCart($id)
    {
        try {
            $this->service->addToCart(Yii::$app->user->identity, $id);
            Yii::$app->session->setFlash('success', 'Added to cart.');
            return $this->redirect(['index']);

        } catch (\DomainException $e) {
            Yii::$app->errorHandler->logException($e);
            Yii::$app->session->setFlash('error', $e->getMessage());
        }
        return $this->redirect(Yii::$app->request->referrer ?: ['index']);
    }

    /**
     * @param $id
     * @return \yii\web\Response
     */
    public function actionDelete($id)
    {
        try {
            $this->service->delete($id);
            Yii::$app->session->setFlash('success', 'Success removed.');

        } catch (\DomainException $e) {
            Yii::$app->errorHandler->logException($e);
            Yii::$app->session->setFlash('error', $e->getMessage());
        }
        return $this->redirect(Yii::$app->request->referrer ?: ['index']);
    }

    /**
     * @param $id
     * @return WishItem
     * @throws NotFoundHttpException
     */
    protected function findWishItem($id)
    {
        if (($model = WishItem::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}