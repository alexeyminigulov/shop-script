<?php

/* @var $this \yii\web\View */
/* @var $order \domain\entities\Shop\Order */

use yii\helpers\Html;
use yii\widgets\DetailView;
use domain\helpers\OrderHelper;
use domain\helpers\ProductHelper;

?>
<div class="tygh-content clearfix">
    <div class="container-fluid  content-grid">
        <div class="container-fluid-row">
            <div class="row-fluid ">
                <div class="span16 breadcrumbs-grid">
                    <div id="breadcrumbs_10">
                        <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="ty-breadcrumbs clearfix">
                            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <a itemprop="item" href="http://demo.cs-cart.ru/stores/ca33079d2c5d3392/" class="ty-breadcrumbs__a">
                                   <bdi>Главная</bdi>
                                </a>
                            </span>
                            <span class="ty-breadcrumbs__slash">/</span>
                            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <span itemprop="item" class="ty-breadcrumbs__current">
                                   <bdi>Содержимое корзины</bdi>
                                </span>
                             </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid-row">
            <div class="row-fluid">
                <div class="span16 main-content-grid">
                    <div class="ty-mainbox-container clearfix">
                        <div class="ty-mainbox-body">


                            <?= DetailView::widget([
                                'model' => $order,
                                'attributes' => [
                                    'id',
                                    'created_at:datetime',
                                    [
                                        'attribute' => 'current_status',
                                        'value' => OrderHelper::statusLabel($order->current_status),
                                        'format' => 'raw',
                                    ],
                                    'delivery_method_name',
                                    'deliveryData.index',
                                    'deliveryData.address',
                                    'cost',
                                    'note:ntext',
                                ],
                            ]) ?>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="text-left">Product Name</th>
                                        <th class="text-left">Model</th>
                                        <th class="text-left">Quantity</th>
                                        <th class="text-right">Unit Price</th>
                                        <th class="text-right">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    /** @var \domain\entities\Shop\OrderItem $item */
                                    foreach ($order->items as $item): ?>
                                        <tr>
                                            <td class="text-left">
                                                <?= Html::encode($item->product_name) ?>
                                            </td>
                                            <td class="text-left">
                                                <?= Html::encode($item->product_code) ?>
                                                <?= Html::encode($item->product_name) ?>
                                            </td>
                                            <td class="text-left">
                                                <?= $item->quantity ?>
                                            </td>
                                            <td class="text-right"><?= ProductHelper::price($item->price) ?></td>
                                            <td class="text-right"><?= ProductHelper::price($item->getCost()) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                            <?php if ($order->canBePaid()): ?>
                                <p>
                                    <?= Html::a('Pay via Robokassa', ['/payment/robokassa/invoice', 'id' => $order->id], ['class' => 'btn btn-success']) ?>
                                </p>
                            <?php endif; ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>