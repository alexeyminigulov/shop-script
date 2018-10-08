<?php

use yii\helpers\Url;
use yii\helpers\Html;
use frontend\widgets\CatalogWidget;
use frontend\widgets\CartWidget;
use common\widgets\Alert;

?>
<div class="tygh-header clearfix">
    <div class="container-fluid  header-grid">


        <div class="container-fluid-row">
            <div class="row-fluid ">

                <div class="span4 top-logo-grid">
                    <div class=" top-logo">
                        <div class="ty-logo-container">
                            <a href="<?= Url::home() ?>" title="">
                                <img src="<?= Url::to('/image/logo.png') ?>" width="190" height="47" alt="" class="ty-logo-container__image" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="span7 top-links-menu-grid">
                    <ul class="ty-menu__items cm-responsive-menu">
                        <li class="ty-menu__item ty-menu__menu-btn visible-phone">
                            <a class="ty-menu__item-link" onclick="$('.cat-menu-horizontal .ty-menu__items').toggleClass('open');">
                                <i class="ty-icon-short-list"></i>
                                <span>Каталог товаров</span>
                            </a>
                        </li>
                        <li class="ty-menu__item ty-menu__item-nodrop first-lvl ty-menu-item__brands">
                            <a href="<?= Url::to(['blog/post/index']) ?>" class="ty-menu__item-link a-first-lvl">
                                <div class="menu-lvl-ctn">Новости</div>
                            </a>
                        </li>
                        <li class="ty-menu__item ty-menu__item-nodrop first-lvl ty-menu-item__newest">
                            <a href="<?= Url::to(['shop/product/newest/index']) ?>" class="ty-menu__item-link a-first-lvl">
                                <div class="menu-lvl-ctn">Новинки</div>
                            </a>
                        </li>
                        <li class="ty-menu__item ty-menu__item-nodrop first-lvl ty-menu-item__hits">
                            <a href="<?= Url::to(['shop/product/best-seller/index']) ?>" class="ty-menu__item-link a-first-lvl">
                                <div class="menu-lvl-ctn">Хиты продаж</div>
                            </a>
                        </li>
                        <li class="ty-menu__item ty-menu__item-nodrop first-lvl last ty-menu-item__promo">
                            <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/promotions/" class="ty-menu__item-link a-first-lvl">
                                <div class="menu-lvl-ctn">Акции</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="span5 top-phones-grid">
                    <div class="ty-float-right">
                        <div class="ty-wysiwyg-content">
                            <div class="ty-cr-phone-number">
                                <div class="ty-cr-phone"><a href="tel:+88000000000">+8(800) 0000000</a><br><a href="tel:+88000000000">+8(800) 0000000</a></div>
                                <div class="ty-cr-phone-number-link">
                                    <div class="ty-cr-link">
                                        <a href="<?= Url::to(['site/about']) ?>">
                                            Информация
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid-row">
            <div class="row-fluid ">
                <div class="span16 top-menu-grid  small-grid top-menu">
                    <div class="row-fluid ">

                        <?= CatalogWidget::widget() ?>

                        <div class="span7 search-block-grid">
                            <div class=" top-search">
                                <div class="ty-search-block">
                                    <form action="<?= Url::to(['shop/product/search']) ?>" name="search_form" method="get">

                                        <input type="text" name="q" value="" id="search_input" title="Искать товары" class="ty-search-block__input cm-hint">
                                        <button title="Найти" class="ty-search-magnifier" type="submit">
                                            <i class="ty-icon-search"></i>
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="span5 cart-content-grid">
                            <?= CartWidget::widget() ?>
                            <div class="ty-dropdown-box  top-my-account ty-float-right">

                                <div id="sw_dropdown_3946" class="ty-dropdown-box__title cm-combination unlogged">
                                    <a class="ty-account-info__title" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/profiles-update/">
                                        <i class="ty-icon-user"></i>&nbsp;
                                        <span class="ty-account-info__title-txt"><small>Ваш личный</small>Кабинет</span>
                                        <i class="ty-icon-down-micro ty-account-info__user-arrow"></i>
                                    </a>
                                </div>

                                <div id="dropdown_3946" class="cm-popup-box ty-dropdown-box__content hidden">
                                    <div id="account_info_3946">
                                        <ul class="ty-account-info">
                                            <?php if (!Yii::$app->user->isGuest): ?>
                                                <li class="ty-account-info__item ty-dropdown-box__item">
                                                    <a class="ty-account-info__a underlined" href="<?= Url::to(['/cabinet/profile/update']) ?>" rel="nofollow">Учетная запись</a>
                                                </li>
                                            <?php endif; ?>
                                            <li class="ty-account-info__item ty-dropdown-box__item">
                                                <a class="ty-account-info__a underlined" href="<?= Url::to(['/cabinet/order/index']) ?>" rel="nofollow">Заказы</a>
                                            </li>
                                            <li class="ty-account-info__item ty-dropdown-box__item">
                                                <a class="ty-account-info__a" href="<?= Url::to(['/cabinet/wishlist/index']) ?>" rel="nofollow">Отложенные товары</a>
                                            </li>
                                        </ul>

                                        <div class="ty-account-info__orders updates-wrapper track-orders" id="track_orders_block_3946">
                                            <form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="POST" class="cm-ajax cm-post cm-ajax-full-render" name="track_order_quick">
                                                <div class="ty-account-info__orders-txt">
                                                    Отслеживание заказа
                                                </div>
                                                <div class="ty-account-info__orders-input ty-control-group ty-input-append">
                                                    <label for="track_order_item3946" class="cm-required hidden">Отслеживание заказа</label>
                                                    <input type="text" size="20" class="ty-input-text cm-hint" id="track_order_item3946" name="track_data" value="Номер заказа/E-mail" />
                                                    <button title="Выполнить" class="ty-btn-go" type="submit"><i class="ty-btn-go__icon ty-icon-right-dir"></i></button>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="ty-account-info__buttons buttons-container">
                                            <?php if (Yii::$app->user->isGuest): ?>
                                                <a href="<?= Url::to(['site/login']) ?>" class="ty-btn ty-btn__secondary" rel="nofollow">
                                                    Войти
                                                </a>
                                                <a href="<?= Url::to(['site/signup']) ?>" class="ty-btn ty-btn__primary" rel="nofollow">
                                                    Регистрация
                                                </a>
                                            <?php else: ?>
                                                <?= Html::beginForm(['/site/logout'], 'post') ?>
                                                <?= Html::submitButton('Выйти', ['class' => 'ty-btn ty-btn__primary']) ?>
                                                <?= Html::endForm() ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid-row">
        <div class="row-fluid ">
            <?= Alert::widget([
                    'options' => [
                        'style' => 'margin-bottom:0px;',
                    ],
            ]) ?>
        </div>
    </div>
</section>