<?php

namespace frontend\controllers\payment;

use Yii;
use yii\web\Controller;
use domain\entities\Shop\Order;
use yii\web\BadRequestHttpException;
use domain\entities\Shop\Order\Status;

class RobokassaController extends Controller
{
    public function actionInvoice($id)
    {
        $order = $this->loadModel($id);
        /** @var \robokassa\Merchant $merchant */
        $merchant = Yii::$app->get('robokassa');
        return $merchant->payment($order->cost, $order->id, 'Оплата заказа', null, Yii::$app->user->identity->email);
    }

    public function actions()
    {
        return [
            'result' => [
                'class' => '\robokassa\ResultAction',
                'callback' => [$this, 'resultCallback'],
            ],
            'success' => [
                'class' => '\robokassa\SuccessAction',
                'callback' => [$this, 'successCallback'],
            ],
            'fail' => [
                'class' => '\robokassa\FailAction',
                'callback' => [$this, 'failCallback'],
            ],
        ];
    }

    public function successCallback($merchant, $orderId, $nOutSum, $shp)
    {
        $this->loadModel($orderId)->updateAttributes(['current_status' => Status::SENT]);
        return $this->goBack();
    }
    public function resultCallback($merchant, $orderId, $nOutSum, $shp)
    {
        $this->loadModel($orderId)->updateAttributes(['current_status' => Status::PAID]);
        return 'OK' . $orderId;
    }
    public function failCallback($merchant, $orderId, $nOutSum, $shp)
    {
        $model = $this->loadModel($orderId);
        if ($model->current_status == Status::NEW) {
            $model->updateAttributes(['current_status' => Status::FAILED]);
            return 'Ok';
        } else {
            return 'Status has not changed';
        }
    }

    /**
     * @param $id
     * @return Order
     * @throws BadRequestHttpException
     */
    protected function loadModel($id) {
        $order = Order::findOne(['id' => $id]);
        if ($order === null) {
            throw new BadRequestHttpException();
        }
        return $order;
    }
}