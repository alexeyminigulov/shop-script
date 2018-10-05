<?php

/* @var $this \yii\web\View */
/* @var $orders \domain\entities\Shop\Order[] */

use yii\helpers\Html;
use yii\helpers\Url;
use domain\helpers\OrderHelper;
use domain\helpers\ProductHelper;

$this->title = 'Заказы';
?>
<div class="row-fluid">
    <div class="span16 main-content-grid">
        <div class="ty-mainbox-container clearfix">
            <div class="ty-mainbox-body">


                <h1 class="ty-mainbox-title">Заказы</h1>
                <div class="ty-pagination-container cm-pagination-container">
                    <table class="ty-table ty-orders-search">
                        <thead>
                        <tr>
                            <th><a class="cm-ajax">ID</a></th>
                            <th><a class="cm-ajax">Статус</a></th>
                            <th><a class="cm-ajax">Покупатель</a></th>
                            <th><a class="cm-ajax">Дата</a><i class="ty-icon-up-dir"></i></th>
                            <th><a class="cm-ajax">Итого</a></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($orders as $order): ?>
                            <tr>
                                <td class="ty-orders-search__item">
                                    <a href="<?= Url::to(['/cabinet/order/view', 'id' => $order->id]) ?>"><strong><?= Html::encode($order->id) ?></strong></a>
                                </td>
                                <td class="ty-orders-search__item"><?= OrderHelper::statusLabel($order->current_status) ?></td>
                                <td class="ty-orders-search__item">
                                    <ul class="ty-orders-search__user-info">
                                        <li class="ty-orders-search__user-name"><?= Html::encode($order->customer_name) ?></li>
                                        <li class="ty-orders-search__user-mail"><a href="mailto:customer%40example.com">customer@example.com</a></li>
                                    </ul>
                                </td>
                                <td class="ty-orders-search__item">
                                    <span><?= date('d-m-Y H:i:s', $order->created_at) ?></span>
                                </td>
                                <td class="ty-orders-search__item">
                                    <bdi><?= ProductHelper::price($order->cost) ?></bdi>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>