<?php

use Yii;
use yii\helpers\Url;
use yii\helpers\Html;

?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Html::encode(Yii::$app->user->identity->getUser()->username) ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Users', 'icon' => 'file-code-o', 'url' => ['/user']],
                    ['label' => 'Posts', 'icon' => 'file-code-o', 'url' => [Url::to(['blog/post/index'])]],
                    ['label' => 'Discussions', 'icon' => 'file-code-o', 'url' => [Url::to(['shop/discussion/index'])]],
                    ['label' => 'Banners', 'icon' => 'file-code-o', 'url' => [Url::to(['shop/manager/banner/index'])]],

                    [
                        'label' => 'Shop',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Brand', 'icon' => 'file-code-o', 'url' => [Url::to(['shop/brand/index'])]],
                            ['label' => 'Category', 'icon' => 'file-code-o', 'url' => [Url::to(['shop/category/index'])]],
                            ['label' => 'Feature groups', 'icon' => 'file-code-o', 'url' => [Url::to(['shop/group/index'])]],
                            ['label' => 'Attribute', 'icon' => 'file-code-o', 'url' => [Url::to(['shop/attribute/attribute/index'])]],
                            ['label' => 'Filter', 'icon' => 'file-code-o', 'url' => [Url::to(['shop/filter/index'])]],
                            ['label' => 'Product', 'icon' => 'file-code-o', 'url' => [Url::to(['shop/product/index'])]],
                            ['label' => 'DeliveryMethod', 'icon' => 'file-code-o', 'url' => [Url::to(['shop/delivery/index'])]],
                            ['label' => 'Discount', 'icon' => 'file-code-o', 'url' => [Url::to(['shop/discount/index'])]],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
