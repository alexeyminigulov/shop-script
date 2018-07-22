<?php

use frontend\widgets\CategoriesWidget;

?>

<!DOCTYPE html>
<html lang="ru" dir="ltr">
<head>
    <title>UniTheme - demo premium template for cs-cart</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"
          data-ca-mode="ultimate"/>
    <meta name="viewport" content="initial-scale=1.0, width=device-width"/>

    <meta name="description"
          content="UniTheme - demo premium template for cs-cart"/>

    <meta name="keywords" content="UniTheme, template, cs-cart"/>

    <meta name="format-detection" content="telephone=no"><meta property="og:type" content="website" />
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:title" content="UniTheme - demo premium template for cs-cart" />
    <meta property="og:description" content="UniTheme - demo premium template for cs-cart" />
    <meta property="og:url" content="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" />

    <meta property="og:image" content=" http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/logos/2/unitheme-logo.png" />

    <link rel="canonical" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" />
    <link href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/logos/2/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link type="text/css" rel="stylesheet" href="<?= Yii::getAlias('@web/css/cs-cart.css') ?>" />


</head>

<body>


<div class="ty-tygh" id="tygh_container">

    <div id="ajax_overlay" class="ty-ajax-overlay"></div>
    <div id="ajax_loading_box" class="ty-ajax-loading-box"></div>

    <div class="cm-notification-container notification-container">
    </div>

    <div class="ty-helper-container" id="tygh_main_container">



        <div class="tygh-top-panel clearfix">
            <div class="container-fluid  top-grid top-panel-padding">


                <div class="container-fluid-row ">
                    <div class="row-fluid ">
                        <div class="span16 ">
                            <div class="ty-ut-panel">
                                <div id="minimize_block" class="ty-ut-panel__wrapper">
                                    <div class="ty-ut-panel__logo"><a href="https://www.cs-cart.ru/?utm_source=demo" class="ty-ut-panel__logo-link" target="_blank"><i class="ty-top-panel__icon-basket ty-icon-basket"></i></a>
                                    </div>
                                    <div class="ty-ut-panel__title" style="margin: 0 15px;">Демо CS-Cart + Unitheme
                                    </div>
                                    <div class="ty-ut-panel_buy"><a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/admin.php" target="_blank" class="ty-ut-panel-btn">Перейти в панель администратора</a>
                                    </div>
                                    <div class="ty-ut-panel-action">
                                        <div class="ty-ut-panel-action_item">
                                            <div class="ty-ut-panel__title" style="margin-right:5px;">Варианты верхушки:
                                            </div>
                                            <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=48" class="ty-ut-panel-btn">Default</a>
                                            <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=47" class="ty-ut-panel-btn">Advanced</a>
                                            <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=55" class="ty-ut-panel-btn">Fixed Menu</a>
                                        </div>
                                        <div class="ty-ut-panel-action_item">
                                            <div class="ty-ut-panel__title" style="margin-right: 5px;">Варианты цветов:
                                            </div>
                                            <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=47"><i class="color-circle c-suny"></i></a>
                                            <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=51"><i class="color-circle c-flame"></i></a>
                                            <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=54"><i class="color-circle c-original"></i></a>
                                            <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=52"><i class="color-circle c-lighting"></i></a>
                                            <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=50"><i class="color-circle c-green"></i></a>
                                            <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=49"><i class="color-circle c-blue"></i></a>
                                            <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=56"><i class="color-circle c-fiolent"></i></a>
                                            <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=53"><i class="color-circle c-black"></i></a>
                                            <div class="adv-colors-wrap">
                                                <a onclick="$(this).next().toggleClass('hidden'); $(this).toggleClass('active');"><i class="color-circle c-colors"></i></a>
                                                <div class="adv-colors-block hidden">
                                                    <p><strong>Дополнительные цвета</strong>
                                                    </p>
                                                    <p>Minimalistica (30$):
                                                    </p>
                                                    <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=63"><i class="color-circle c-minimalistica-1"></i></a>
                                                    <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=62"><i class="color-circle c-minimalistica-2"></i></a>
                                                    <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=61"><i class="color-circle c-minimalistica-3"></i></a>
                                                    <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=58"><i class="color-circle c-minimalistica-4"></i></a>
                                                    <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=60"><i class="color-circle c-minimalistica-5"></i></a>
                                                    <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=59"><i class="color-circle c-minimalistica-6"></i></a>
                                                    <p>Gradiental (30$):
                                                    </p>
                                                    <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=64"><i class="color-circle c-gradiental-1"></i></a>
                                                    <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=65"><i class="color-circle c-gradiental-2"></i></a>
                                                    <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?s_layout=66"><i class="color-circle c-gradiental-3"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <a id="off_minimize_block" class="ty-ut-panel__close ty-ut-panel-action_item cm-combination-panel cm-save-state cm-ss-reverse"><i class="ty-icon-cancel"></i></a>
                                    </div>
                                </div>
                                <a id="on_minimize_block" class="minimize-label cm-combination-panel cm-save-state cm-ss-reverse hidden"><i class="ty-ut-panel-action__icon-setting ty-icon-wrench"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid-row">
                    <div class="row-fluid ">
                        <div class="span3 top-links-grid ty-top-grid_float">
                            <div class=" top-languages    ty-float-left">
                                <div id="languages_1">
                                    <div class="ty-select-wrapper ty-languages__icon-link">

                                        <a class="ty-select-block__a cm-combination" id="sw_select_ru_wrap_language">
                                            <i class="ty-select-block__a-flag ty-flag ty-flag-ru" ></i>
                                            <span class="ty-select-block__a-item hidden-phone hidden-tablet"></span>
                                            <i class="ty-select-block__arrow ty-icon-down-micro"></i>
                                        </a>

                                        <div id="select_ru_wrap_language" class="ty-select-block cm-popup-box hidden">
                                            <ul class="cm-select-list ty-select-block__list ty-flags">
                                                <li class="ty-select-block__list-item">
                                                    <a rel="nofollow" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?sl=ru" class="ty-select-block__list-a is-active " data-ca-country-code="ru" data-ca-name="ru">
                                                        <i class="ty-flag ty-flag-ru"></i>
                                                    </a>
                                                </li>
                                                <li class="ty-select-block__list-item">
                                                    <a rel="nofollow" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?sl=en" class="ty-select-block__list-a  " data-ca-country-code="us" data-ca-name="en">
                                                        <i class="ty-flag ty-flag-us"></i>
                                                    </a>
                                                </li>
                                                <li class="ty-select-block__list-item">
                                                    <a rel="nofollow" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?sl=ar" class="ty-select-block__list-a  " data-ca-country-code="sa" data-ca-name="ar">
                                                        <i class="ty-flag ty-flag-sa"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="top-currencies    ty-float-left">
                                <div id="currencies_2">

                                    <div class="ty-select-wrapper">

                                        <a class="ty-select-block__a cm-combination" id="sw_select_RUB_wrap_currency">
                                            <span class="ty-select-block__a-item "> (<span class="ty-rub">Р</span>)</span>
                                            <i class="ty-select-block__arrow ty-icon-down-micro"></i>
                                        </a>

                                        <div id="select_RUB_wrap_currency" class="ty-select-block cm-popup-box hidden">
                                            <ul class="cm-select-list ty-select-block__list ty-flags">
                                                <li class="ty-select-block__list-item">
                                                    <a rel="nofollow" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?currency=USD" class="ty-select-block__list-a  "  data-ca-name="USD">
                                                        ($)                    </a>
                                                </li>
                                                <li class="ty-select-block__list-item">
                                                    <a rel="nofollow" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?currency=RUB" class="ty-select-block__list-a is-active "  data-ca-name="RUB">
                                                        (<span class="ty-rub">Р</span>)                    </a>
                                                </li>
                                                <li class="ty-select-block__list-item">
                                                    <a rel="nofollow" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?currency=EUR" class="ty-select-block__list-a  "  data-ca-name="EUR">
                                                        (€)                    </a>
                                                </li>
                                                <li class="ty-select-block__list-item">
                                                    <a rel="nofollow" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/?currency=GBP" class="ty-select-block__list-a  "  data-ca-name="GBP">
                                                        (£)                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>




                        <div class="span13 top-links-grid hidden-phone">
                            <div class=" top-quick-links hidden-phone ty-float-right">



                                <div class="ty-text-links-wrapper">
        <span id="sw_text_links_3937" class="ty-text-links-btn cm-combination visible-phone">
            <i class="ty-icon-short-list"></i>
            <i class="ty-icon-down-micro ty-text-links-btn__arrow"></i>
        </span>

                                    <ul id="text_links_3937" class="ty-text-links cm-popup-box ty-text-links_show_inline">
                                        <li class="ty-text-links__item ty-level-0">
                                            <a class="ty-text-links__a" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/blog/">Обзоры</a>
                                        </li>
                                        <li class="ty-text-links__item ty-level-0">
                                            <a class="ty-text-links__a" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=discussion.view&amp;thread_id=26">Отзывы</a>
                                        </li>
                                        <li class="ty-text-links__item ty-level-0 ty-quick-menu__delivery">
                                            <a class="ty-text-links__a" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/oplata-i-dostavka/">Доставка и оплата</a>
                                        </li>
                                        <li class="ty-text-links__item ty-level-0 ty-quick-menu__return">
                                            <a class="ty-text-links__a" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/vozvrat/">Возврат</a>
                                        </li>
                                        <li class="ty-text-links__item ty-level-0 ty-quick-menu__pickup">
                                            <a class="ty-text-links__a" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=pickup.view">Пункты самовывоза</a>
                                        </li>
                                        <li class="ty-text-links__item ty-level-0 ty-quick-menu__contacts">
                                            <a class="ty-text-links__a" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/contacts/">Контакты</a>
                                        </li>
                                    </ul>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tygh-header clearfix">
            <div class="container-fluid  header-grid">


                <div class="container-fluid-row">
                    <div class="row-fluid ">
                        <div class="span4 top-logo-grid">
                            <div class=" top-logo">
                                <div class="ty-logo-container">
                                    <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" title="">
                                        <img src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/logos/2/unitheme-logo.png" width="190" height="47" alt="" class="ty-logo-container__image" />
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


                                <li class="ty-menu__item  ty-menu__item-nodrop  first-lvl  ty-menu-item__brands ">
                                    <a  href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=product_features.view_all&amp;filter_id=10" class="ty-menu__item-link a-first-lvl">
                                        <div class="menu-lvl-ctn">
                                            Бренды                        </div>
                                    </a>
                                </li>

                                <li class="ty-menu__item  ty-menu__item-nodrop  first-lvl  ty-menu-item__newest ">
                                    <a  href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.newest" class="ty-menu__item-link a-first-lvl">
                                        <div class="menu-lvl-ctn">
                                            Новинки                        </div>
                                    </a>
                                </li>

                                <li class="ty-menu__item  ty-menu__item-nodrop  first-lvl  ty-menu-item__hits ">
                                    <a  href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.bestsellers" class="ty-menu__item-link a-first-lvl">
                                        <div class="menu-lvl-ctn">
                                            Хиты продаж                        </div>
                                    </a>
                                </li>

                                <li class="ty-menu__item  ty-menu__item-nodrop  first-lvl  ty-menu-item__sale ">
                                    <a  href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.on_sale" class="ty-menu__item-link a-first-lvl">
                                        <div class="menu-lvl-ctn">
                                            Скидки                        </div>
                                    </a>
                                </li>

                                <li class="ty-menu__item  ty-menu__item-nodrop  first-lvl last  ty-menu-item__promo ">
                                    <a  href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/promotions/" class="ty-menu__item-link a-first-lvl">
                                        <div class="menu-lvl-ctn">
                                            Акции                        </div>
                                    </a>
                                </li>


                            </ul>
                        </div>




                        <div class="span5 top-phones-grid">
                            <div class=" ty-float-right">
                                <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type=""><div class="ty-cr-phone-number">
                                        <!-- <div class="ty-cr-work">Без выходных</div> -->
                                        <div class="ty-cr-phone"><a href="tel:+88000000000">+8(800) 0000000</a><br><a href="tel:+88000000000">+8(800) 0000000</a></div>
                                        <div class="ty-cr-phone-number-link">
                                            <div class="ty-cr-link"><a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/kontakty/">Контакты</a></div>
                                            <div class="ty-cr-link">



                                                <a id="opener_call_request_3940" class="cm-dialog-opener cm-dialog-auto-size "  data-ca-target-id="content_call_request_3940"  rel="nofollow"><span>Перезвонить</span></a>

                                                <div class="hidden" id="content_call_request_3940" title="Перезвонить">
                                                    <div id="call_request_3940">

                                                        <form name="call_requests_form_main" id="form_call_request_3940" action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post" class="cm-ajax cm-ajax-full-render">
                                                            <input type="hidden" name="result_ids" value="call_request_3940" />
                                                            <input type="hidden" name="return_url" value="index.php" />


                                                            <div class="ty-control-group">
                                                                <label class="ty-control-group__title" for="call_data_call_request_3940_name">Ваше имя</label>
                                                                <input id="call_data_call_request_3940_name" size="50" class="ty-input-text-full" type="text" name="call_data[name]" value="" />
                                                            </div>

                                                            <div class="ty-control-group">
                                                                <label for="call_data_call_request_3940_phone" class="ty-control-group__title cm-cr-mask-phone-lbl cm-required">Телефон</label>
                                                                <input id="call_data_call_request_3940_phone" class="ty-input-text-full cm-cr-mask-phone ty-inputmask-bdi" size="50" type="text" name="call_data[phone]" value="" />
                                                            </div>


                                                            <div class="ty-control-group">
                                                                <label for="call_data_call_request_3940_convenient_time_from" class="ty-control-group__title">Удобное время</label>
                                                                <bdi>
                                                                    <input id="call_data_call_request_3940_convenient_time_from" class="ty-input-text cm-cr-mask-time" size="6" type="text" name="call_data[time_from]" value="" placeholder="09:00" /> -
                                                                    <input id="call_data_call_request_3940_convenient_time_to" class="ty-input-text cm-cr-mask-time" size="6" type="text" name="call_data[time_to]" value="" placeholder="20:00" />
                                                                </bdi>
                                                            </div>




                                                            <div class="buttons-container">


                                                                <button  class="ty-btn__primary ty-btn__big cm-form-dialog-closer ty-btn ty-btn" type="submit" name="dispatch[call_requests.request]" >Отправить</button>


                                                            </div>

                                                            <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" />
                                                        </form>

                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" ty-float-right">

                                <div id="abt__unitheme_wishlist_count">
                                    <a class="cm-tooltip ty-wishlist__a " href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/wishlist/" rel="nofollow" title="Отложенные товары"><i class="uni-wish1"></i></a>
                                </div>

                                <div id="abt__unitheme_compared_products">
                                    <a class="cm-tooltip ty-compare__a " href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/compare/" rel="nofollow" title="Список сравнения"><i class="uni-compare"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid-row">
                    <div class="row-fluid ">
                        <div class="span16 top-menu-grid  small-grid top-menu">
                            <div class="row-fluid ">

                                <?= CategoriesWidget::widget() ?>

                                <div class="span7 search-block-grid">
                                    <div class=" top-search">
                                        <div class="ty-search-block">
                                            <form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" name="search_form" method="get">
                                                <input type="hidden" name="subcats" value="Y" />
                                                <input type="hidden" name="pcode_from_q" value="Y" />
                                                <input type="hidden" name="pshort" value="Y" />
                                                <input type="hidden" name="pfull" value="Y" />
                                                <input type="hidden" name="pname" value="Y" />
                                                <input type="hidden" name="pkeywords" value="Y" />
                                                <input type="hidden" name="search_performed" value="Y" />

                                                <input type="text" name="q" value="" id="search_input" title="Искать товары" class="ty-search-block__input cm-hint" /><button title="Найти" class="ty-search-magnifier" type="submit"><i class="ty-icon-search"></i></button>
                                                <input type="hidden" name="dispatch" value="products.search" />

                                                <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" />
                                            </form>
                                        </div>
                                    </div>
                                </div>


                                <div class="span5 cart-content-grid">
                                    <div class=" top-cart-content ty-float-right">

                                        <div class="ty-dropdown-box" id="cart_status_3945">
                                            <div id="sw_dropdown_3945" class="ty-dropdown-box__title  cm-combination">
                                                <div>

                                                    <i class="ty-minicart__icon ty-icon-basket empty"><span class="basket-cart-amount">0</span></i>
                                                    <span class="ty-minicart-title empty-cart ty-hand"><small>Ваша</small>&nbsp;Корзина</span>
                                                    <i class="ty-icon-down-micro"></i>


                                                </div>
                                            </div>
                                            <div id="dropdown_3945" class="cm-popup-box ty-dropdown-box__content hidden">

                                                <div class="cm-cart-content cm-cart-content-thumb cm-cart-content-delete">
                                                    <div class="ty-cart-items">
                                                        <div class="ty-cart-items__empty ty-center">Корзина</div>
                                                    </div>

                                                    <div class="cm-cart-buttons ty-cart-content__buttons buttons-container hidden">
                                                        <div class="ty-float-left">
                                                            <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/cart/" rel="nofollow" class="ty-btn ty-btn__secondary">Корзина</a>
                                                        </div>
                                                        <div class="ty-float-right">
                                                            <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/checkout/" rel="nofollow" class="ty-btn ty-btn__primary">Оформить заказ</a>
                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>



                                    </div>
                                    <div class="ty-dropdown-box  top-my-account ty-float-right">
                                        <div id="sw_dropdown_3946" class="ty-dropdown-box__title cm-combination unlogged">

                                            <a class="ty-account-info__title" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/profiles-update/">
                                                <i class="ty-icon-user"></i>&nbsp;
                                                <span class="ty-account-info__title-txt" ><small>Ваш личный</small>Кабинет</span>
                                                <i class="ty-icon-down-micro ty-account-info__user-arrow"></i>
                                            </a>

                                        </div>
                                        <div id="dropdown_3946" class="cm-popup-box ty-dropdown-box__content hidden">


                                            <div id="account_info_3946">
                                                <ul class="ty-account-info">


                                                    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/orders/" rel="nofollow">Заказы</a></li>
                                                    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/compare/" rel="nofollow">Список сравнения</a></li>



                                                    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/wishlist/" rel="nofollow">Отложенные товары</a></li>
                                                </ul>

                                                <div class="ty-account-info__orders updates-wrapper track-orders" id="track_orders_block_3946">
                                                    <form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="POST" class="cm-ajax cm-post cm-ajax-full-render" name="track_order_quick">
                                                        <input type="hidden" name="result_ids" value="track_orders_block_*" />
                                                        <input type="hidden" name="return_url" value="index.php" />

                                                        <div class="ty-account-info__orders-txt">Отслеживание заказа</div>

                                                        <div class="ty-account-info__orders-input ty-control-group ty-input-append">
                                                            <label for="track_order_item3946" class="cm-required hidden">Отслеживание заказа</label>
                                                            <input type="text" size="20" class="ty-input-text cm-hint" id="track_order_item3946" name="track_data" value="Номер заказа/E-mail" />
                                                            <button title="Выполнить" class="ty-btn-go" type="submit"><i class="ty-btn-go__icon ty-icon-right-dir"></i></button>
                                                            <input type="hidden" name="dispatch" value="orders.track_request" />

                                                        </div>
                                                        <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" />
                                                    </form>
                                                </div>

                                                <div class="ty-account-info__buttons buttons-container">

                                                    <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/login/?return_url=index.php"  data-ca-target-id="login_block3946" class="cm-dialog-opener cm-dialog-auto-size ty-btn ty-btn__secondary" rel="nofollow">Войти</a><a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/profiles-add/" rel="nofollow" class="ty-btn ty-btn__primary">Регистрация</a>


                                                    <div  id="login_block3946" class="hidden" title="Войти">
                                                        <div class="ty-login-popup">


                                                            <form name="popup3946_form" action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post">
                                                                <input type="hidden" name="return_url" value="index.php" />
                                                                <input type="hidden" name="redirect_url" value="index.php" />

                                                                <div class="ty-control-group">
                                                                    <label for="login_popup3946" class="ty-login__filed-label ty-control-group__label cm-required cm-trim cm-email">E-mail</label>
                                                                    <input type="text" id="login_popup3946" name="user_login" size="30" value="customer@example.com" class="ty-login__input cm-focus" />
                                                                </div>


                                                                <div class="ty-control-group ty-password-forgot">
                                                                    <label for="psw_popup3946" class="ty-login__filed-label ty-control-group__label ty-password-forgot__label cm-required">Пароль</label><a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=auth.recover_password" class="ty-password-forgot__a"  tabindex="5">Забыли пароль?</a>
                                                                    <input type="password" id="psw_popup3946" name="password" size="30" value="customer" class="ty-login__input" maxlength="32" />
                                                                </div>

                                                                <div class="ty-login-reglink ty-center">
                                                                    <a class="ty-login-reglink__a" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/profiles-add/" rel="nofollow">Создать учетную запись</a>
                                                                </div>


                                                                <div class="buttons-container clearfix">
                                                                    <div class="ty-float-right">


                                                                        <button  class="ty-btn__login ty-btn__secondary ty-btn" type="submit" name="dispatch[auth.login]" >Войти</button>


                                                                    </div>
                                                                    <div class="ty-login__remember-me">
                                                                        <label for="remember_me_popup3946" class="ty-login__remember-me-label"><input class="checkbox" type="checkbox" name="remember_me" id="remember_me_popup3946" value="Y" />Запомнить</label>
                                                                    </div>
                                                                </div>


                                                                <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" />
                                                            </form>


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class=" hidden search-button-grid ty-float-right">
                                        <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type=""><a class="search-button-mobile" onclick="ShowSearch()"><i class="ty-icon-search"></i></a>
                                            <a class="close-button-mobile hidden" onclick="HideSearch()"><i class="uni-close"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tygh-content clearfix">
            <div class="container-fluid  content-grid">


                <div class="container-fluid-row container-fluid-row-no-limit fullwidth-page-banners">
                    <div class="row-fluid ">
                        <div class="span16 ">
                            <div id="banner_slider_3956" class="banners owl-carousel">
                                <div
                                    class="ab-advanced-banner ty-banner__image-item shadow light"
                                    style="background:  url('http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/bg_image/1/ut-demo-bn-1.jpg');
margin:0px;">
                                    <div class="advanced-banner-content" style="min-height:400px">
                                        <div class="advanced-banner-block   left" style="padding:20px;padding-top:0;padding-bottom:0;">
                                            <div class="advanced-banner-mb" style="display:table-cell;height:400px;vertical-align:middle;">
                                                <div class="advanced-banner-title" style="font-size: 38px">Новые горизонты звучания - Beats Solo2 Wireless</div>
                                                <div class="advanced-banner-text " style="font-size:14px;background: transparent">Наушники идеально настроены, поэтому обеспечивают сбалансированное звучание с богатыми басами и широким, динамичным диапазоном. Они подойдут как для обычного прослушивания дома, так и занятий физической активностью. Они полностью погружают в музыкальное эмоциональное состояние и максимально приближают к оригинальному звучанию.</div>
                                                <br><a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/" class="ty-btn ty-btn__primary" >Просмотреть ассортимент</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="ab-advanced-banner ty-banner__image-item shadow dark"
                                    style="background: #EEEEEE ;
margin:0px;">
                                    <div class="advanced-banner-content" style="min-height:400px">
                                        <div class="advanced-banner-image right" style=" line-height: 400px">
                                            <img src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/promo/1/ut-demo-bn-3.jpg" alt="" title="" style="max-height:400px;width:auto">
                                        </div>
                                        <div class="advanced-banner-block   left" style="padding:20px;padding-top:0;padding-bottom:0;">
                                            <div class="advanced-banner-mb" style="display:table-cell;height:400px;vertical-align:middle;">
                                                <div class="advanced-banner-title" style="font-size: 38px">Полностью обновленный дизайн Apple iMac</div>
                                                <div class="advanced-banner-text " style="font-size:14px;background: transparent">Создание потрясающе тонкого дизайна нового iMac некоторые люди фактически приняли за потрясающий подвиг в технологических инновациях. Разработчики и сами не могли представить себе, что им удасться настолько модернизировать продукт изнутри, и уместить такие мощности внуть столь изящный корпус</div>
                                                <br><a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/telefony/apple-iphone/" class="ty-btn ty-btn__primary" >Хочу его купить</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ab-advanced-banner ty-banner__image-item shadow dark" style="background: #EEEEEE; margin:0px;">
                                    <div class="advanced-banner-content" style="min-height:400px">
                                        <div class="advanced-banner-image right" style=" line-height: 400px">
                                            <img src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/promo/1/ut-demo-bn-2.jpg" alt="" title="" style="max-height:400px;width:auto">
                                        </div>
                                        <div class="advanced-banner-block   left" style="padding:20px;padding-top:0;padding-bottom:0;">
                                            <div class="advanced-banner-mb" style="display:table-cell;height:400px;vertical-align:middle;">
                                                <div class="advanced-banner-title" style="font-size: 38px">Обзор и сравнение шлемов виртуальной реальности</div>
                                                <div class="advanced-banner-text " style="font-size:14px;background: transparent">Представляем вашему вниманию обзор и сравнение всех шлемов виртуальной реальности. Уже сейчас с полной уверенностью можно говорить, что виртуальная реальность — это тренд на долгие годы вперёд.</div>
                                                <br><a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/telefony/samsung/" class="ty-btn ty-btn__primary" >Мне это интересно</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid-row">
                    <div class="row-fluid ">								<div class="span16 pd-all tabs-wrap">
                            <div class="row-fluid ">								<div class="span16 ">
                                    <div class="ty-mainbox-container clearfix">

                                        <div class="ty-mainbox-title">

                                            Хиты продаж / Бестселлеры

                                        </div>

                                        <div class="ty-mainbox-body">
                                            <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type=""> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="row-fluid ">
                                <div class="span16 ">
                                    <div class="ty-tabs cm-j-tabs clearfix">
                                        <ul class="ty-tabs__list" >
                                            <li id="ab__grid_tab_4437_101" data-url="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=ab__grid_tabs.load&amp;block_id=101" class="ab__grid_tabs ty-tabs__item cm-js cm-ajax active"><a class="ty-tabs__a" >Самые популярные</a></li>
                                            <li id="ab__grid_tab_4437_100" data-url="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=ab__grid_tabs.load&amp;block_id=100" class="ab__grid_tabs ty-tabs__item cm-js cm-ajax"><a class="ty-tabs__a" >Распродажа</a></li>
                                            <li id="ab__grid_tab_4437_102" data-url="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=ab__grid_tabs.load&amp;block_id=102" class="ab__grid_tabs ty-tabs__item cm-js cm-ajax"><a class="ty-tabs__a" >Хиты продаж</a></li>
                                        </ul>
                                    </div>

                                    <div class="cm-tabs-content ty-tabs__content clearfix" id="tabs_content">
                                        <div id="content_ab__grid_tab_4437_101">


                                            <div id="scroll_list_101"
                                                 class="jcarousel-skin owl-carousel ty-scroller-list grid-list no-buttons ty-scroller-advanced">

                                                <div class="ty-scroller-list__item">


                                                    <div class="ty-grid-list__item">
                                                        <form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post" name="product_form_101000166" enctype="multipart/form-data" class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle ">
                                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__unitheme_wishlist_count" />
                                                            <input type="hidden" name="redirect_url" value="index.php" />
                                                            <input type="hidden" name="product_data[166][product_id]" value="166" />


                                                            <div class="ty-grid-list__image">


                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/foto-video/cifrovye-fotoapparaty/nikon-1-j1-two-lens-kit-krasnyy/">
                                                                    <img class="ty-pict     cm-image" id="det_img_101000166"  src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/thumbnails/189/189/detailed/0/27534_1.jpg" alt="" title=""/>
                                                                </a>



                                                                <span class="ty-discount-label   color3 cm-reload-101000166" id="discount_label_update_101000166">
        <span class="ty-discount-label__item" id="line_prc_discount_value_101000166"><span class="ty-discount-label__value" id="prc_discount_value_label_101000166">Скидка<br><em>53%</em></span></span>
                                                                    <!--discount_label_update_101000166--></span>


                                                                <div class="grid-list-buttons">
                                                                    <div class="ty-quick-view-button">
                                                                        <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="166" data-ca-target-id="product_quick_view" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.quick_view&amp;product_id=166&amp;prev_url=index.php&amp;n_plain=Y" data-ca-dialog-title="Быстрый просмотр товаров" rel="nofollow">Просмотр</a>
                                                                    </div>


                                                                    <a  class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button " id="button_wishlist_101000166" data-ca-dispatch="dispatch[wishlist.add..166]">Отложить</a>





                                                                    <a  class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button " href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=product_features.add_product&amp;product_id=166&amp;redirect_url=index.php" rel="nofollow" data-ca-target-id="comparison_list,account_info*,abt__unitheme_compared_products">Сравнить</a>



                                                                </div>
                                                            </div>

                                                            <div class="grid-list__rating">


                    <span class="ty-nowrap ty-stars">
                        <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/foto-video/cifrovye-fotoapparaty/nikon-1-j1-two-lens-kit-krasnyy/?selected_section=discussion#discussion">

            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>

            <i class="ty-stars__icon ty-icon-star-half"></i>

            <i class="ty-stars__icon ty-icon-star-empty"></i>

            </a>
    </span>






                                                                <span class="cn-comments">(2)</span>                            </div>

                                                            <div class="ty-grid-list__item-name">


                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/foto-video/cifrovye-fotoapparaty/nikon-1-j1-two-lens-kit-krasnyy/" class="product-title" title="Nikon 1 J1 Two-Lens Kit красный" >Nikon 1 J1 Two-Lens Kit красный</a>


                                                            </div>

                                                            <div class="ty-grid-list__price ">
                                                            <span class="cm-reload-101000166 ty-price-update" id="price_update_101000166">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_price]" value="1" />

                                    <span class="ty-price" id="line_discounted_price_101000166"><bdi><span id="sec_discounted_price_101000166" class="ty-price-num">12&nbsp;248</span>&nbsp;<span class="ty-price-num"><span class="ty-rub">Р</span></span></bdi></span>


                                                                <!--price_update_101000166--></span>


                                                                <span class="cm-reload-101000166 ty-list-price-block" id="old_price_update_101000166">

                            <span class="ty-list-price ty-nowrap" id="line_list_price_101000166"><span class="ty-strike"><bdi><span id="sec_list_price_101000166" class="ty-list-price ty-nowrap">26&nbsp;248</span>&nbsp;<span class="ty-list-price ty-nowrap"><span class="ty-rub">Р</span></span></bdi></span></span>


                                                                    <!--old_price_update_101000166--></span>



                                                                <span class="cm-reload-101000166" id="line_discount_update_101000166">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_list_discount]" value="1" />
                        <span class="ty-list-price ty-save-price ty-nowrap   color3" id="line_discount_value_101000166"> Вы экономите: <bdi><span id="sec_discount_value_101000166">14&nbsp;000</span>&nbsp;<span class="ty-rub">Р</span></bdi></span>
                                                                    <!--line_discount_update_101000166--></span>

                                                            </div>

                                                            <div class="stock-grid ty-product-block__field-group">




                                                            </div>

                                                            <div class="ty-grid-list__control">
                                                            </div>

                                                            <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" /></form>

                                                    </div>
                                                </div>



                                                <div class="ty-scroller-list__item">








                                                    <div class="ty-grid-list__item">
                                                        <form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post" name="product_form_101000161" enctype="multipart/form-data" class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle ">
                                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__unitheme_wishlist_count" />
                                                            <input type="hidden" name="redirect_url" value="index.php" />
                                                            <input type="hidden" name="product_data[161][product_id]" value="161" />


                                                            <div class="ty-grid-list__image">



                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/foto-video/cifrovye-fotoapparaty/samsung-mv800/">
                                                                    <img class="ty-pict     cm-image" id="det_img_101000161"  src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/thumbnails/189/189/detailed/0/MV800_NEW_KV_6.jpg" alt=""
                                                                         title=""
                                                                    />

                                                                </a>





                                                                <div class="grid-list-buttons">
                                                                    <div class="ty-quick-view-button">
                                                                        <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="161" data-ca-target-id="product_quick_view" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.quick_view&amp;product_id=161&amp;prev_url=index.php&amp;n_plain=Y" data-ca-dialog-title="Быстрый просмотр товаров" rel="nofollow">Просмотр</a>
                                                                    </div>


                                                                    <a  class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button " id="button_wishlist_101000161" data-ca-dispatch="dispatch[wishlist.add..161]">Отложить</a>





                                                                    <a  class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button " href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=product_features.add_product&amp;product_id=161&amp;redirect_url=index.php" rel="nofollow" data-ca-target-id="comparison_list,account_info*,abt__unitheme_compared_products">Сравнить</a>



                                                                </div>
                                                            </div>

                                                            <div class="grid-list__rating no-rating">
                                                                <i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i>                            </div>

                                                            <div class="ty-grid-list__item-name">


                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/foto-video/cifrovye-fotoapparaty/samsung-mv800/" class="product-title" title="Samsung MV800" >Samsung MV800</a>


                                                            </div>

                                                            <div class="ty-grid-list__price ">
                                                            <span class="cm-reload-101000161 ty-price-update" id="price_update_101000161">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_price]" value="1" />

                                    <span class="ty-price" id="line_discounted_price_101000161"><bdi><span id="sec_discounted_price_101000161" class="ty-price-num">11&nbsp;200</span>&nbsp;<span class="ty-price-num"><span class="ty-rub">Р</span></span></bdi></span>


                                                                <!--price_update_101000161--></span>


                                                                <span class="cm-reload-101000161 ty-list-price-block" id="old_price_update_101000161">



        <!--old_price_update_101000161--></span>



                                                                <span class="cm-reload-101000161" id="line_discount_update_101000161">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_list_discount]" value="1" />
                                                                    <!--line_discount_update_101000161--></span>

                                                            </div>

                                                            <div class="stock-grid ty-product-block__field-group">




                                                            </div>

                                                            <div class="ty-grid-list__control">
                                                            </div>

                                                            <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" /></form>

                                                    </div>
                                                </div>



                                                <div class="ty-scroller-list__item">







                                                    <div class="ty-grid-list__item">
                                                        <form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post" name="product_form_101000167" enctype="multipart/form-data" class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle ">
                                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__unitheme_wishlist_count" />
                                                            <input type="hidden" name="redirect_url" value="index.php" />
                                                            <input type="hidden" name="product_data[167][product_id]" value="167" />


                                                            <div class="ty-grid-list__image">



                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/foto-video/zerkalnye-fotoapparaty/nikon-d3100-18-55-kit-vr/">
                                                                    <img class="ty-pict     cm-image" id="det_img_101000167"  src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/thumbnails/189/189/detailed/0/25472_1.jpg" alt=""
                                                                         title=""
                                                                    />

                                                                </a>



                                                                <span class="ty-discount-label color1   cm-reload-101000167" id="discount_label_update_101000167">
        <span class="ty-discount-label__item" id="line_prc_discount_value_101000167"><span class="ty-discount-label__value" id="prc_discount_value_label_101000167">Скидка<br><em>8%</em></span></span>
                                                                    <!--discount_label_update_101000167--></span>


                                                                <div class="grid-list-buttons">
                                                                    <div class="ty-quick-view-button">
                                                                        <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="167" data-ca-target-id="product_quick_view" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.quick_view&amp;product_id=167&amp;prev_url=index.php&amp;n_plain=Y" data-ca-dialog-title="Быстрый просмотр товаров" rel="nofollow">Просмотр</a>
                                                                    </div>


                                                                    <a  class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button " id="button_wishlist_101000167" data-ca-dispatch="dispatch[wishlist.add..167]">Отложить</a>





                                                                    <a  class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button " href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=product_features.add_product&amp;product_id=167&amp;redirect_url=index.php" rel="nofollow" data-ca-target-id="comparison_list,account_info*,abt__unitheme_compared_products">Сравнить</a>



                                                                </div>
                                                            </div>

                                                            <div class="grid-list__rating">


                    <span class="ty-nowrap ty-stars">
                        <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/foto-video/zerkalnye-fotoapparaty/nikon-d3100-18-55-kit-vr/?selected_section=discussion#discussion">

            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>



            </a>
    </span>






                                                                <span class="cn-comments">(2)</span>                            </div>

                                                            <div class="ty-grid-list__item-name">


                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/foto-video/zerkalnye-fotoapparaty/nikon-d3100-18-55-kit-vr/" class="product-title" title="Nikon D3100 18-55 Kit VR" >Nikon D3100 18-55 Kit VR</a>


                                                            </div>

                                                            <div class="ty-grid-list__price ">
                                                            <span class="cm-reload-101000167 ty-price-update" id="price_update_101000167">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_price]" value="1" />

                                    <span class="ty-price" id="line_discounted_price_101000167"><bdi><span id="sec_discounted_price_101000167" class="ty-price-num">19&nbsp;248</span>&nbsp;<span class="ty-price-num"><span class="ty-rub">Р</span></span></bdi></span>


                                                                <!--price_update_101000167--></span>


                                                                <span class="cm-reload-101000167 ty-list-price-block" id="old_price_update_101000167">

                            <span class="ty-list-price ty-nowrap" id="line_list_price_101000167"><span class="ty-strike"><bdi><span id="sec_list_price_101000167" class="ty-list-price ty-nowrap">20&nbsp;998</span>&nbsp;<span class="ty-list-price ty-nowrap"><span class="ty-rub">Р</span></span></bdi></span></span>


                                                                    <!--old_price_update_101000167--></span>



                                                                <span class="cm-reload-101000167" id="line_discount_update_101000167">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_list_discount]" value="1" />
                        <span class="ty-list-price ty-save-price ty-nowrap color1  " id="line_discount_value_101000167"> Вы экономите: <bdi><span id="sec_discount_value_101000167">1&nbsp;750</span>&nbsp;<span class="ty-rub">Р</span></bdi></span>
                                                                    <!--line_discount_update_101000167--></span>

                                                            </div>

                                                            <div class="stock-grid ty-product-block__field-group">




                                                            </div>

                                                            <div class="ty-grid-list__control">
                                                            </div>

                                                            <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" /></form>

                                                    </div>
                                                </div>



                                                <div class="ty-scroller-list__item">







                                                    <div class="ty-grid-list__item">
                                                        <form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post" name="product_form_101000163" enctype="multipart/form-data" class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle ">
                                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__unitheme_wishlist_count" />
                                                            <input type="hidden" name="redirect_url" value="index.php" />
                                                            <input type="hidden" name="product_data[163][product_id]" value="163" />


                                                            <div class="ty-grid-list__image">



                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/foto-video/cifrovye-fotoapparaty/samsung-nx200/">
                                                                    <img class="ty-pict     cm-image" id="det_img_101000163"  src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/thumbnails/189/189/detailed/0/NX200_F4_B_1024x768_6.jpg" alt=""
                                                                         title=""
                                                                    />

                                                                </a>





                                                                <div class="grid-list-buttons">
                                                                    <div class="ty-quick-view-button">
                                                                        <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="163" data-ca-target-id="product_quick_view" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.quick_view&amp;product_id=163&amp;prev_url=index.php&amp;n_plain=Y" data-ca-dialog-title="Быстрый просмотр товаров" rel="nofollow">Просмотр</a>
                                                                    </div>


                                                                    <a  class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button " id="button_wishlist_101000163" data-ca-dispatch="dispatch[wishlist.add..163]">Отложить</a>





                                                                    <a  class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button " href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=product_features.add_product&amp;product_id=163&amp;redirect_url=index.php" rel="nofollow" data-ca-target-id="comparison_list,account_info*,abt__unitheme_compared_products">Сравнить</a>



                                                                </div>
                                                            </div>

                                                            <div class="grid-list__rating no-rating">
                                                                <i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i>                            </div>

                                                            <div class="ty-grid-list__item-name">


                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/foto-video/cifrovye-fotoapparaty/samsung-nx200/" class="product-title" title="Samsung NX200" >Samsung NX200</a>


                                                            </div>

                                                            <div class="ty-grid-list__price ">
                                                            <span class="cm-reload-101000163 ty-price-update" id="price_update_101000163">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_price]" value="1" />

                                    <span class="ty-price" id="line_discounted_price_101000163"><bdi><span id="sec_discounted_price_101000163" class="ty-price-num">36&nbsp;000</span>&nbsp;<span class="ty-price-num"><span class="ty-rub">Р</span></span></bdi></span>


                                                                <!--price_update_101000163--></span>


                                                                <span class="cm-reload-101000163 ty-list-price-block" id="old_price_update_101000163">



        <!--old_price_update_101000163--></span>



                                                                <span class="cm-reload-101000163" id="line_discount_update_101000163">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_list_discount]" value="1" />
                                                                    <!--line_discount_update_101000163--></span>

                                                            </div>

                                                            <div class="stock-grid ty-product-block__field-group">




                                                            </div>

                                                            <div class="ty-grid-list__control">
                                                            </div>

                                                            <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" /></form>

                                                    </div>
                                                </div>



                                                <div class="ty-scroller-list__item">





                                                    <div class="ty-grid-list__item">
                                                        <form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post" name="product_form_101000262" enctype="multipart/form-data" class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle ">
                                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__unitheme_wishlist_count" />
                                                            <input type="hidden" name="redirect_url" value="index.php" />
                                                            <input type="hidden" name="product_data[262][product_id]" value="262" />


                                                            <div class="ty-grid-list__image">



                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-by-dr.-dre-solo2-wireless-black/">
                                                                    <img class="ty-pict     cm-image" id="det_img_101000262"  src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/thumbnails/189/189/detailed/1/Beats-by-Dr.Dre-Solo-2-Wireless-Black.650x650.jpg" alt=""
                                                                         title=""
                                                                    />

                                                                </a>



                                                                <span class="ty-discount-label   color3 cm-reload-101000262" id="discount_label_update_101000262">
        <span class="ty-discount-label__item" id="line_prc_discount_value_101000262"><span class="ty-discount-label__value" id="prc_discount_value_label_101000262">Скидка<br><em>64%</em></span></span>
                                                                    <!--discount_label_update_101000262--></span>


                                                                <div class="grid-list-buttons">
                                                                    <div class="ty-quick-view-button">
                                                                        <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="262" data-ca-target-id="product_quick_view" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.quick_view&amp;product_id=262&amp;prev_url=index.php&amp;n_plain=Y" data-ca-dialog-title="Быстрый просмотр товаров" rel="nofollow">Просмотр</a>
                                                                    </div>


                                                                    <a  class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button " id="button_wishlist_101000262" data-ca-dispatch="dispatch[wishlist.add..262]">Отложить</a>





                                                                    <a  class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button " href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=product_features.add_product&amp;product_id=262&amp;redirect_url=index.php" rel="nofollow" data-ca-target-id="comparison_list,account_info*,abt__unitheme_compared_products">Сравнить</a>



                                                                </div>
                                                            </div>

                                                            <div class="grid-list__rating">


                    <span class="ty-nowrap ty-stars">
                        <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-by-dr.-dre-solo2-wireless-black/?selected_section=discussion#discussion">

            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>

            <i class="ty-stars__icon ty-icon-star-half"></i>


            </a>
    </span>






                                                                <span class="cn-comments">(2)</span>                            </div>

                                                            <div class="ty-grid-list__item-name">


                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-by-dr.-dre-solo2-wireless-black/" class="product-title" title="Наушники Beats by Dr. Dre Solo2 Wireless Black" >Наушники Beats by Dr. Dre Solo2 Wireless Black</a>


                                                            </div>

                                                            <div class="ty-grid-list__price ">
                                                            <span class="cm-reload-101000262 ty-price-update" id="price_update_101000262">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_price]" value="1" />

                                    <span class="ty-price" id="line_discounted_price_101000262"><bdi><span id="sec_discounted_price_101000262" class="ty-price-num">8&nbsp;543</span>&nbsp;<span class="ty-price-num"><span class="ty-rub">Р</span></span></bdi></span>


                                                                <!--price_update_101000262--></span>


                                                                <span class="cm-reload-101000262 ty-list-price-block" id="old_price_update_101000262">

                            <span class="ty-list-price ty-nowrap" id="line_list_price_101000262"><span class="ty-strike"><bdi><span id="sec_list_price_101000262" class="ty-list-price ty-nowrap">24&nbsp;000</span>&nbsp;<span class="ty-list-price ty-nowrap"><span class="ty-rub">Р</span></span></bdi></span></span>


                                                                    <!--old_price_update_101000262--></span>



                                                                <span class="cm-reload-101000262" id="line_discount_update_101000262">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_list_discount]" value="1" />
                        <span class="ty-list-price ty-save-price ty-nowrap   color3" id="line_discount_value_101000262"> Вы экономите: <bdi><span id="sec_discount_value_101000262">15&nbsp;457</span>&nbsp;<span class="ty-rub">Р</span></bdi></span>
                                                                    <!--line_discount_update_101000262--></span>

                                                            </div>

                                                            <div class="stock-grid ty-product-block__field-group">




                                                            </div>

                                                            <div class="ty-grid-list__control">
                                                            </div>

                                                            <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" /></form>

                                                    </div>
                                                </div>



                                                <div class="ty-scroller-list__item">







                                                    <div class="ty-grid-list__item">
                                                        <form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post" name="product_form_101000258" enctype="multipart/form-data" class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle ">
                                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__unitheme_wishlist_count" />
                                                            <input type="hidden" name="redirect_url" value="index.php" />
                                                            <input type="hidden" name="product_data[258][product_id]" value="258" />


                                                            <div class="ty-grid-list__image">



                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-ep/">
                                                                    <img class="ty-pict     cm-image" id="det_img_101000258"  src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/thumbnails/189/189/detailed/1/Beats-Studio2-Wireless-Over-Ear-Red.650x650.jpg" alt=""
                                                                         title=""
                                                                    />

                                                                </a>



                                                                <span class="ty-discount-label   color3 cm-reload-101000258" id="discount_label_update_101000258">
        <span class="ty-discount-label__item" id="line_prc_discount_value_101000258"><span class="ty-discount-label__value" id="prc_discount_value_label_101000258">Скидка<br><em>73%</em></span></span>
                                                                    <!--discount_label_update_101000258--></span>


                                                                <div class="grid-list-buttons">
                                                                    <div class="ty-quick-view-button">
                                                                        <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="258" data-ca-target-id="product_quick_view" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.quick_view&amp;product_id=258&amp;prev_url=index.php&amp;n_plain=Y" data-ca-dialog-title="Быстрый просмотр товаров" rel="nofollow">Просмотр</a>
                                                                    </div>


                                                                    <a  class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button " id="button_wishlist_101000258" data-ca-dispatch="dispatch[wishlist.add..258]">Отложить</a>





                                                                    <a  class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button " href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=product_features.add_product&amp;product_id=258&amp;redirect_url=index.php" rel="nofollow" data-ca-target-id="comparison_list,account_info*,abt__unitheme_compared_products">Сравнить</a>



                                                                </div>
                                                            </div>

                                                            <div class="grid-list__rating no-rating">
                                                                <i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i>                            </div>

                                                            <div class="ty-grid-list__item-name">


                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-ep/" class="product-title" title="Наушники Beats Studio2 Wireless Over-Ear Red" >Наушники Beats Studio2 Wireless Over-Ear Red</a>


                                                            </div>

                                                            <div class="ty-grid-list__price ">
                                                            <span class="cm-reload-101000258 ty-price-update" id="price_update_101000258">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_price]" value="1" />

                                    <span class="ty-price" id="line_discounted_price_101000258"><bdi><span id="sec_discounted_price_101000258" class="ty-price-num">4&nbsp;096</span>&nbsp;<span class="ty-price-num"><span class="ty-rub">Р</span></span></bdi></span>


                                                                <!--price_update_101000258--></span>


                                                                <span class="cm-reload-101000258 ty-list-price-block" id="old_price_update_101000258">

                            <span class="ty-list-price ty-nowrap" id="line_list_price_101000258"><span class="ty-strike"><bdi><span id="sec_list_price_101000258" class="ty-list-price ty-nowrap">15&nbsp;000</span>&nbsp;<span class="ty-list-price ty-nowrap"><span class="ty-rub">Р</span></span></bdi></span></span>


                                                                    <!--old_price_update_101000258--></span>



                                                                <span class="cm-reload-101000258" id="line_discount_update_101000258">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_list_discount]" value="1" />
                        <span class="ty-list-price ty-save-price ty-nowrap   color3" id="line_discount_value_101000258"> Вы экономите: <bdi><span id="sec_discount_value_101000258">10&nbsp;904</span>&nbsp;<span class="ty-rub">Р</span></bdi></span>
                                                                    <!--line_discount_update_101000258--></span>

                                                            </div>

                                                            <div class="stock-grid ty-product-block__field-group">




                                                            </div>

                                                            <div class="ty-grid-list__control">
                                                            </div>

                                                            <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" /></form>

                                                    </div>
                                                </div>



                                                <div class="ty-scroller-list__item">







                                                    <div class="ty-grid-list__item">
                                                        <form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post" name="product_form_101000231" enctype="multipart/form-data" class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle ">
                                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__unitheme_wishlist_count" />
                                                            <input type="hidden" name="redirect_url" value="index.php" />
                                                            <input type="hidden" name="product_data[231][product_id]" value="231" />


                                                            <div class="ty-grid-list__image">



                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/sport-i-otdyh/ryukzaki/2011-tycoon/">
                                                                    <img class="ty-pict     cm-image" id="det_img_101000231"  src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/thumbnails/189/189/detailed/0/url_uploaded_file_13287872334f33af2276de4.jpg" alt=""
                                                                         title=""
                                                                    />

                                                                </a>



                                                                <span class="ty-discount-label   color3 cm-reload-101000231" id="discount_label_update_101000231">
        <span class="ty-discount-label__item" id="line_prc_discount_value_101000231"><span class="ty-discount-label__value" id="prc_discount_value_label_101000231">Скидка<br><em>63%</em></span></span>
                                                                    <!--discount_label_update_101000231--></span>


                                                                <div class="grid-list-buttons">
                                                                    <div class="ty-quick-view-button">
                                                                        <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="231" data-ca-target-id="product_quick_view" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.quick_view&amp;product_id=231&amp;prev_url=index.php&amp;n_plain=Y" data-ca-dialog-title="Быстрый просмотр товаров" rel="nofollow">Просмотр</a>
                                                                    </div>


                                                                    <a  class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button " id="button_wishlist_101000231" data-ca-dispatch="dispatch[wishlist.add..231]">Отложить</a>





                                                                    <a  class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button " href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=product_features.add_product&amp;product_id=231&amp;redirect_url=index.php" rel="nofollow" data-ca-target-id="comparison_list,account_info*,abt__unitheme_compared_products">Сравнить</a>



                                                                </div>
                                                            </div>

                                                            <div class="grid-list__rating no-rating">
                                                                <i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i>                            </div>

                                                            <div class="ty-grid-list__item-name">


                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/sport-i-otdyh/ryukzaki/2011-tycoon/" class="product-title" title="2011 Tycoon" >2011 Tycoon</a>


                                                            </div>

                                                            <div class="ty-grid-list__price ">
                                                            <span class="cm-reload-101000231 ty-price-update" id="price_update_101000231">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_price]" value="1" />

                                    <span class="ty-price" id="line_discounted_price_101000231"><bdi><span id="sec_discounted_price_101000231" class="ty-price-num">1&nbsp;275</span>&nbsp;<span class="ty-price-num"><span class="ty-rub">Р</span></span></bdi></span>


                                                                <!--price_update_101000231--></span>


                                                                <span class="cm-reload-101000231 ty-list-price-block" id="old_price_update_101000231">

                            <span class="ty-list-price ty-nowrap" id="line_list_price_101000231"><span class="ty-strike"><bdi><span id="sec_list_price_101000231" class="ty-list-price ty-nowrap">3&nbsp;465</span>&nbsp;<span class="ty-list-price ty-nowrap"><span class="ty-rub">Р</span></span></bdi></span></span>


                                                                    <!--old_price_update_101000231--></span>



                                                                <span class="cm-reload-101000231" id="line_discount_update_101000231">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_list_discount]" value="1" />
                        <span class="ty-list-price ty-save-price ty-nowrap   color3" id="line_discount_value_101000231"> Вы экономите: <bdi><span id="sec_discount_value_101000231">2&nbsp;190</span>&nbsp;<span class="ty-rub">Р</span></bdi></span>
                                                                    <!--line_discount_update_101000231--></span>

                                                            </div>

                                                            <div class="stock-grid ty-product-block__field-group">




                                                            </div>

                                                            <div class="ty-grid-list__control">
                                                            </div>

                                                            <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" /></form>

                                                    </div>
                                                </div>



                                                <div class="ty-scroller-list__item">









                                                    <div class="ty-grid-list__item">
                                                        <form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post" name="product_form_101000181" enctype="multipart/form-data" class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle ">
                                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__unitheme_wishlist_count" />
                                                            <input type="hidden" name="redirect_url" value="index.php" />
                                                            <input type="hidden" name="product_data[181][product_id]" value="181" />


                                                            <div class="ty-grid-list__image">



                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/sport-i-otdyh/golf/klyushki-dlya-golfa/nabor-dlya-igry-v-golf-bloom-dlya-zhenschin/">
                                                                    <img class="ty-pict     cm-image" id="det_img_101000181"  src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/thumbnails/189/189/detailed/0/bloom_berry_set1.jpg" alt=""
                                                                         title=""
                                                                    />

                                                                </a>



                                                                <span class="ty-discount-label   color3 cm-reload-101000181" id="discount_label_update_101000181">
        <span class="ty-discount-label__item" id="line_prc_discount_value_101000181"><span class="ty-discount-label__value" id="prc_discount_value_label_101000181">Скидка<br><em>63%</em></span></span>
                                                                    <!--discount_label_update_101000181--></span>


                                                                <div class="grid-list-buttons">
                                                                    <div class="ty-quick-view-button">
                                                                        <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="181" data-ca-target-id="product_quick_view" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.quick_view&amp;product_id=181&amp;prev_url=index.php&amp;n_plain=Y" data-ca-dialog-title="Быстрый просмотр товаров" rel="nofollow">Просмотр</a>
                                                                    </div>


                                                                    <a  class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button " id="button_wishlist_101000181" data-ca-dispatch="dispatch[wishlist.add..181]">Отложить</a>





                                                                    <a  class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button " href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=product_features.add_product&amp;product_id=181&amp;redirect_url=index.php" rel="nofollow" data-ca-target-id="comparison_list,account_info*,abt__unitheme_compared_products">Сравнить</a>



                                                                </div>
                                                            </div>

                                                            <div class="grid-list__rating no-rating">
                                                                <i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i>                            </div>

                                                            <div class="ty-grid-list__item-name">


                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/sport-i-otdyh/golf/klyushki-dlya-golfa/nabor-dlya-igry-v-golf-bloom-dlya-zhenschin/" class="product-title" title="Набор для игры в гольф Bloom (для женщин)" >Набор для игры в гольф Bloom (для женщин)</a>


                                                            </div>

                                                            <div class="ty-grid-list__price ">
                                                            <span class="cm-reload-101000181 ty-price-update" id="price_update_101000181">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_price]" value="1" />

                                    <span class="ty-price" id="line_discounted_price_101000181"><bdi><span id="sec_discounted_price_101000181" class="ty-price-num">11&nbsp;500</span>&nbsp;<span class="ty-price-num"><span class="ty-rub">Р</span></span></bdi></span>


                                                                <!--price_update_101000181--></span>


                                                                <span class="cm-reload-101000181 ty-list-price-block" id="old_price_update_101000181">

                            <span class="ty-list-price ty-nowrap" id="line_list_price_101000181"><span class="ty-strike"><bdi><span id="sec_list_price_101000181" class="ty-list-price ty-nowrap">31&nbsp;500</span>&nbsp;<span class="ty-list-price ty-nowrap"><span class="ty-rub">Р</span></span></bdi></span></span>


                                                                    <!--old_price_update_101000181--></span>



                                                                <span class="cm-reload-101000181" id="line_discount_update_101000181">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_list_discount]" value="1" />
                        <span class="ty-list-price ty-save-price ty-nowrap   color3" id="line_discount_value_101000181"> Вы экономите: <bdi><span id="sec_discount_value_101000181">20&nbsp;000</span>&nbsp;<span class="ty-rub">Р</span></bdi></span>
                                                                    <!--line_discount_update_101000181--></span>

                                                            </div>

                                                            <div class="stock-grid ty-product-block__field-group">




                                                            </div>

                                                            <div class="ty-grid-list__control">
                                                            </div>

                                                            <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" /></form>

                                                    </div>
                                                </div>



                                                <div class="ty-scroller-list__item">






                                                    <div class="ty-grid-list__item">
                                                        <form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post" name="product_form_101000260" enctype="multipart/form-data" class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle ">
                                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__unitheme_wishlist_count" />
                                                            <input type="hidden" name="redirect_url" value="index.php" />
                                                            <input type="hidden" name="product_data[260][product_id]" value="260" />


                                                            <div class="ty-grid-list__image">



                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-solo2-wireless-on-ear-space-gray/">
                                                                    <img class="ty-pict     cm-image" id="det_img_101000260"  src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/thumbnails/189/189/detailed/1/Beats-Solo2-Wireless-On-Ear-Space-Gray.650x650.jpg" alt=""
                                                                         title=""
                                                                    />

                                                                </a>



                                                                <span class="ty-discount-label   color3 cm-reload-101000260" id="discount_label_update_101000260">
        <span class="ty-discount-label__item" id="line_prc_discount_value_101000260"><span class="ty-discount-label__value" id="prc_discount_value_label_101000260">Скидка<br><em>53%</em></span></span>
                                                                    <!--discount_label_update_101000260--></span>


                                                                <div class="grid-list-buttons">
                                                                    <div class="ty-quick-view-button">
                                                                        <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="260" data-ca-target-id="product_quick_view" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.quick_view&amp;product_id=260&amp;prev_url=index.php&amp;n_plain=Y" data-ca-dialog-title="Быстрый просмотр товаров" rel="nofollow">Просмотр</a>
                                                                    </div>


                                                                    <a  class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button " id="button_wishlist_101000260" data-ca-dispatch="dispatch[wishlist.add..260]">Отложить</a>





                                                                    <a  class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button " href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=product_features.add_product&amp;product_id=260&amp;redirect_url=index.php" rel="nofollow" data-ca-target-id="comparison_list,account_info*,abt__unitheme_compared_products">Сравнить</a>



                                                                </div>
                                                            </div>

                                                            <div class="grid-list__rating">


                    <span class="ty-nowrap ty-stars">
                        <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-solo2-wireless-on-ear-space-gray/?selected_section=discussion#discussion">

            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>

            <i class="ty-stars__icon ty-icon-star-half"></i>


            </a>
    </span>






                                                                <span class="cn-comments">(3)</span>                            </div>

                                                            <div class="ty-grid-list__item-name">


                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-solo2-wireless-on-ear-space-gray/" class="product-title" title="Наушники Beats Solo2 Wireless On-Ear Space Gray" >Наушники Beats Solo2 Wireless On-Ear Space Gray</a>


                                                            </div>

                                                            <div class="ty-grid-list__price ">
                                                            <span class="cm-reload-101000260 ty-price-update" id="price_update_101000260">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_price]" value="1" />

                                    <span class="ty-price" id="line_discounted_price_101000260"><bdi><span id="sec_discounted_price_101000260" class="ty-price-num">8&nbsp;495</span>&nbsp;<span class="ty-price-num"><span class="ty-rub">Р</span></span></bdi></span>


                                                                <!--price_update_101000260--></span>


                                                                <span class="cm-reload-101000260 ty-list-price-block" id="old_price_update_101000260">

                            <span class="ty-list-price ty-nowrap" id="line_list_price_101000260"><span class="ty-strike"><bdi><span id="sec_list_price_101000260" class="ty-list-price ty-nowrap">18&nbsp;000</span>&nbsp;<span class="ty-list-price ty-nowrap"><span class="ty-rub">Р</span></span></bdi></span></span>


                                                                    <!--old_price_update_101000260--></span>



                                                                <span class="cm-reload-101000260" id="line_discount_update_101000260">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_list_discount]" value="1" />
                        <span class="ty-list-price ty-save-price ty-nowrap   color3" id="line_discount_value_101000260"> Вы экономите: <bdi><span id="sec_discount_value_101000260">9&nbsp;505</span>&nbsp;<span class="ty-rub">Р</span></bdi></span>
                                                                    <!--line_discount_update_101000260--></span>

                                                            </div>

                                                            <div class="stock-grid ty-product-block__field-group">




                                                            </div>

                                                            <div class="ty-grid-list__control">
                                                            </div>

                                                            <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" /></form>

                                                    </div>
                                                </div>



                                                <div class="ty-scroller-list__item">





                                                    <div class="ty-grid-list__item">
                                                        <form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post" name="product_form_101000230" enctype="multipart/form-data" class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle ">
                                                            <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__unitheme_wishlist_count" />
                                                            <input type="hidden" name="redirect_url" value="index.php" />
                                                            <input type="hidden" name="product_data[230][product_id]" value="230" />


                                                            <div class="ty-grid-list__image">



                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/sport-i-otdyh/ryukzaki/2011-pit-boss/">
                                                                    <img class="ty-pict     cm-image" id="det_img_101000230"  src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/thumbnails/189/189/detailed/0/url_uploaded_file_13287871234f33aeb3d0793.jpg" alt=""
                                                                         title=""
                                                                    />

                                                                </a>



                                                                <span class="ty-discount-label   color3 cm-reload-101000230" id="discount_label_update_101000230">
        <span class="ty-discount-label__item" id="line_prc_discount_value_101000230"><span class="ty-discount-label__value" id="prc_discount_value_label_101000230">Скидка<br><em>62%</em></span></span>
                                                                    <!--discount_label_update_101000230--></span>


                                                                <div class="grid-list-buttons">
                                                                    <div class="ty-quick-view-button">
                                                                        <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="230" data-ca-target-id="product_quick_view" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.quick_view&amp;product_id=230&amp;prev_url=index.php&amp;n_plain=Y" data-ca-dialog-title="Быстрый просмотр товаров" rel="nofollow">Просмотр</a>
                                                                    </div>


                                                                    <a  class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button " id="button_wishlist_101000230" data-ca-dispatch="dispatch[wishlist.add..230]">Отложить</a>





                                                                    <a  class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button " href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=product_features.add_product&amp;product_id=230&amp;redirect_url=index.php" rel="nofollow" data-ca-target-id="comparison_list,account_info*,abt__unitheme_compared_products">Сравнить</a>



                                                                </div>
                                                            </div>

                                                            <div class="grid-list__rating no-rating">
                                                                <i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i>                            </div>

                                                            <div class="ty-grid-list__item-name">


                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/sport-i-otdyh/ryukzaki/2011-pit-boss/" class="product-title" title="2011 Pit Boss" >2011 Pit Boss</a>


                                                            </div>

                                                            <div class="ty-grid-list__price ">
                                                            <span class="cm-reload-101000230 ty-price-update" id="price_update_101000230">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_price]" value="1" />

                                    <span class="ty-price" id="line_discounted_price_101000230"><bdi><span id="sec_discounted_price_101000230" class="ty-price-num">1&nbsp;675</span>&nbsp;<span class="ty-price-num"><span class="ty-rub">Р</span></span></bdi></span>


                                                                <!--price_update_101000230--></span>


                                                                <span class="cm-reload-101000230 ty-list-price-block" id="old_price_update_101000230">

                            <span class="ty-list-price ty-nowrap" id="line_list_price_101000230"><span class="ty-strike"><bdi><span id="sec_list_price_101000230" class="ty-list-price ty-nowrap">4&nbsp;375</span>&nbsp;<span class="ty-list-price ty-nowrap"><span class="ty-rub">Р</span></span></bdi></span></span>


                                                                    <!--old_price_update_101000230--></span>



                                                                <span class="cm-reload-101000230" id="line_discount_update_101000230">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_list_discount]" value="1" />
                        <span class="ty-list-price ty-save-price ty-nowrap   color3" id="line_discount_value_101000230"> Вы экономите: <bdi><span id="sec_discount_value_101000230">2&nbsp;700</span>&nbsp;<span class="ty-rub">Р</span></bdi></span>
                                                                    <!--line_discount_update_101000230--></span>

                                                            </div>

                                                            <div class="stock-grid ty-product-block__field-group">




                                                            </div>

                                                            <div class="ty-grid-list__control">
                                                            </div>

                                                            <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" /></form>

                                                    </div>
                                                </div>


                                            </div>

                                            <!-- Inline script moved to the bottom of the page -->
                                            <!-- Inline script moved to the bottom of the page -->

                                        </div><div id="content_ab__grid_tab_4437_100"><span></span></div><div id="content_ab__grid_tab_4437_102"><span></span></div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container-fluid-row container-fluid-row-full-width pd-bottom">
                    <div class="row-fluid ">								<div class="span16 ">
                            <div class="ty-mainbox-container clearfix">

                                <div class="ty-mainbox-title">

                                    Новинки в магазине


                                </div>


                                <div class="ty-mainbox-body">


                                    <!-- Inline script moved to the bottom of the page -->











                                    <div class="grid-list no-buttons">
                                        <div class="ty-column5">





                                            <div class="ty-grid-list__item"><form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post" name="product_form_87000262" enctype="multipart/form-data" class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle ">
                                                    <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__unitheme_wishlist_count" />
                                                    <input type="hidden" name="redirect_url" value="index.php" />
                                                    <input type="hidden" name="product_data[262][product_id]" value="262" />
                                                    <div class="ty-grid-body"><div class="ty-grid-list__image">


                                                            <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-by-dr.-dre-solo2-wireless-black/">
                                                                <img class="ty-pict     cm-image"   src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/thumbnails/189/189/detailed/1/Beats-by-Dr.Dre-Solo-2-Wireless-Black.650x650.jpg" alt=""
                                                                     title=""
                                                                />

                                                            </a>

                                                            <span class="ty-discount-label   color3 cm-reload-87000262" id="discount_label_update_87000262">
        <span class="ty-discount-label__item" id="line_prc_discount_value_87000262"><span class="ty-discount-label__value" id="prc_discount_value_label_87000262">Скидка<br><em>64%</em></span></span>
                                                                <!--discount_label_update_87000262--></span>
                                                            <div class="grid-list-buttons"><div class="ty-quick-view-button">
                                                                    <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="262" data-ca-target-id="product_quick_view" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.quick_view&amp;product_id=262&amp;prev_url=index.php&amp;n_plain=Y&amp;n_items=262%2C261%2C260%2C259%2C258" data-ca-dialog-title="Быстрый просмотр товаров" rel="nofollow">Просмотр</a>
                                                                </div>

                                                                <a  class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button " id="button_wishlist_87000262" data-ca-dispatch="dispatch[wishlist.add..262]">Отложить</a>




                                                                <a  class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button " href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=product_features.add_product&amp;product_id=262&amp;redirect_url=index.php" rel="nofollow" data-ca-target-id="comparison_list,account_info*,abt__unitheme_compared_products">Сравнить</a>


                                                            </div></div><div class="grid-list__rating">

                    <span class="ty-nowrap ty-stars">
                        <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-by-dr.-dre-solo2-wireless-black/?selected_section=discussion#discussion">

            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>

            <i class="ty-stars__icon ty-icon-star-half"></i>


            </a>
    </span>






                                                            <span class="cn-comments">(2)</span></div><div class="ty-grid-list__item-name"><bdi>
                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-by-dr.-dre-solo2-wireless-black/" class="product-title" title="Наушники Beats by Dr. Dre Solo2 Wireless Black" >Наушники Beats by Dr. Dre Solo2 Wireless Black</a>

                                                            </bdi></div><div class="ty-grid-list__price ">    <span class="cm-reload-87000262 ty-price-update" id="price_update_87000262">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_price]" value="1" />

                                    <span class="ty-price" id="line_discounted_price_87000262"><bdi><span id="sec_discounted_price_87000262" class="ty-price-num">8&nbsp;543</span>&nbsp;<span class="ty-price-num"><span class="ty-rub">Р</span></span></bdi></span>


                                                                <!--price_update_87000262--></span>
                                                            <span class="cm-reload-87000262 ty-list-price-block" id="old_price_update_87000262">

                            <span class="ty-list-price ty-nowrap" id="line_list_price_87000262"><span class="ty-strike"><bdi><span id="sec_list_price_87000262" class="ty-list-price ty-nowrap">24&nbsp;000</span>&nbsp;<span class="ty-list-price ty-nowrap"><span class="ty-rub">Р</span></span></bdi></span></span>


                                                                <!--old_price_update_87000262--></span>
                                                            <span class="cm-reload-87000262" id="line_discount_update_87000262">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_list_discount]" value="1" />
                        <span class="ty-list-price ty-save-price ty-nowrap   color3" id="line_discount_value_87000262"> Вы экономите: <bdi><span id="sec_discount_value_87000262">15&nbsp;457</span>&nbsp;<span class="ty-rub">Р</span></bdi></span>
                                                                <!--line_discount_update_87000262--></span>
                                                        </div><div class="stock-grid ty-product-block__field-group">


                                                        </div><div class="ty-grid-list__control"></div></div>
                                                    <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" /></form>
                                            </div></div><div class="ty-column5">




                                            <div class="ty-grid-list__item"><form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post" name="product_form_87000261" enctype="multipart/form-data" class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle ">
                                                    <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__unitheme_wishlist_count" />
                                                    <input type="hidden" name="redirect_url" value="index.php" />
                                                    <input type="hidden" name="product_data[261][product_id]" value="261" />
                                                    <div class="ty-grid-body"><div class="ty-grid-list__image">


                                                            <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-studio2-wireless-over-ear-white/">
                                                                <img class="ty-pict     cm-image"   src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/thumbnails/189/189/detailed/1/Beats-Studio2-Wireless-Over-Ear-White.650x650.jpg" alt=""
                                                                     title=""
                                                                />

                                                            </a>

                                                            <span class="ty-discount-label  color2  cm-reload-87000261" id="discount_label_update_87000261">
        <span class="ty-discount-label__item" id="line_prc_discount_value_87000261"><span class="ty-discount-label__value" id="prc_discount_value_label_87000261">Скидка<br><em>34%</em></span></span>
                                                                <!--discount_label_update_87000261--></span>
                                                            <div class="grid-list-buttons"><div class="ty-quick-view-button">
                                                                    <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="261" data-ca-target-id="product_quick_view" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.quick_view&amp;product_id=261&amp;prev_url=index.php&amp;n_plain=Y&amp;n_items=262%2C261%2C260%2C259%2C258" data-ca-dialog-title="Быстрый просмотр товаров" rel="nofollow">Просмотр</a>
                                                                </div>

                                                                <a  class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button " id="button_wishlist_87000261" data-ca-dispatch="dispatch[wishlist.add..261]">Отложить</a>




                                                                <a  class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button " href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=product_features.add_product&amp;product_id=261&amp;redirect_url=index.php" rel="nofollow" data-ca-target-id="comparison_list,account_info*,abt__unitheme_compared_products">Сравнить</a>


                                                            </div></div><div class="grid-list__rating no-rating"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></div><div class="ty-grid-list__item-name"><bdi>
                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-studio2-wireless-over-ear-white/" class="product-title" title="Наушники Beats Studio2 Wireless Over-Ear White" >Наушники Beats Studio2 Wireless Over-Ear White</a>

                                                            </bdi></div><div class="ty-grid-list__price ">    <span class="cm-reload-87000261 ty-price-update" id="price_update_87000261">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_price]" value="1" />

                                    <span class="ty-price" id="line_discounted_price_87000261"><bdi><span id="sec_discounted_price_87000261" class="ty-price-num">10&nbsp;566</span>&nbsp;<span class="ty-price-num"><span class="ty-rub">Р</span></span></bdi></span>


                                                                <!--price_update_87000261--></span>
                                                            <span class="cm-reload-87000261 ty-list-price-block" id="old_price_update_87000261">

                            <span class="ty-list-price ty-nowrap" id="line_list_price_87000261"><span class="ty-strike"><bdi><span id="sec_list_price_87000261" class="ty-list-price ty-nowrap">16&nbsp;000</span>&nbsp;<span class="ty-list-price ty-nowrap"><span class="ty-rub">Р</span></span></bdi></span></span>


                                                                <!--old_price_update_87000261--></span>
                                                            <span class="cm-reload-87000261" id="line_discount_update_87000261">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_list_discount]" value="1" />
                        <span class="ty-list-price ty-save-price ty-nowrap  color2 " id="line_discount_value_87000261"> Вы экономите: <bdi><span id="sec_discount_value_87000261">5&nbsp;434</span>&nbsp;<span class="ty-rub">Р</span></bdi></span>
                                                                <!--line_discount_update_87000261--></span>
                                                        </div><div class="stock-grid ty-product-block__field-group">


                                                        </div><div class="ty-grid-list__control"></div></div>
                                                    <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" /></form>
                                            </div></div><div class="ty-column5">



                                            <div class="ty-grid-list__item"><form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post" name="product_form_87000260" enctype="multipart/form-data" class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle ">
                                                    <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__unitheme_wishlist_count" />
                                                    <input type="hidden" name="redirect_url" value="index.php" />
                                                    <input type="hidden" name="product_data[260][product_id]" value="260" />
                                                    <div class="ty-grid-body"><div class="ty-grid-list__image">


                                                            <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-solo2-wireless-on-ear-space-gray/">
                                                                <img class="ty-pict     cm-image"   src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/thumbnails/189/189/detailed/1/Beats-Solo2-Wireless-On-Ear-Space-Gray.650x650.jpg" alt=""
                                                                     title=""
                                                                />

                                                            </a>

                                                            <span class="ty-discount-label   color3 cm-reload-87000260" id="discount_label_update_87000260">
        <span class="ty-discount-label__item" id="line_prc_discount_value_87000260"><span class="ty-discount-label__value" id="prc_discount_value_label_87000260">Скидка<br><em>53%</em></span></span>
                                                                <!--discount_label_update_87000260--></span>
                                                            <div class="grid-list-buttons"><div class="ty-quick-view-button">
                                                                    <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="260" data-ca-target-id="product_quick_view" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.quick_view&amp;product_id=260&amp;prev_url=index.php&amp;n_plain=Y&amp;n_items=262%2C261%2C260%2C259%2C258" data-ca-dialog-title="Быстрый просмотр товаров" rel="nofollow">Просмотр</a>
                                                                </div>

                                                                <a  class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button " id="button_wishlist_87000260" data-ca-dispatch="dispatch[wishlist.add..260]">Отложить</a>




                                                                <a  class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button " href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=product_features.add_product&amp;product_id=260&amp;redirect_url=index.php" rel="nofollow" data-ca-target-id="comparison_list,account_info*,abt__unitheme_compared_products">Сравнить</a>


                                                            </div></div><div class="grid-list__rating">

                    <span class="ty-nowrap ty-stars">
                        <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-solo2-wireless-on-ear-space-gray/?selected_section=discussion#discussion">

            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>

            <i class="ty-stars__icon ty-icon-star-half"></i>


            </a>
    </span>






                                                            <span class="cn-comments">(3)</span></div><div class="ty-grid-list__item-name"><bdi>
                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-solo2-wireless-on-ear-space-gray/" class="product-title" title="Наушники Beats Solo2 Wireless On-Ear Space Gray" >Наушники Beats Solo2 Wireless On-Ear Space Gray</a>

                                                            </bdi></div><div class="ty-grid-list__price ">    <span class="cm-reload-87000260 ty-price-update" id="price_update_87000260">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_price]" value="1" />

                                    <span class="ty-price" id="line_discounted_price_87000260"><bdi><span id="sec_discounted_price_87000260" class="ty-price-num">8&nbsp;495</span>&nbsp;<span class="ty-price-num"><span class="ty-rub">Р</span></span></bdi></span>


                                                                <!--price_update_87000260--></span>
                                                            <span class="cm-reload-87000260 ty-list-price-block" id="old_price_update_87000260">

                            <span class="ty-list-price ty-nowrap" id="line_list_price_87000260"><span class="ty-strike"><bdi><span id="sec_list_price_87000260" class="ty-list-price ty-nowrap">18&nbsp;000</span>&nbsp;<span class="ty-list-price ty-nowrap"><span class="ty-rub">Р</span></span></bdi></span></span>


                                                                <!--old_price_update_87000260--></span>
                                                            <span class="cm-reload-87000260" id="line_discount_update_87000260">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_list_discount]" value="1" />
                        <span class="ty-list-price ty-save-price ty-nowrap   color3" id="line_discount_value_87000260"> Вы экономите: <bdi><span id="sec_discount_value_87000260">9&nbsp;505</span>&nbsp;<span class="ty-rub">Р</span></bdi></span>
                                                                <!--line_discount_update_87000260--></span>
                                                        </div><div class="stock-grid ty-product-block__field-group">


                                                        </div><div class="ty-grid-list__control"></div></div>
                                                    <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" /></form>
                                            </div></div><div class="ty-column5">



                                            <div class="ty-grid-list__item"><form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post" name="product_form_87000259" enctype="multipart/form-data" class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle ">
                                                    <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__unitheme_wishlist_count" />
                                                    <input type="hidden" name="redirect_url" value="index.php" />
                                                    <input type="hidden" name="product_data[259][product_id]" value="259" />
                                                    <div class="ty-grid-body"><div class="ty-grid-list__image">


                                                            <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-studio-wireless-over-ear/">
                                                                <img class="ty-pict     cm-image"   src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/thumbnails/189/189/detailed/1/beats-studio-wireless-over-ear-headphones-blue-mha92-561488.jpg" alt=""
                                                                     title=""
                                                                />

                                                            </a>

                                                            <span class="ty-discount-label  color2  cm-reload-87000259" id="discount_label_update_87000259">
        <span class="ty-discount-label__item" id="line_prc_discount_value_87000259"><span class="ty-discount-label__value" id="prc_discount_value_label_87000259">Скидка<br><em>41%</em></span></span>
                                                                <!--discount_label_update_87000259--></span>
                                                            <div class="grid-list-buttons"><div class="ty-quick-view-button">
                                                                    <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="259" data-ca-target-id="product_quick_view" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.quick_view&amp;product_id=259&amp;prev_url=index.php&amp;n_plain=Y&amp;n_items=262%2C261%2C260%2C259%2C258" data-ca-dialog-title="Быстрый просмотр товаров" rel="nofollow">Просмотр</a>
                                                                </div>

                                                                <a  class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button " id="button_wishlist_87000259" data-ca-dispatch="dispatch[wishlist.add..259]">Отложить</a>




                                                                <a  class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button " href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=product_features.add_product&amp;product_id=259&amp;redirect_url=index.php" rel="nofollow" data-ca-target-id="comparison_list,account_info*,abt__unitheme_compared_products">Сравнить</a>


                                                            </div></div><div class="grid-list__rating">

                    <span class="ty-nowrap ty-stars">
                        <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-studio-wireless-over-ear/?selected_section=discussion#discussion">

            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>
            <i class="ty-stars__icon ty-icon-star"></i>

            <i class="ty-stars__icon ty-icon-star-half"></i>


            </a>
    </span>






                                                            <span class="cn-comments">(2)</span></div><div class="ty-grid-list__item-name"><bdi>
                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-studio-wireless-over-ear/" class="product-title" title="Наушники Beats Studio Wireless Over-Ear" >Наушники Beats Studio Wireless Over-Ear</a>

                                                            </bdi></div><div class="ty-grid-list__price ">    <span class="cm-reload-87000259 ty-price-update" id="price_update_87000259">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_price]" value="1" />

                                    <span class="ty-price" id="line_discounted_price_87000259"><bdi><span id="sec_discounted_price_87000259" class="ty-price-num">11&nbsp;889</span>&nbsp;<span class="ty-price-num"><span class="ty-rub">Р</span></span></bdi></span>


                                                                <!--price_update_87000259--></span>
                                                            <span class="cm-reload-87000259 ty-list-price-block" id="old_price_update_87000259">

                            <span class="ty-list-price ty-nowrap" id="line_list_price_87000259"><span class="ty-strike"><bdi><span id="sec_list_price_87000259" class="ty-list-price ty-nowrap">20&nbsp;000</span>&nbsp;<span class="ty-list-price ty-nowrap"><span class="ty-rub">Р</span></span></bdi></span></span>


                                                                <!--old_price_update_87000259--></span>
                                                            <span class="cm-reload-87000259" id="line_discount_update_87000259">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_list_discount]" value="1" />
                        <span class="ty-list-price ty-save-price ty-nowrap  color2 " id="line_discount_value_87000259"> Вы экономите: <bdi><span id="sec_discount_value_87000259">8&nbsp;111</span>&nbsp;<span class="ty-rub">Р</span></bdi></span>
                                                                <!--line_discount_update_87000259--></span>
                                                        </div><div class="stock-grid ty-product-block__field-group">


                                                        </div><div class="ty-grid-list__control"></div></div>
                                                    <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" /></form>
                                            </div></div><div class="ty-column5">



                                            <div class="ty-grid-list__item"><form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post" name="product_form_87000258" enctype="multipart/form-data" class="cm-disable-empty-files  cm-ajax cm-ajax-full-render cm-ajax-status-middle ">
                                                    <input type="hidden" name="result_ids" value="cart_status*,wish_list*,checkout*,account_info*,abt__unitheme_wishlist_count" />
                                                    <input type="hidden" name="redirect_url" value="index.php" />
                                                    <input type="hidden" name="product_data[258][product_id]" value="258" />
                                                    <div class="ty-grid-body"><div class="ty-grid-list__image">


                                                            <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-ep/">
                                                                <img class="ty-pict     cm-image"   src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/thumbnails/189/189/detailed/1/Beats-Studio2-Wireless-Over-Ear-Red.650x650.jpg" alt=""
                                                                     title=""
                                                                />

                                                            </a>

                                                            <span class="ty-discount-label   color3 cm-reload-87000258" id="discount_label_update_87000258">
        <span class="ty-discount-label__item" id="line_prc_discount_value_87000258"><span class="ty-discount-label__value" id="prc_discount_value_label_87000258">Скидка<br><em>73%</em></span></span>
                                                                <!--discount_label_update_87000258--></span>
                                                            <div class="grid-list-buttons"><div class="ty-quick-view-button">
                                                                    <a class="ty-btn ty-btn__secondary ty-btn__big cm-dialog-opener cm-dialog-auto-size" data-ca-view-id="258" data-ca-target-id="product_quick_view" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=products.quick_view&amp;product_id=258&amp;prev_url=index.php&amp;n_plain=Y&amp;n_items=262%2C261%2C260%2C259%2C258" data-ca-dialog-title="Быстрый просмотр товаров" rel="nofollow">Просмотр</a>
                                                                </div>

                                                                <a  class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button " id="button_wishlist_87000258" data-ca-dispatch="dispatch[wishlist.add..258]">Отложить</a>




                                                                <a  class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button " href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=product_features.add_product&amp;product_id=258&amp;redirect_url=index.php" rel="nofollow" data-ca-target-id="comparison_list,account_info*,abt__unitheme_compared_products">Сравнить</a>


                                                            </div></div><div class="grid-list__rating no-rating"><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i><i class="ty-icon-star-empty"></i></div><div class="ty-grid-list__item-name"><bdi>
                                                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/mp3-pleery/naushniki/naushniki-beats-ep/" class="product-title" title="Наушники Beats Studio2 Wireless Over-Ear Red" >Наушники Beats Studio2 Wireless Over-Ear Red</a>

                                                            </bdi></div><div class="ty-grid-list__price ">    <span class="cm-reload-87000258 ty-price-update" id="price_update_87000258">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_price]" value="1" />

                                    <span class="ty-price" id="line_discounted_price_87000258"><bdi><span id="sec_discounted_price_87000258" class="ty-price-num">4&nbsp;096</span>&nbsp;<span class="ty-price-num"><span class="ty-rub">Р</span></span></bdi></span>


                                                                <!--price_update_87000258--></span>
                                                            <span class="cm-reload-87000258 ty-list-price-block" id="old_price_update_87000258">

                            <span class="ty-list-price ty-nowrap" id="line_list_price_87000258"><span class="ty-strike"><bdi><span id="sec_list_price_87000258" class="ty-list-price ty-nowrap">15&nbsp;000</span>&nbsp;<span class="ty-list-price ty-nowrap"><span class="ty-rub">Р</span></span></bdi></span></span>


                                                                <!--old_price_update_87000258--></span>
                                                            <span class="cm-reload-87000258" id="line_discount_update_87000258">
        <input type="hidden" name="appearance[show_price_values]" value="1" />
        <input type="hidden" name="appearance[show_list_discount]" value="1" />
                        <span class="ty-list-price ty-save-price ty-nowrap   color3" id="line_discount_value_87000258"> Вы экономите: <bdi><span id="sec_discount_value_87000258">10&nbsp;904</span>&nbsp;<span class="ty-rub">Р</span></bdi></span>
                                                                <!--line_discount_update_87000258--></span>
                                                        </div><div class="stock-grid ty-product-block__field-group">


                                                        </div><div class="ty-grid-list__control"></div></div>
                                                    <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" /></form>
                                            </div></div>    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid-row container-fluid-row-full-width advanced-banners-grid b-top  pd-all-big small-grid">
                    <div class="row-fluid ">								<div class="span16 ">
                            <div class="row-fluid ">								<div class="span8 ">
                                    <a
                                        href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/sport-i-otdyh/"
                                        class="ab-advanced-banner ty-banner__image-item shadow light"
                                        style="background:  url('http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/bg_image/1/ut-demo-bn-4.jpg');
margin:0px 0px 10px 0px;">
                                        <div class="advanced-banner-content" style="min-height:280px">
                                            <div class="advanced-banner-block  fullwidth left" style="bottom: 0;padding:20px 20px 20px 20px;">
                                                <div class="advanced-banner-mb" >
                                                    <div class="advanced-banner-title" style="font-size: 22px">КВАДРОКОПТЕР DJI PHANTOM 4</div>
                                                    <div class="advanced-banner-text mark" style="font-size:13px;background: #000000">Новый корпус и интегрированная система сенсоров</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>




                                <div class="span4 ">
                                    <a
                                        href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/sport-i-otdyh/ryukzaki/2011-pit-boss/"
                                        class="ab-advanced-banner ty-banner__image-item shadow light"
                                        style="background:  url('http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/bg_image/1/ut-demo-bn-5-1.jpg');
margin:0px 0px 0px 0px;">
                                        <div class="advanced-banner-content" style="min-height:280px">
                                            <div class="advanced-banner-block mask fullwidth left" style="bottom: 0;padding:20px 20px 20px 20px;">
                                                <div class="advanced-banner-mb" >
                                                    <div class="advanced-banner-title" style="font-size: 22px">2011 PIT BOSS</div>
                                                    <div class="advanced-banner-text " style="font-size:13px;background: transparent">С рюкзаком Pit Boss 2011 вы сможете попробовать все зимние виды спорта</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>




                                <div class="span4 ">
                                    <a
                                        href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/foto-video/cifrovye-fotoapparaty/nikon-1-j1-two-lens-kit-krasnyy/"
                                        class="ab-advanced-banner ty-banner__image-item shadow light"
                                        style="background:  url('http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/bg_image/1/ut-demo-bn-6-4.jpg');
margin:0px 0px 0px 0px;">
                                        <div class="advanced-banner-content" style="min-height:280px">
                                            <div class="advanced-banner-block mask fullwidth left" style="bottom: 0;padding:20px 20px 20px 20px;">
                                                <div class="advanced-banner-mb" >
                                                    <div class="advanced-banner-title" style="font-size: 22px">NIKON 1 J1</div>
                                                    <div class="advanced-banner-text " style="font-size:13px;background: transparent">Не каждая фотокамера справится с динамикой современной жизни</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>



                            <div class="row-fluid ">								<div class="span4 ">
                                    <a
                                        href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/telefony/"
                                        class="ab-advanced-banner ty-banner__image-item shadow light"
                                        style="background:  url('http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/bg_image/1/ut-demo-bn-7.jpg');
margin:0px 0px 0px 0px;">
                                        <div class="advanced-banner-content" style="min-height:280px">
                                            <div class="advanced-banner-block  fullwidth left" style="bottom: 0;padding:20px 20px 20px 20px;">
                                                <div class="advanced-banner-mb" >
                                                    <div class="advanced-banner-title" style="font-size: 22px">ТЕЛЕФОНЫ</div>
                                                    <div class="advanced-banner-text mark" style="font-size:13px;background: #000000">Цены от 3 611 P.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>




                                <div class="span4 ">
                                    <a
                                        href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/igrovye-pristavki/"
                                        class="ab-advanced-banner ty-banner__image-item shadow light"
                                        style="background:  url('http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/bg_image/1/ut-demo-bn-8.jpg');
margin:0px 0px 0px 0px;">
                                        <div class="advanced-banner-content" style="min-height:280px">
                                            <div class="advanced-banner-block  fullwidth left" style="bottom: 0;padding:20px 20px 20px 20px;">
                                                <div class="advanced-banner-mb" >
                                                    <div class="advanced-banner-title" style="font-size: 22px">ИГРОВЫЕ ПРИСТАВКИ</div>
                                                    <div class="advanced-banner-text mark" style="font-size:13px;background: #000000">Окунитесь в мир консольных игр</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>




                                <div class="span8 ">
                                    <a
                                        href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/televizory-i-video/"
                                        class="ab-advanced-banner ty-banner__image-item shadow light"
                                        style="background:  url('http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/images/bg_image/1/4523465546784241324235.jpg');
margin:0px 0px 0px 0px;">
                                        <div class="advanced-banner-content" style="min-height:280px">
                                            <div class="advanced-banner-block  fullwidth left" style="bottom: 0;padding:20px 20px 20px 20px;">
                                                <div class="advanced-banner-mb" >
                                                    <div class="advanced-banner-title" style="font-size: 22px">ОЧКИ ВИРТУАЛЬНОЙ РЕАЛЬНОСТИ</div>
                                                    <div class="advanced-banner-text mark" style="font-size:13px;background: #000000">Выберите очки виртуальной реальности</div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="container-fluid-row container-fluid-row-full-width pd-top b-top">
                    <div class="row-fluid ">								<div class="span16 ">
                            <div class="ty-mainbox-container clearfix about-company-desc">

                                <div class="ty-mainbox-title">

                                    О компании


                                </div>


                                <div class="ty-mainbox-body"><div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type=""><p>Сайт, торгующий товарами в Интернете. Позволяет пользователям сформировать заказ на покупку, выбрать способ оплаты и доставки заказа в сети Интернет. Выбрав необходимые товары или услуги, пользователь обычно имеет возможность тут же на сайте выбрать метод оплаты и доставки.</p><p>Основное отличие Интернет-магазина от традиционного — в типе торговой площадки. Обычному магазину нужен торговый зал, витрины, ценники, а также продавцы, кассиры и опытные консультанты, у онлайн-магазина же вся инфраструктура реализована программно.</p></div></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid-row">
                    <div class="row-fluid ">								<div class="span16 footer-stay-connected pd-top">
                            <div class="row-fluid ">								<div class="span8 ty-grid">
                                    <div class="ty-footer-form-block no-help">
                                        <form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post" name="subscribe_form">
                                            <input type="hidden" name="redirect_url" value="index.php" />
                                            <input type="hidden" name="newsletter_format" value="2" />
                                            <div class="ty-footer-form-block__form ty-control-group with-side">
                                                <div class="ty-footer-form-block__title">Оставайтесь на связи</div>
                                                <!-- <i class="ty-icon-uni-mail"></i> --><div class="ty-uppercase ty-social-link__title">Эксклюзивные скидки<br>Подпишитесь на наши новости и получите купон на скидку 10%!</div>
                                            </div>
                                            <div class="ty-footer-form-block__input cm-block-add-subscribe">
                                                <label class="cm-required cm-email hidden" for="subscr_email110">E-mail</label>
                                                <input type="text" name="subscribe_email" id="subscr_email110" size="20" placeholder="E-mail" class="cm-hint ty-input-text-medium ty-valign-top" />


                                                <button  class="ty-btn__subscribe ty-btn__primary ty-btn" type="submit" name="dispatch[newsletters.add_subscriber]" >Подписаться</button>


                                            </div>
                                            <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" /></form>
                                    </div>
                                </div>




                                <div class="span8 ty-grid">
                                    <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type=""><div class="ty-social-link-block"><div class="ty-mainbox-title">Присоединяйтесь!</div>
                                            <div class="ty-uppercase ty-social-link__title">Вступайте к нам в группу<br>и узнавайте первыми все акции и предложения!</div>

                                            <div class="ty-social-link facebook">
                                                <a target="_blank" href="/"><i class="uni-facebook"></i></a>
                                            </div>
                                            <div class="ty-social-link vk">
                                                <a  target="_blank" href="/"><i class="uni-vk"></i></a>
                                            </div>
                                            <div class="ty-social-link twitter">
                                                <a  target="_blank" href="/"><i class="uni-twitter"></i></a>
                                            </div>
                                            <div class="ty-social-link google-plus">
                                                <a  target="_blank" href="/"><i class="uni-google-plus"></i></a>
                                            </div>
                                            <div class="ty-social-link youtube">
                                                <a  target="_blank" href="/"><i class="uni-youtube"></i></a>
                                            </div>
                                            <div class="ty-social-link linkedin">
                                                <a  target="_blank" href="/"><i class="uni-linkedin"></i></a>
                                            </div>
                                            <div class="ty-social-link telegram">
                                                <a  target="_blank" href="/"><i class="uni-telegram"></i></a>
                                            </div>
                                            <div class="ty-social-link dribbble">
                                                <a  target="_blank" href="/"><i class="uni-dribbble"></i></a>
                                            </div>

                                        </div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>








        <div class="tygh-footer clearfix" id="tygh_footer">
            <div class="container-fluid  ty-footer-grid">


                <div class="container-fluid-row container-fluid-row-full-width ty-footer-grid__full-width ty-footer-menu">
                    <div class="row-fluid ">								<div class="span16 ">
                            <div class="row-fluid ">								<div class="span4 my-account-grid">
                                    <div class="ty-footer ty-float-left">
                                        <div class="ty-footer-general__header  cm-combination" id="sw_footer-general_98">
                                            <span>Кабинет покупателя</span>
                                            <i class="ty-footer-menu__icon-open ty-icon-down-open"></i>
                                            <i class="ty-footer-menu__icon-hide ty-icon-up-open"></i>
                                        </div>
                                        <div class="ty-footer-general__body" id="footer-general_98">
                                            <ul id="account_info_links_3950" class="ty-account-info__links">
                                                <li><a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/login/">Войти</a></li>
                                                <li><a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/profiles-add/">Создать учетную запись</a></li>
                                                <li><a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/orders/">Заказы</a></li>
                                                <li><a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/wishlist/">Отложенные товары</a></li>
                                                <li><a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/compare/">Список сравнения</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>




                                <div class="span4 footer-store-grid">
                                    <div class="ty-footer footer-menu-shop ty-float-left">
                                        <div class="ty-footer-general__header  cm-combination" id="sw_footer-general_15">

                                            <span>Магазин</span>


                                            <i class="ty-footer-menu__icon-open ty-icon-down-open"></i>
                                            <i class="ty-footer-menu__icon-hide ty-icon-up-open"></i>
                                        </div>
                                        <div class="ty-footer-general__body" id="footer-general_15">



                                            <ul id="text_links_3951" class="ty-text-links">
                                                <li class="ty-text-links__item ty-level-0">
                                                    <a class="ty-text-links__a" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/o-kompanii/">О компании</a>
                                                </li>
                                                <li class="ty-text-links__item ty-level-0">
                                                    <a class="ty-text-links__a" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/blog/">Блог магазина</a>
                                                </li>
                                                <li class="ty-text-links__item ty-level-0">
                                                    <a class="ty-text-links__a" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=discussion.view&amp;thread_id=26">Отзывы покупателей</a>
                                                </li>
                                                <li class="ty-text-links__item ty-level-0">
                                                    <a class="ty-text-links__a" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/bonusnye-bally/">Бонусные баллы</a>
                                                </li>
                                                <li class="ty-text-links__item ty-level-0">
                                                    <a class="ty-text-links__a" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/podarochnye-sertifikaty/">Подарочные сертификаты</a>
                                                </li>
                                                <li class="ty-text-links__item ty-level-0">
                                                    <a class="ty-text-links__a" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/sitemap/">Карта сайта</a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>




                                <div class="span4 customer-service-grid">
                                    <div class="ty-footer footer-menu-create-orders ty-float-left">
                                        <div class="ty-footer-general__header  cm-combination" id="sw_footer-general_16">

                                            <span>Оформление заказа</span>


                                            <i class="ty-footer-menu__icon-open ty-icon-down-open"></i>
                                            <i class="ty-footer-menu__icon-hide ty-icon-up-open"></i>
                                        </div>
                                        <div class="ty-footer-general__body" id="footer-general_16">



                                            <ul id="text_links_3952" class="ty-text-links">
                                                <li class="ty-text-links__item ty-level-0">
                                                    <a class="ty-text-links__a" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/oplata-i-dostavka/">Доставка и оплата</a>
                                                </li>
                                                <li class="ty-text-links__item ty-level-0">
                                                    <a class="ty-text-links__a" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/vozvrat/">Возврат</a>
                                                </li>
                                                <li class="ty-text-links__item ty-level-0">
                                                    <a class="ty-text-links__a" href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=pickup.view">Пункты самовывоза</a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>




                                <div class="span4 about-grid">
                                    <div class="ty-footer footer-no-wysiwyg footer-contacts ty-float-left">
                                        <div class="ty-footer-general__header  cm-combination" id="sw_footer-general_17">
                                            <span>Контакты</span>
                                            <i class="ty-footer-menu__icon-open ty-icon-down-open"></i>
                                            <i class="ty-footer-menu__icon-hide ty-icon-up-open"></i>
                                        </div>
                                        <div class="ty-footer-general__body" id="footer-general_17"><div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                                                <ul>
                                                    <li>г. Москва, ул. 1-я Дубровская, д.1, офис 100</li>
                                                    <li>8-800-000-00-00 (звонок бесплатный)</li>
                                                    <li>Пн-Пт 9.00 - 18.00</li>
                                                    <li><a class="ty-exception__links-a greeny" href="mailto:sales@demostore.ru">sales@demostore.ru</a></li>
                                                    <li><a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/kontakty/" class="ty-exception__links-a">Посмотреть на карте</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid-row container-fluid-row-full-width ty-footer-grid__full-width footer-copyright">
                    <div class="row-fluid ">
                        <div class="span16 ">
                            <div class="row-fluid ">
                                <div class="span8 ">
                                    <div class="ty-float-left">
                                        <p class="bottom-copyright">&copy; 2004-2018 Simtech. &nbsp;На базе премиум шаблона - <a href="https://cs-cart.alexbranding.com/ru/shablon-unitheme.html" rel="nofollow" onclick="window.open(this.href); return false">© UniTheme</a></p>
                                    </div>
                                </div>



                                <div class="span8 ">
                                    <div class=" ty-float-right">

                                        <div class="ty-payment-icons">

                                            <span class="ty-payment-icons__item yandex">&nbsp;</span>
                                            <span class="ty-payment-icons__item visa">&nbsp;</span>
                                            <span class="ty-payment-icons__item mastercard">&nbsp;</span>
                                            <span class="ty-payment-icons__item qiwi">&nbsp;</span>
                                            <span class="ty-payment-icons__item paypal">&nbsp;</span>


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






<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" data-no-defer></script>

<script type="text/javascript" src="<?= Yii::getAlias('@web/js/tygh.js') ?>"></script>
<script type="text/javascript">
    (function(_, $) {

        _.tr({
            cannot_buy: 'Невозможно купить этот товар с выбранными вариантами опций',
            no_products_selected: 'Товары не выбраны',
            error_no_items_selected: 'Нет выбранных элементов! Для выполнения этого действия должен быть выбран хотя бы один элемент.',
            delete_confirmation: 'Вы уверены, что хотите удалить выбранные записи?',
            text_out_of_stock: 'Нет в наличии',
            items: 'шт.',
            text_required_group_product: 'Пожалуйста, выберите товар для указанной группы [group_name]',
            save: 'Сохранить',
            close: 'Закрыть',
            notice: 'Оповещение',
            warning: 'Предупреждение',
            error: 'Ошибка',
            empty: 'Пусто',
            text_are_you_sure_to_proceed: 'Вы уверены, что хотите продолжить?',
            text_invalid_url: 'Вы ввели неправильную ссылку',
            error_validator_email: 'Email в поле <b>[field]<\/b> неверен.',
            error_validator_phone: 'Неверный номер телефона в поле <b>[field]<\/b>. Правильный формат: (555) 555-55-55.',
            error_validator_integer: 'Значение поля <b>[field]<\/b> неправильное. Значение должно быть целым числом.',
            error_validator_multiple: 'Поле <b>[field]<\/b> не имеет выбранных параметров.',
            error_validator_password: 'Пароли в полях <b>[field2]<\/b> и <b>[field]<\/b> не совпадают.',
            error_validator_required: 'Поле <b>[field]<\/b> обязательное.',
            error_validator_zipcode: 'Неверный почтовый индекс в поле <b>[field]<\/b>. Правильный формат: [extra].',
            error_validator_message: 'Значение поля <b>[field]<\/b> - неправильно.',
            text_page_loading: 'Загрузка... ваш запрос выполняется, пожалуйста, подождите.',
            error_ajax: 'Ой, произошла ошибка ([error]). Пожалуйста, попробуйте еще раз.',
            text_changes_not_saved: 'Сделанные изменения не были сохранены.',
            text_data_changed: 'Сделанные изменения не были сохранены.Нажмите OK, чтобы продолжить, или Cancel, чтобы остаться на странице.',
            placing_order: 'Идет размещение заказа',
            file_browser: 'Найти файл',
            browse: 'Найти...',
            more: 'Еще',
            text_no_products_found: 'Товары не найдены',
            cookie_is_disabled: 'Для совершения покупок пожалуйста, <a href=\"http://www.wikihow.com/Enable-Cookies-in-Your-Internet-Web-Browser\" target=\"_blank\">разрешите принимать cookie<\/a> в своем браузере',
            insert_image: 'Добавить изображение',
            image_url: 'URL изображения'
        });

        $.extend(_, {
            index_script: 'index.php',
            changes_warning: /*'Y'*/'N',
            currencies: {
                'primary': {
                    'decimals_separator': '.',
                    'thousands_separator': '&nbsp;',
                    'decimals': '0'
                },
                'secondary': {
                    'decimals_separator': '.',
                    'thousands_separator': '&nbsp;',
                    'decimals': '0',
                    'coefficient': '1.00000'
                }
            },
            default_editor: 'redactor',
            default_previewer: 'magnific',
            current_path: '/stores/8ae4a590ed09f99f',
            current_location: 'http://demo.cs-cart.ru/stores/8ae4a590ed09f99f',
            images_dir: 'http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/design/themes/responsive/media/images',
            notice_displaying_time: 5,
            cart_language: 'ru',
            language_direction: 'ltr',
            default_language: 'ru',
            cart_prices_w_taxes: false,
            theme_name: 'abt__unitheme',
            regexp: [],
            current_url: 'http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/',
            current_host: 'demo.cs-cart.ru',
            init_context: ''
        });



        $(document).ready(function(){
            $.runCart('C');
        });


        // CSRF form protection key
        _.security_hash = '2198a5b676ffd4e8f8299c6a7007a82f';
    }(Tygh, Tygh.$));
</script>
<script type="text/javascript">
    (function(_, $) {
        $.extend(_, {
            abt__unitheme: {"hide_product_description":{"name":"hide_product_description","type":"input","position":100,"value":"250","multilanguage":"N"},"hide_feature_descriptions":{"name":"hide_feature_descriptions","type":"input","position":200,"value":"250","multilanguage":"N"},"show_short_desc_in_multicolumns_list":{"name":"show_short_desc_in_multicolumns_list","type":"checkbox","position":300,"value":"N","multilanguage":"N"},"hide_short_features_in_product_list":{"name":"hide_short_features_in_product_list","type":"checkbox","position":400,"value":"N","multilanguage":"N"},"show_short_desc_in_product":{"name":"show_short_desc_in_product","type":"checkbox","position":500,"value":"N","multilanguage":"N"},"show_features_in_product":{"name":"show_features_in_product","type":"checkbox","position":600,"value":"Y","multilanguage":"N"},"show_block_in_product":{"name":"show_block_in_product","type":"input","position":700,"value":"118","multilanguage":"N"},"show_button_buy_in_product_lists":{"name":"show_button_buy_in_product_lists","type":"checkbox","position":800,"value":"Y","multilanguage":"N"},"hide_subcategories_in_category":{"name":"hide_subcategories_in_category","type":"checkbox","position":900,"value":"Y","multilanguage":"N"}},
        });
    }(Tygh, Tygh.$));
</script>
<script type="text/javascript">

    function fn_abt_timer_menu (){
        var timer, timer2, opened_menu = null, opened_menu2 = null, second_lvl;
        $('.first-lvl').hover(function () {
            var elem = $(this).children('.ty-menu__submenu');
            clearTimeout(timer);
            timer = setTimeout(function () {
                if (opened_menu !== null) {
                    opened_menu.hide();
                    opened_menu = null;
                }
                opened_menu = elem.show();
            }, 200);
        });
        $('.hover-zone').mouseleave(function () {
            clearTimeout(timer);
            if (opened_menu !== null) {
                opened_menu.hide();
                opened_menu = null;
            }
        });

        $('.second-lvl').hover(function () {
            second_lvl = $(this);
            var elem = $(this).children('.ty-menu__submenu');
            clearTimeout(timer2);
            timer2 = setTimeout(function () {
                if (opened_menu2 !== null) {
                    second_lvl.removeClass('hover2');
                    opened_menu2 = null;
                }
                $('.second-lvl').removeClass('hover2');
                second_lvl.addClass('hover2');
            }, 200);
        });
        $('.hover-zone2').mouseleave(function () {
            clearTimeout(timer2);
            $('.second-lvl').removeClass('hover2');
            if (opened_menu2 !== null) {
                opened_menu2.hide();
                $('.second-lvl').removeClass('hover2');
                opened_menu2 = null;
            }
        });
    }




    (function(_, $) {
        $(document).ready(function () {
            var abtam = $('div.abtam');
            if (abtam.length){
                var ids = [];
                abtam.each(function(){
                    ids.push($(this).attr('id'));
                });

                $.ceAjax('request', fn_url('abt__am.load'), {
                    result_ids: ids.join(','),
                    method: 'post',
                    hidden: true,
                    callback: function(data) {
                        fn_abt_timer_menu();
                        $(document).on('click', 'li.second-lvl > a.cm-responsive-menu-toggle', function () {
                            $(this).toggleClass('ty-menu__item-toggle-active');
                            $('.icon-down-open', this).toggleClass('icon-up-open');
                            $(this).parent().find('.cm-responsive-menu-submenu').first().toggleClass('ty-menu__items-show');
                        });
                    }
                });
            }
        });
    }(Tygh, Tygh.$));


</script>
<script type="text/javascript">
    (function(_, $) {
        $(document).ready(function () {
            var h1 =  160;
            var h2 =  300;

            var m = $('.hpo-menu');
            var b = $('.hpo-banner');
            if (m.length){
                var m_offset = m.offset();
                var m_height = m.find('.ty-dropdown-box__title').outerHeight(true) + m.find('.ty-dropdown-box__content').outerHeight(true);
                if (parseInt(b.parent().outerHeight(true)) > parseInt(m_height)){
                    m_height = parseInt(b.parent().outerHeight(true));
                }

                var m_h = parseInt(m_offset.top) + parseInt(m_height);

                h1 = m_h;
                h2 = m_h + m.find('.ty-dropdown-box__title').outerHeight(true);
            }

            $(window).scroll(function () {
                var scroll = $(window).scrollTop();

                if (document.documentElement.clientWidth > 767) {
                    if (scroll >= h1) {
                        $("body").addClass("fixed-top");
                    } else {
                        $("body").removeClass("fixed-top");
                    }
                    if (scroll >= h2) {
                        $(".fixed-top").addClass("show");
                    } else {
                        $(".fixed-top").removeClass("show");
                    }



                    if (m.length){
                        if (scroll >= m_h) {
                            m.removeClass('open-menu');
                            b.removeClass('open-menu-hpage-banners');
                        } else {
                            m.addClass('open-menu');
                            b.addClass('open-menu-hpage-banners');
                        }
                    }


                } else {
                    if (scroll >= 88) {
                        $("body").addClass("fixed-top show");
                    } else {
                        $("body").removeClass("fixed-top show");
                    }
                }

                if (document.documentElement.clientWidth < 768) {
                    var wh = $(window).height() - 47;
                    var awh = $(window).height();
                    if (scroll >= 160) {
                        $(".cat-menu-vertical .ty-dropdown-box__content").css('height', +wh + 'px');
                        $(".cat-menu-horizontal > .ty-menu__items.open").css('height', +awh + 'px');
                    } else {
                        $(".cat-menu-vertical .ty-dropdown-box__content").css('height', 'inherit');
                        $(".cat-menu-horizontal > .ty-menu__items").css('height', 'inherit');
                    }
                }
            });
        });
    }(Tygh, Tygh.$));

</script>
<script type="text/javascript">
    if (document.documentElement.clientWidth >= 768) {

        if ($('.cat-menu-vertical .ty-dropdown-box__title').hasClass('open')) {
            $('.cat-menu-vertical .ty-menu__items').removeClass('hover-zone');
        } else {
            $('.cat-menu-vertical .ty-menu__items').addClass('hover-zone');
            $('.hover-zone').hover(
                function () {
                    $('body').addClass('shadow')
                },
                function () {
                    $('body').removeClass('shadow')
                }
            );
        }

        (function (_, $) {
            $(document).ready(function () {

                if ($('div.abtam').length == 0){
                    fn_abt_timer_menu();
                }
            });
        })(Tygh, Tygh.$)
    }
</script>
<script type="text/javascript">
    function ShowSearch() {
        $(".search-block-grid").addClass("show");
        $(".close-button-mobile").removeClass("hidden");
        $(".adv-search-block-grid").addClass("show");
        $(".adv-cart-content-grid").addClass("hidden");
    };
    function HideSearch() {
        $(".search-block-grid").removeClass("show");
        $(".close-button-mobile").addClass("hidden");
        $(".adv-search-block-grid").removeClass("show");
        $(".adv-cart-content-grid").removeClass("hidden");
    };
</script>
<script type="text/javascript">
    (function (_, $) {
        $(document).ready(function () {
            var desc = $('div#content_features');
            var desc_div = $('div#content_features > div');
            if (desc_div.length) {
                var fh = desc_div.outerHeight();


                if (desc.hasClass('hidden')){
                    desc.removeClass('hidden');
                    fh = desc_div.outerHeight();
                    desc.addClass('hidden');
                }

                if (parseInt(_.abt__unitheme.hide_feature_descriptions.value) > 0 && parseInt(fh) > parseInt(_.abt__unitheme.hide_feature_descriptions.value)) {
                    desc_div.addClass('hp_features').css('max-height', _.abt__unitheme.hide_feature_descriptions.value + "px");
                    $("<a class='hpf_more'>" + "Еще" + "</a>").appendTo(desc);
                }
            }
        });
    })(Tygh, Tygh.$)

    $(document).on('click', 'a.hpf_more', function () {
        $('a.hpf_more').remove();
        $('div#content_features > div').removeClass('hp_features').css('max-height', '');
    });
</script>
<script type="text/javascript">
    (function (_, $) {
        $(document).ready(function () {
            var desc = $('div#content_description');
            var desc_div = $('div#content_description > div');
            if (desc_div.length) {
                var fh = desc_div.outerHeight();
                if (parseInt(_.abt__unitheme.hide_product_description.value) > 0 && parseInt(fh) > parseInt(_.abt__unitheme.hide_product_description.value)) {
                    desc_div.addClass('hp_description').css('max-height', _.abt__unitheme.hide_product_description.value + "px");
                    $("<a class='hpd_more'>" + "Еще" + "</a>").appendTo(desc);
                }
            }
        });
    })(Tygh, Tygh.$)

    $(document).on('click', 'a.hpd_more', function () {
        $('a.hpd_more').remove();
        $('div#content_description > div').removeClass('hp_description').css('max-height', '');
    });
</script>
<script type="text/javascript">
    (function ($) {
        $(document).ready(function () {

            $(document).on('click', '.cat-menu-vertical .ty-mainbox-title', function () {
                $('.cat-menu-vertical .ty-mainbox-body').toggleClass('view');
                $('.cat-menu-vertical .ty-mainbox-title').toggleClass('open');
            });

            $(document).on('click', '.cat-product-filters .ty-mainbox-title', function () {
                $('.cat-product-filters .ty-mainbox-body').toggleClass('view');
                $('.cat-product-filters .ty-mainbox-title').toggleClass('open');
            });

            $(document).on('click', '.cat-product-filters .ty-product-filters__close-button', function () {
                $('.cat-product-filters .ty-mainbox-title').trigger('click');
            });

        });
    })(jQuery);
</script>
<script type="text/javascript">(function(_, $) {$.extend(_, {ab__dotd: {current_dispatch: 'index.index',max_height: '250',more: 'Больше',less: 'Меньше',}});}(Tygh, Tygh.$));</script>
<script type="text/javascript">(function(_, $) {$.extend(_, {ab__sst: {position: 'bottom_right',icon: 'arrow_10',margin_top: '0',margin_right: '10',margin_bottom: '10',margin_left: '0',font_size: '36',font_weight: 'normal',color: '#999999',}});}(Tygh, Tygh.$));</script>
<script type="text/javascript">
    (function(_, $) {
        _.call_requests_phone_masks_list = [
            { "mask": "+247-####", "cc": "AC", "name_en": "Ascension", "desc_en": "", "name_ru": "Остров Вознесения", "desc_ru": "" },
            { "mask": "+376-###-###", "cc": "AD", "name_en": "Andorra", "desc_en": "", "name_ru": "Андорра", "desc_ru": "" },
            { "mask": "+971-5#-###-####", "cc": "AE", "name_en": "United Arab Emirates", "desc_en": "mobile", "name_ru": "Объединенные Арабские Эмираты", "desc_ru": "мобильные" },
            { "mask": "+971-#-###-####", "cc": "AE", "name_en": "United Arab Emirates", "desc_en": "", "name_ru": "Объединенные Арабские Эмираты", "desc_ru": "" },
            { "mask": "+93-##-###-####", "cc": "AF", "name_en": "Afghanistan", "desc_en": "", "name_ru": "Афганистан", "desc_ru": "" },
            { "mask": "+1(268)###-####", "cc": "AG", "name_en": "Antigua & Barbuda", "desc_en": "", "name_ru": "Антигуа и Барбуда", "desc_ru": "" },
            { "mask": "+1(264)###-####", "cc": "AI", "name_en": "Anguilla", "desc_en": "", "name_ru": "Ангилья", "desc_ru": "" },
            { "mask": "+355(###)###-###", "cc": "AL", "name_en": "Albania", "desc_en": "", "name_ru": "Албания", "desc_ru": "" },
            { "mask": "+374-##-###-###", "cc": "AM", "name_en": "Armenia", "desc_en": "", "name_ru": "Армения", "desc_ru": "" },
            { "mask": "+599-###-####", "cc": "AN", "name_en": "Caribbean Netherlands", "desc_en": "", "name_ru": "Карибские Нидерланды", "desc_ru": "" },
            { "mask": "+599-###-####", "cc": "AN", "name_en": "Netherlands Antilles", "desc_en": "", "name_ru": "Нидерландские Антильские острова", "desc_ru": "" },
            { "mask": "+599-9###-####", "cc": "AN", "name_en": "Netherlands Antilles", "desc_en": "Curacao", "name_ru": "Нидерландские Антильские острова", "desc_ru": "Кюрасао" },
            { "mask": "+244(###)###-###", "cc": "AO", "name_en": "Angola", "desc_en": "", "name_ru": "Ангола", "desc_ru": "" },
            { "mask": "+672-1##-###", "cc": "AQ", "name_en": "Australian bases in Antarctica", "desc_en": "", "name_ru": "Австралийская антарктическая база", "desc_ru": "" },
            { "mask": "+54(###)###-####", "cc": "AR", "name_en": "Argentina", "desc_en": "", "name_ru": "Аргентина", "desc_ru": "" },
            { "mask": "+1(684)###-####", "cc": "AS", "name_en": "American Samoa", "desc_en": "", "name_ru": "Американское Самоа", "desc_ru": "" },
            { "mask": "+43(###)###-####", "cc": "AT", "name_en": "Austria", "desc_en": "", "name_ru": "Австрия", "desc_ru": "" },
            { "mask": "+61-#-####-####", "cc": "AU", "name_en": "Australia", "desc_en": "", "name_ru": "Австралия", "desc_ru": "" },
            { "mask": "+297-###-####", "cc": "AW", "name_en": "Aruba", "desc_en": "", "name_ru": "Аруба", "desc_ru": "" },
            { "mask": "+994-##-###-##-##", "cc": "AZ", "name_en": "Azerbaijan", "desc_en": "", "name_ru": "Азербайджан", "desc_ru": "" },
            { "mask": "+387-##-#####", "cc": "BA", "name_en": "Bosnia and Herzegovina", "desc_en": "", "name_ru": "Босния и Герцеговина", "desc_ru": "" },
            { "mask": "+387-##-####", "cc": "BA", "name_en": "Bosnia and Herzegovina", "desc_en": "", "name_ru": "Босния и Герцеговина", "desc_ru": "" },
            { "mask": "+1(246)###-####", "cc": "BB", "name_en": "Barbados", "desc_en": "", "name_ru": "Барбадос", "desc_ru": "" },
            { "mask": "+880-##-###-###", "cc": "BD", "name_en": "Bangladesh", "desc_en": "", "name_ru": "Бангладеш", "desc_ru": "" },
            { "mask": "+32(###)###-###", "cc": "BE", "name_en": "Belgium", "desc_en": "", "name_ru": "Бельгия", "desc_ru": "" },
            { "mask": "+226-##-##-####", "cc": "BF", "name_en": "Burkina Faso", "desc_en": "", "name_ru": "Буркина Фасо", "desc_ru": "" },
            { "mask": "+359(###)###-###", "cc": "BG", "name_en": "Bulgaria", "desc_en": "", "name_ru": "Болгария", "desc_ru": "" },
            { "mask": "+973-####-####", "cc": "BH", "name_en": "Bahrain", "desc_en": "", "name_ru": "Бахрейн", "desc_ru": "" },
            { "mask": "+257-##-##-####", "cc": "BI", "name_en": "Burundi", "desc_en": "", "name_ru": "Бурунди", "desc_ru": "" },
            { "mask": "+229-##-##-####", "cc": "BJ", "name_en": "Benin", "desc_en": "", "name_ru": "Бенин", "desc_ru": "" },
            { "mask": "+1(441)###-####", "cc": "BM", "name_en": "Bermuda", "desc_en": "", "name_ru": "Бермудские острова", "desc_ru": "" },
            { "mask": "+673-###-####", "cc": "BN", "name_en": "Brunei Darussalam", "desc_en": "", "name_ru": "Бруней-Даруссалам", "desc_ru": "" },
            { "mask": "+591-#-###-####", "cc": "BO", "name_en": "Bolivia", "desc_en": "", "name_ru": "Боливия", "desc_ru": "" },
            { "mask": "+55-##-####-####", "cc": "BR", "name_en": "Brazil", "desc_en": "", "name_ru": "Бразилия", "desc_ru": "" },
            { "mask": "+1(242)###-####", "cc": "BS", "name_en": "Bahamas", "desc_en": "", "name_ru": "Багамские Острова", "desc_ru": "" },
            { "mask": "+975-17-###-###", "cc": "BT", "name_en": "Bhutan", "desc_en": "", "name_ru": "Бутан", "desc_ru": "" },
            { "mask": "+975-#-###-###", "cc": "BT", "name_en": "Bhutan", "desc_en": "", "name_ru": "Бутан", "desc_ru": "" },
            { "mask": "+267-##-###-###", "cc": "BW", "name_en": "Botswana", "desc_en": "", "name_ru": "Ботсвана", "desc_ru": "" },
            { "mask": "+375(##)###-##-##", "cc": "BY", "name_en": "Belarus", "desc_en": "", "name_ru": "Беларусь (Белоруссия)", "desc_ru": "" },
            { "mask": "+501-###-####", "cc": "BZ", "name_en": "Belize", "desc_en": "", "name_ru": "Белиз", "desc_ru": "" },
            { "mask": "+243(###)###-###", "cc": "CD", "name_en": "Dem. Rep. Congo", "desc_en": "", "name_ru": "Дем. Респ. Конго (Киншаса)", "desc_ru": "" },
            { "mask": "+236-##-##-####", "cc": "CF", "name_en": "Central African Republic", "desc_en": "", "name_ru": "Центральноафриканская Республика", "desc_ru": "" },
            { "mask": "+242-##-###-####", "cc": "CG", "name_en": "Congo (Brazzaville)", "desc_en": "", "name_ru": "Конго (Браззавиль)", "desc_ru": "" },
            { "mask": "+41-##-###-####", "cc": "CH", "name_en": "Switzerland", "desc_en": "", "name_ru": "Швейцария", "desc_ru": "" },
            { "mask": "+225-##-###-###", "cc": "CI", "name_en": "Cote d’Ivoire (Ivory Coast)", "desc_en": "", "name_ru": "Кот-д’Ивуар", "desc_ru": "" },
            { "mask": "+682-##-###", "cc": "CK", "name_en": "Cook Islands", "desc_en": "", "name_ru": "Острова Кука", "desc_ru": "" },
            { "mask": "+56-#-####-####", "cc": "CL", "name_en": "Chile", "desc_en": "", "name_ru": "Чили", "desc_ru": "" },
            { "mask": "+237-####-####", "cc": "CM", "name_en": "Cameroon", "desc_en": "", "name_ru": "Камерун", "desc_ru": "" },
            { "mask": "+86(###)####-####", "cc": "CN", "name_en": "China (PRC)", "desc_en": "", "name_ru": "Китайская Н.Р.", "desc_ru": "" },
            { "mask": "+86(###)####-###", "cc": "CN", "name_en": "China (PRC)", "desc_en": "", "name_ru": "Китайская Н.Р.", "desc_ru": "" },
            { "mask": "+86-##-#####-#####", "cc": "CN", "name_en": "China (PRC)", "desc_en": "", "name_ru": "Китайская Н.Р.", "desc_ru": "" },
            { "mask": "+57(###)###-####", "cc": "CO", "name_en": "Colombia", "desc_en": "", "name_ru": "Колумбия", "desc_ru": "" },
            { "mask": "+506-####-####", "cc": "CR", "name_en": "Costa Rica", "desc_en": "", "name_ru": "Коста-Рика", "desc_ru": "" },
            { "mask": "+53-#-###-####", "cc": "CU", "name_en": "Cuba", "desc_en": "", "name_ru": "Куба", "desc_ru": "" },
            { "mask": "+238(###)##-##", "cc": "CV", "name_en": "Cape Verde", "desc_en": "", "name_ru": "Кабо-Верде", "desc_ru": "" },
            { "mask": "+599-###-####", "cc": "CW", "name_en": "Curacao", "desc_en": "", "name_ru": "Кюрасао", "desc_ru": "" },
            { "mask": "+357-##-###-###", "cc": "CY", "name_en": "Cyprus", "desc_en": "", "name_ru": "Кипр", "desc_ru": "" },
            { "mask": "+420(###)###-###", "cc": "CZ", "name_en": "Czech Republic", "desc_en": "", "name_ru": "Чехия", "desc_ru": "" },
            { "mask": "+49(####)###-####", "cc": "DE", "name_en": "Germany", "desc_en": "", "name_ru": "Германия", "desc_ru": "" },
            { "mask": "+49(###)###-####", "cc": "DE", "name_en": "Germany", "desc_en": "", "name_ru": "Германия", "desc_ru": "" },
            { "mask": "+49(###)##-####", "cc": "DE", "name_en": "Germany", "desc_en": "", "name_ru": "Германия", "desc_ru": "" },
            { "mask": "+49(###)##-###", "cc": "DE", "name_en": "Germany", "desc_en": "", "name_ru": "Германия", "desc_ru": "" },
            { "mask": "+49(###)##-##", "cc": "DE", "name_en": "Germany", "desc_en": "", "name_ru": "Германия", "desc_ru": "" },
            { "mask": "+49-###-###", "cc": "DE", "name_en": "Germany", "desc_en": "", "name_ru": "Германия", "desc_ru": "" },
            { "mask": "+253-##-##-##-##", "cc": "DJ", "name_en": "Djibouti", "desc_en": "", "name_ru": "Джибути", "desc_ru": "" },
            { "mask": "+45-##-##-##-##", "cc": "DK", "name_en": "Denmark", "desc_en": "", "name_ru": "Дания", "desc_ru": "" },
            { "mask": "+1(767)###-####", "cc": "DM", "name_en": "Dominica", "desc_en": "", "name_ru": "Доминика", "desc_ru": "" },
            { "mask": "+1(809)###-####", "cc": "DO", "name_en": "Dominican Republic", "desc_en": "", "name_ru": "Доминиканская Республика", "desc_ru": "" },
            { "mask": "+1(829)###-####", "cc": "DO", "name_en": "Dominican Republic", "desc_en": "", "name_ru": "Доминиканская Республика", "desc_ru": "" },
            { "mask": "+1(849)###-####", "cc": "DO", "name_en": "Dominican Republic", "desc_en": "", "name_ru": "Доминиканская Республика", "desc_ru": "" },
            { "mask": "+213-##-###-####", "cc": "DZ", "name_en": "Algeria", "desc_en": "", "name_ru": "Алжир", "desc_ru": "" },
            { "mask": "+593-##-###-####", "cc": "EC", "name_en": "Ecuador ", "desc_en": "mobile", "name_ru": "Эквадор ", "desc_ru": "мобильные" },
            { "mask": "+593-#-###-####", "cc": "EC", "name_en": "Ecuador", "desc_en": "", "name_ru": "Эквадор", "desc_ru": "" },
            { "mask": "+372-####-####", "cc": "EE", "name_en": "Estonia ", "desc_en": "mobile", "name_ru": "Эстония ", "desc_ru": "мобильные" },
            { "mask": "+372-###-####", "cc": "EE", "name_en": "Estonia", "desc_en": "", "name_ru": "Эстония", "desc_ru": "" },
            { "mask": "+20(###)###-####", "cc": "EG", "name_en": "Egypt", "desc_en": "", "name_ru": "Египет", "desc_ru": "" },
            { "mask": "+291-#-###-###", "cc": "ER", "name_en": "Eritrea", "desc_en": "", "name_ru": "Эритрея", "desc_ru": "" },
            { "mask": "+34(###)###-###", "cc": "ES", "name_en": "Spain", "desc_en": "", "name_ru": "Испания", "desc_ru": "" },
            { "mask": "+251-##-###-####", "cc": "ET", "name_en": "Ethiopia", "desc_en": "", "name_ru": "Эфиопия", "desc_ru": "" },
            { "mask": "+358(###)###-##-##", "cc": "FI", "name_en": "Finland", "desc_en": "", "name_ru": "Финляндия", "desc_ru": "" },
            { "mask": "+679-##-#####", "cc": "FJ", "name_en": "Fiji", "desc_en": "", "name_ru": "Фиджи", "desc_ru": "" },
            { "mask": "+500-#####", "cc": "FK", "name_en": "Falkland Islands", "desc_en": "", "name_ru": "Фолклендские острова", "desc_ru": "" },
            { "mask": "+691-###-####", "cc": "FM", "name_en": "F.S. Micronesia", "desc_en": "", "name_ru": "Ф.Ш. Микронезии", "desc_ru": "" },
            { "mask": "+298-###-###", "cc": "FO", "name_en": "Faroe Islands", "desc_en": "", "name_ru": "Фарерские острова", "desc_ru": "" },
            { "mask": "+262-#####-####", "cc": "FR", "name_en": "Mayotte", "desc_en": "", "name_ru": "Майотта", "desc_ru": "" },
            { "mask": "+33(###)###-###", "cc": "FR", "name_en": "France", "desc_en": "", "name_ru": "Франция", "desc_ru": "" },
            { "mask": "+508-##-####", "cc": "FR", "name_en": "St Pierre & Miquelon", "desc_en": "", "name_ru": "Сен-Пьер и Микелон", "desc_ru": "" },
            { "mask": "+590(###)###-###", "cc": "FR", "name_en": "Guadeloupe", "desc_en": "", "name_ru": "Гваделупа", "desc_ru": "" },
            { "mask": "+241-#-##-##-##", "cc": "GA", "name_en": "Gabon", "desc_en": "", "name_ru": "Габон", "desc_ru": "" },
            { "mask": "+1(473)###-####", "cc": "GD", "name_en": "Grenada", "desc_en": "", "name_ru": "Гренада", "desc_ru": "" },
            { "mask": "+995(###)###-###", "cc": "GE", "name_en": "Rep. of Georgia", "desc_en": "", "name_ru": "Грузия", "desc_ru": "" },
            { "mask": "+594-#####-####", "cc": "GF", "name_en": "Guiana (French)", "desc_en": "", "name_ru": "Фр. Гвиана", "desc_ru": "" },
            { "mask": "+233(###)###-###", "cc": "GH", "name_en": "Ghana", "desc_en": "", "name_ru": "Гана", "desc_ru": "" },
            { "mask": "+350-###-#####", "cc": "GI", "name_en": "Gibraltar", "desc_en": "", "name_ru": "Гибралтар", "desc_ru": "" },
            { "mask": "+299-##-##-##", "cc": "GL", "name_en": "Greenland", "desc_en": "", "name_ru": "Гренландия", "desc_ru": "" },
            { "mask": "+220(###)##-##", "cc": "GM", "name_en": "Gambia", "desc_en": "", "name_ru": "Гамбия", "desc_ru": "" },
            { "mask": "+224-##-###-###", "cc": "GN", "name_en": "Guinea", "desc_en": "", "name_ru": "Гвинея", "desc_ru": "" },
            { "mask": "+240-##-###-####", "cc": "GQ", "name_en": "Equatorial Guinea", "desc_en": "", "name_ru": "Экваториальная Гвинея", "desc_ru": "" },
            { "mask": "+30(###)###-####", "cc": "GR", "name_en": "Greece", "desc_en": "", "name_ru": "Греция", "desc_ru": "" },
            { "mask": "+502-#-###-####", "cc": "GT", "name_en": "Guatemala", "desc_en": "", "name_ru": "Гватемала", "desc_ru": "" },
            { "mask": "+1(671)###-####", "cc": "GU", "name_en": "Guam", "desc_en": "", "name_ru": "Гуам", "desc_ru": "" },
            { "mask": "+245-#-######", "cc": "GW", "name_en": "Guinea-Bissau", "desc_en": "", "name_ru": "Гвинея-Бисау", "desc_ru": "" },
            { "mask": "+592-###-####", "cc": "GY", "name_en": "Guyana", "desc_en": "", "name_ru": "Гайана", "desc_ru": "" },
            { "mask": "+852-####-####", "cc": "HK", "name_en": "Hong Kong", "desc_en": "", "name_ru": "Гонконг", "desc_ru": "" },
            { "mask": "+504-####-####", "cc": "HN", "name_en": "Honduras", "desc_en": "", "name_ru": "Гондурас", "desc_ru": "" },
            { "mask": "+385-##-###-###", "cc": "HR", "name_en": "Croatia", "desc_en": "", "name_ru": "Хорватия", "desc_ru": "" },
            { "mask": "+509-##-##-####", "cc": "HT", "name_en": "Haiti", "desc_en": "", "name_ru": "Гаити", "desc_ru": "" },
            { "mask": "+36(###)###-###", "cc": "HU", "name_en": "Hungary", "desc_en": "", "name_ru": "Венгрия", "desc_ru": "" },
            { "mask": "+62(8##)###-####", "cc": "ID", "name_en": "Indonesia ", "desc_en": "mobile", "name_ru": "Индонезия ", "desc_ru": "мобильные" },
            { "mask": "+62-##-###-##", "cc": "ID", "name_en": "Indonesia", "desc_en": "", "name_ru": "Индонезия", "desc_ru": "" },
            { "mask": "+62-##-###-###", "cc": "ID", "name_en": "Indonesia", "desc_en": "", "name_ru": "Индонезия", "desc_ru": "" },
            { "mask": "+62-##-###-####", "cc": "ID", "name_en": "Indonesia", "desc_en": "", "name_ru": "Индонезия", "desc_ru": "" },
            { "mask": "+62(8##)###-###", "cc": "ID", "name_en": "Indonesia ", "desc_en": "mobile", "name_ru": "Индонезия ", "desc_ru": "мобильные" },
            { "mask": "+62(8##)###-##-###", "cc": "ID", "name_en": "Indonesia ", "desc_en": "mobile", "name_ru": "Индонезия ", "desc_ru": "мобильные" },
            { "mask": "+353(###)###-###", "cc": "IE", "name_en": "Ireland", "desc_en": "", "name_ru": "Ирландия", "desc_ru": "" },
            { "mask": "+972-5#-###-####", "cc": "IL", "name_en": "Israel ", "desc_en": "mobile", "name_ru": "Израиль ", "desc_ru": "мобильные" },
            { "mask": "+972-#-###-####", "cc": "IL", "name_en": "Israel", "desc_en": "", "name_ru": "Израиль", "desc_ru": "" },
            { "mask": "+91(####)###-###", "cc": "IN", "name_en": "India", "desc_en": "", "name_ru": "Индия", "desc_ru": "" },
            { "mask": "+246-###-####", "cc": "IO", "name_en": "Diego Garcia", "desc_en": "", "name_ru": "Диего-Гарсия", "desc_ru": "" },
            { "mask": "+964(###)###-####", "cc": "IQ", "name_en": "Iraq", "desc_en": "", "name_ru": "Ирак", "desc_ru": "" },
            { "mask": "+98(###)###-####", "cc": "IR", "name_en": "Iran", "desc_en": "", "name_ru": "Иран", "desc_ru": "" },
            { "mask": "+354-###-####", "cc": "IS", "name_en": "Iceland", "desc_en": "", "name_ru": "Исландия", "desc_ru": "" },
            { "mask": "+39(###)####-###", "cc": "IT", "name_en": "Italy", "desc_en": "", "name_ru": "Италия", "desc_ru": "" },
            { "mask": "+1(876)###-####", "cc": "JM", "name_en": "Jamaica", "desc_en": "", "name_ru": "Ямайка", "desc_ru": "" },
            { "mask": "+962-#-####-####", "cc": "JO", "name_en": "Jordan", "desc_en": "", "name_ru": "Иордания", "desc_ru": "" },
            { "mask": "+81-##-####-####", "cc": "JP", "name_en": "Japan ", "desc_en": "mobile", "name_ru": "Япония ", "desc_ru": "мобильные" },
            { "mask": "+81(###)###-###", "cc": "JP", "name_en": "Japan", "desc_en": "", "name_ru": "Япония", "desc_ru": "" },
            { "mask": "+254-###-######", "cc": "KE", "name_en": "Kenya", "desc_en": "", "name_ru": "Кения", "desc_ru": "" },
            { "mask": "+996(###)###-###", "cc": "KG", "name_en": "Kyrgyzstan", "desc_en": "", "name_ru": "Киргизия", "desc_ru": "" },
            { "mask": "+855-##-###-###", "cc": "KH", "name_en": "Cambodia", "desc_en": "", "name_ru": "Камбоджа", "desc_ru": "" },
            { "mask": "+686-##-###", "cc": "KI", "name_en": "Kiribati", "desc_en": "", "name_ru": "Кирибати", "desc_ru": "" },
            { "mask": "+269-##-#####", "cc": "KM", "name_en": "Comoros", "desc_en": "", "name_ru": "Коморы", "desc_ru": "" },
            { "mask": "+1(869)###-####", "cc": "KN", "name_en": "Saint Kitts & Nevis", "desc_en": "", "name_ru": "Сент-Китс и Невис", "desc_ru": "" },
            { "mask": "+850-191-###-####", "cc": "KP", "name_en": "DPR Korea (North) ", "desc_en": "mobile", "name_ru": "Корейская НДР ", "desc_ru": "мобильные" },
            { "mask": "+850-##-###-###", "cc": "KP", "name_en": "DPR Korea (North)", "desc_en": "", "name_ru": "Корейская НДР", "desc_ru": "" },
            { "mask": "+850-###-####-###", "cc": "KP", "name_en": "DPR Korea (North)", "desc_en": "", "name_ru": "Корейская НДР", "desc_ru": "" },
            { "mask": "+850-###-###", "cc": "KP", "name_en": "DPR Korea (North)", "desc_en": "", "name_ru": "Корейская НДР", "desc_ru": "" },
            { "mask": "+850-####-####", "cc": "KP", "name_en": "DPR Korea (North)", "desc_en": "", "name_ru": "Корейская НДР", "desc_ru": "" },
            { "mask": "+850-####-#############", "cc": "KP", "name_en": "DPR Korea (North)", "desc_en": "", "name_ru": "Корейская НДР", "desc_ru": "" },
            { "mask": "+82-##-###-####", "cc": "KR", "name_en": "Korea (South)", "desc_en": "", "name_ru": "Респ. Корея", "desc_ru": "" },
            { "mask": "+965-####-####", "cc": "KW", "name_en": "Kuwait", "desc_en": "", "name_ru": "Кувейт", "desc_ru": "" },
            { "mask": "+1(345)###-####", "cc": "KY", "name_en": "Cayman Islands", "desc_en": "", "name_ru": "Каймановы острова", "desc_ru": "" },
            { "mask": "+7(6##)###-##-##", "cc": "KZ", "name_en": "Kazakhstan", "desc_en": "", "name_ru": "Казахстан", "desc_ru": "" },
            { "mask": "+7(7##)###-##-##", "cc": "KZ", "name_en": "Kazakhstan", "desc_en": "", "name_ru": "Казахстан", "desc_ru": "" },
            { "mask": "+856(20##)###-###", "cc": "LA", "name_en": "Laos ", "desc_en": "mobile", "name_ru": "Лаос ", "desc_ru": "мобильные" },
            { "mask": "+856-##-###-###", "cc": "LA", "name_en": "Laos", "desc_en": "", "name_ru": "Лаос", "desc_ru": "" },
            { "mask": "+961-##-###-###", "cc": "LB", "name_en": "Lebanon ", "desc_en": "mobile", "name_ru": "Ливан ", "desc_ru": "мобильные" },
            { "mask": "+961-#-###-###", "cc": "LB", "name_en": "Lebanon", "desc_en": "", "name_ru": "Ливан", "desc_ru": "" },
            { "mask": "+1(758)###-####", "cc": "LC", "name_en": "Saint Lucia", "desc_en": "", "name_ru": "Сент-Люсия", "desc_ru": "" },
            { "mask": "+423(###)###-####", "cc": "LI", "name_en": "Liechtenstein", "desc_en": "", "name_ru": "Лихтенштейн", "desc_ru": "" },
            { "mask": "+94-##-###-####", "cc": "LK", "name_en": "Sri Lanka", "desc_en": "", "name_ru": "Шри-Ланка", "desc_ru": "" },
            { "mask": "+231-##-###-###", "cc": "LR", "name_en": "Liberia", "desc_en": "", "name_ru": "Либерия", "desc_ru": "" },
            { "mask": "+266-#-###-####", "cc": "LS", "name_en": "Lesotho", "desc_en": "", "name_ru": "Лесото", "desc_ru": "" },
            { "mask": "+370(###)##-###", "cc": "LT", "name_en": "Lithuania", "desc_en": "", "name_ru": "Литва", "desc_ru": "" },
            { "mask": "+352(###)###-###", "cc": "LU", "name_en": "Luxembourg", "desc_en": "", "name_ru": "Люксембург", "desc_ru": "" },
            { "mask": "+371-##-###-###", "cc": "LV", "name_en": "Latvia", "desc_en": "", "name_ru": "Латвия", "desc_ru": "" },
            { "mask": "+218-##-###-###", "cc": "LY", "name_en": "Libya", "desc_en": "", "name_ru": "Ливия", "desc_ru": "" },
            { "mask": "+218-21-###-####", "cc": "LY", "name_en": "Libya", "desc_en": "Tripoli", "name_ru": "Ливия", "desc_ru": "Триполи" },
            { "mask": "+212-##-####-###", "cc": "MA", "name_en": "Morocco", "desc_en": "", "name_ru": "Марокко", "desc_ru": "" },
            { "mask": "+377(###)###-###", "cc": "MC", "name_en": "Monaco", "desc_en": "", "name_ru": "Монако", "desc_ru": "" },
            { "mask": "+377-##-###-###", "cc": "MC", "name_en": "Monaco", "desc_en": "", "name_ru": "Монако", "desc_ru": "" },
            { "mask": "+373-####-####", "cc": "MD", "name_en": "Moldova", "desc_en": "", "name_ru": "Молдова", "desc_ru": "" },
            { "mask": "+382-##-###-###", "cc": "ME", "name_en": "Montenegro", "desc_en": "", "name_ru": "Черногория", "desc_ru": "" },
            { "mask": "+261-##-##-#####", "cc": "MG", "name_en": "Madagascar", "desc_en": "", "name_ru": "Мадагаскар", "desc_ru": "" },
            { "mask": "+692-###-####", "cc": "MH", "name_en": "Marshall Islands", "desc_en": "", "name_ru": "Маршалловы Острова", "desc_ru": "" },
            { "mask": "+389-##-###-###", "cc": "MK", "name_en": "Republic of Macedonia", "desc_en": "", "name_ru": "Респ. Македония", "desc_ru": "" },
            { "mask": "+223-##-##-####", "cc": "ML", "name_en": "Mali", "desc_en": "", "name_ru": "Мали", "desc_ru": "" },
            { "mask": "+95-##-###-###", "cc": "MM", "name_en": "Burma (Myanmar)", "desc_en": "", "name_ru": "Бирма (Мьянма)", "desc_ru": "" },
            { "mask": "+95-#-###-###", "cc": "MM", "name_en": "Burma (Myanmar)", "desc_en": "", "name_ru": "Бирма (Мьянма)", "desc_ru": "" },
            { "mask": "+95-###-###", "cc": "MM", "name_en": "Burma (Myanmar)", "desc_en": "", "name_ru": "Бирма (Мьянма)", "desc_ru": "" },
            { "mask": "+976-##-##-####", "cc": "MN", "name_en": "Mongolia", "desc_en": "", "name_ru": "Монголия", "desc_ru": "" },
            { "mask": "+853-####-####", "cc": "MO", "name_en": "Macau", "desc_en": "", "name_ru": "Макао", "desc_ru": "" },
            { "mask": "+1(670)###-####", "cc": "MP", "name_en": "Northern Mariana Islands", "desc_en": "", "name_ru": "Северные Марианские острова Сайпан", "desc_ru": "" },
            { "mask": "+596(###)##-##-##", "cc": "MQ", "name_en": "Martinique", "desc_en": "", "name_ru": "Мартиника", "desc_ru": "" },
            { "mask": "+222-##-##-####", "cc": "MR", "name_en": "Mauritania", "desc_en": "", "name_ru": "Мавритания", "desc_ru": "" },
            { "mask": "+1(664)###-####", "cc": "MS", "name_en": "Montserrat", "desc_en": "", "name_ru": "Монтсеррат", "desc_ru": "" },
            { "mask": "+356-####-####", "cc": "MT", "name_en": "Malta", "desc_en": "", "name_ru": "Мальта", "desc_ru": "" },
            { "mask": "+230-###-####", "cc": "MU", "name_en": "Mauritius", "desc_en": "", "name_ru": "Маврикий", "desc_ru": "" },
            { "mask": "+960-###-####", "cc": "MV", "name_en": "Maldives", "desc_en": "", "name_ru": "Мальдивские острова", "desc_ru": "" },
            { "mask": "+265-1-###-###", "cc": "MW", "name_en": "Malawi", "desc_en": "Telecom Ltd", "name_ru": "Малави", "desc_ru": "Telecom Ltd" },
            { "mask": "+265-#-####-####", "cc": "MW", "name_en": "Malawi", "desc_en": "", "name_ru": "Малави", "desc_ru": "" },
            { "mask": "+52(###)###-####", "cc": "MX", "name_en": "Mexico", "desc_en": "", "name_ru": "Мексика", "desc_ru": "" },
            { "mask": "+52-##-##-####", "cc": "MX", "name_en": "Mexico", "desc_en": "", "name_ru": "Мексика", "desc_ru": "" },
            { "mask": "+60-##-###-####", "cc": "MY", "name_en": "Malaysia ", "desc_en": "mobile", "name_ru": "Малайзия ", "desc_ru": "мобильные" },
            { "mask": "+60(###)###-###", "cc": "MY", "name_en": "Malaysia", "desc_en": "", "name_ru": "Малайзия", "desc_ru": "" },
            { "mask": "+60-##-###-###", "cc": "MY", "name_en": "Malaysia", "desc_en": "", "name_ru": "Малайзия", "desc_ru": "" },
            { "mask": "+60-#-###-###", "cc": "MY", "name_en": "Malaysia", "desc_en": "", "name_ru": "Малайзия", "desc_ru": "" },
            { "mask": "+258-##-###-###", "cc": "MZ", "name_en": "Mozambique", "desc_en": "", "name_ru": "Мозамбик", "desc_ru": "" },
            { "mask": "+264-##-###-####", "cc": "NA", "name_en": "Namibia", "desc_en": "", "name_ru": "Намибия", "desc_ru": "" },
            { "mask": "+687-##-####", "cc": "NC", "name_en": "New Caledonia", "desc_en": "", "name_ru": "Новая Каледония", "desc_ru": "" },
            { "mask": "+227-##-##-####", "cc": "NE", "name_en": "Niger", "desc_en": "", "name_ru": "Нигер", "desc_ru": "" },
            { "mask": "+672-3##-###", "cc": "NF", "name_en": "Norfolk Island", "desc_en": "", "name_ru": "Норфолк (остров)", "desc_ru": "" },
            { "mask": "+234(###)###-####", "cc": "NG", "name_en": "Nigeria", "desc_en": "", "name_ru": "Нигерия", "desc_ru": "" },
            { "mask": "+234-##-###-###", "cc": "NG", "name_en": "Nigeria", "desc_en": "", "name_ru": "Нигерия", "desc_ru": "" },
            { "mask": "+234-##-###-##", "cc": "NG", "name_en": "Nigeria", "desc_en": "", "name_ru": "Нигерия", "desc_ru": "" },
            { "mask": "+234(###)###-####", "cc": "NG", "name_en": "Nigeria ", "desc_en": "mobile", "name_ru": "Нигерия ", "desc_ru": "мобильные" },
            { "mask": "+505-####-####", "cc": "NI", "name_en": "Nicaragua", "desc_en": "", "name_ru": "Никарагуа", "desc_ru": "" },
            { "mask": "+31-##-###-####", "cc": "NL", "name_en": "Netherlands", "desc_en": "", "name_ru": "Нидерланды", "desc_ru": "" },
            { "mask": "+47(###)##-###", "cc": "NO", "name_en": "Norway", "desc_en": "", "name_ru": "Норвегия", "desc_ru": "" },
            { "mask": "+977-##-###-###", "cc": "NP", "name_en": "Nepal", "desc_en": "", "name_ru": "Непал", "desc_ru": "" },
            { "mask": "+674-###-####", "cc": "NR", "name_en": "Nauru", "desc_en": "", "name_ru": "Науру", "desc_ru": "" },
            { "mask": "+683-####", "cc": "NU", "name_en": "Niue", "desc_en": "", "name_ru": "Ниуэ", "desc_ru": "" },
            { "mask": "+64(###)###-###", "cc": "NZ", "name_en": "New Zealand", "desc_en": "", "name_ru": "Новая Зеландия", "desc_ru": "" },
            { "mask": "+64-##-###-###", "cc": "NZ", "name_en": "New Zealand", "desc_en": "", "name_ru": "Новая Зеландия", "desc_ru": "" },
            { "mask": "+64(###)###-####", "cc": "NZ", "name_en": "New Zealand", "desc_en": "", "name_ru": "Новая Зеландия", "desc_ru": "" },
            { "mask": "+968-##-###-###", "cc": "OM", "name_en": "Oman", "desc_en": "", "name_ru": "Оман", "desc_ru": "" },
            { "mask": "+507-###-####", "cc": "PA", "name_en": "Panama", "desc_en": "", "name_ru": "Панама", "desc_ru": "" },
            { "mask": "+51(###)###-###", "cc": "PE", "name_en": "Peru", "desc_en": "", "name_ru": "Перу", "desc_ru": "" },
            { "mask": "+689-##-##-##", "cc": "PF", "name_en": "French Polynesia", "desc_en": "", "name_ru": "Французская Полинезия (Таити)", "desc_ru": "" },
            { "mask": "+675(###)##-###", "cc": "PG", "name_en": "Papua New Guinea", "desc_en": "", "name_ru": "Папуа-Новая Гвинея", "desc_ru": "" },
            { "mask": "+63(###)###-####", "cc": "PH", "name_en": "Philippines", "desc_en": "", "name_ru": "Филиппины", "desc_ru": "" },
            { "mask": "+92(###)###-####", "cc": "PK", "name_en": "Pakistan", "desc_en": "", "name_ru": "Пакистан", "desc_ru": "" },
            { "mask": "+48(###)###-###", "cc": "PL", "name_en": "Poland", "desc_en": "", "name_ru": "Польша", "desc_ru": "" },
            { "mask": "+970-##-###-####", "cc": "PS", "name_en": "Palestine", "desc_en": "", "name_ru": "Палестина", "desc_ru": "" },
            { "mask": "+351-##-###-####", "cc": "PT", "name_en": "Portugal", "desc_en": "", "name_ru": "Португалия", "desc_ru": "" },
            { "mask": "+680-###-####", "cc": "PW", "name_en": "Palau", "desc_en": "", "name_ru": "Палау", "desc_ru": "" },
            { "mask": "+595(###)###-###", "cc": "PY", "name_en": "Paraguay", "desc_en": "", "name_ru": "Парагвай", "desc_ru": "" },
            { "mask": "+974-####-####", "cc": "QA", "name_en": "Qatar", "desc_en": "", "name_ru": "Катар", "desc_ru": "" },
            { "mask": "+262-#####-####", "cc": "RE", "name_en": "Reunion", "desc_en": "", "name_ru": "Реюньон", "desc_ru": "" },
            { "mask": "+40-##-###-####", "cc": "RO", "name_en": "Romania", "desc_en": "", "name_ru": "Румыния", "desc_ru": "" },
            { "mask": "+381-##-###-####", "cc": "RS", "name_en": "Serbia", "desc_en": "", "name_ru": "Сербия", "desc_ru": "" },
            { "mask": "+7(###)###-##-##", "cc": "RU", "name_en": "Russia", "desc_en": "", "name_ru": "Россия", "desc_ru": "" },
            { "mask": "+250(###)###-###", "cc": "RW", "name_en": "Rwanda", "desc_en": "", "name_ru": "Руанда", "desc_ru": "" },
            { "mask": "+966-5-####-####", "cc": "SA", "name_en": "Saudi Arabia ", "desc_en": "mobile", "name_ru": "Саудовская Аравия ", "desc_ru": "мобильные" },
            { "mask": "+966-#-###-####", "cc": "SA", "name_en": "Saudi Arabia", "desc_en": "", "name_ru": "Саудовская Аравия", "desc_ru": "" },
            { "mask": "+677-###-####", "cc": "SB", "name_en": "Solomon Islands ", "desc_en": "mobile", "name_ru": "Соломоновы Острова ", "desc_ru": "мобильные" },
            { "mask": "+677-#####", "cc": "SB", "name_en": "Solomon Islands", "desc_en": "", "name_ru": "Соломоновы Острова", "desc_ru": "" },
            { "mask": "+248-#-###-###", "cc": "SC", "name_en": "Seychelles", "desc_en": "", "name_ru": "Сейшелы", "desc_ru": "" },
            { "mask": "+249-##-###-####", "cc": "SD", "name_en": "Sudan", "desc_en": "", "name_ru": "Судан", "desc_ru": "" },
            { "mask": "+46-##-###-####", "cc": "SE", "name_en": "Sweden", "desc_en": "", "name_ru": "Швеция", "desc_ru": "" },
            { "mask": "+65-####-####", "cc": "SG", "name_en": "Singapore", "desc_en": "", "name_ru": "Сингапур", "desc_ru": "" },
            { "mask": "+290-####", "cc": "SH", "name_en": "Saint Helena", "desc_en": "", "name_ru": "Остров Святой Елены", "desc_ru": "" },
            { "mask": "+290-####", "cc": "SH", "name_en": "Tristan da Cunha", "desc_en": "", "name_ru": "Тристан-да-Кунья", "desc_ru": "" },
            { "mask": "+386-##-###-###", "cc": "SI", "name_en": "Slovenia", "desc_en": "", "name_ru": "Словения", "desc_ru": "" },
            { "mask": "+421(###)###-###", "cc": "SK", "name_en": "Slovakia", "desc_en": "", "name_ru": "Словакия", "desc_ru": "" },
            { "mask": "+232-##-######", "cc": "SL", "name_en": "Sierra Leone", "desc_en": "", "name_ru": "Сьерра-Леоне", "desc_ru": "" },
            { "mask": "+378-####-######", "cc": "SM", "name_en": "San Marino", "desc_en": "", "name_ru": "Сан-Марино", "desc_ru": "" },
            { "mask": "+221-##-###-####", "cc": "SN", "name_en": "Senegal", "desc_en": "", "name_ru": "Сенегал", "desc_ru": "" },
            { "mask": "+252-##-###-###", "cc": "SO", "name_en": "Somalia", "desc_en": "", "name_ru": "Сомали", "desc_ru": "" },
            { "mask": "+252-#-###-###", "cc": "SO", "name_en": "Somalia", "desc_en": "", "name_ru": "Сомали", "desc_ru": "" },
            { "mask": "+252-#-###-###", "cc": "SO", "name_en": "Somalia ", "desc_en": "mobile", "name_ru": "Сомали ", "desc_ru": "мобильные" },
            { "mask": "+597-###-####", "cc": "SR", "name_en": "Suriname ", "desc_en": "mobile", "name_ru": "Суринам ", "desc_ru": "мобильные" },
            { "mask": "+597-###-###", "cc": "SR", "name_en": "Suriname", "desc_en": "", "name_ru": "Суринам", "desc_ru": "" },
            { "mask": "+211-##-###-####", "cc": "SS", "name_en": "South Sudan", "desc_en": "", "name_ru": "Южный Судан", "desc_ru": "" },
            { "mask": "+239-##-#####", "cc": "ST", "name_en": "Sao Tome and Principe", "desc_en": "", "name_ru": "Сан-Томе и Принсипи", "desc_ru": "" },
            { "mask": "+503-##-##-####", "cc": "SV", "name_en": "El Salvador", "desc_en": "", "name_ru": "Сальвадор", "desc_ru": "" },
            { "mask": "+1(721)###-####", "cc": "SX", "name_en": "Sint Maarten", "desc_en": "", "name_ru": "Синт-Маартен", "desc_ru": "" },
            { "mask": "+963-##-####-###", "cc": "SY", "name_en": "Syrian Arab Republic", "desc_en": "", "name_ru": "Сирийская арабская республика", "desc_ru": "" },
            { "mask": "+268-##-##-####", "cc": "SZ", "name_en": "Swaziland", "desc_en": "", "name_ru": "Свазиленд", "desc_ru": "" },
            { "mask": "+1(649)###-####", "cc": "TC", "name_en": "Turks & Caicos", "desc_en": "", "name_ru": "Тёркс и Кайкос", "desc_ru": "" },
            { "mask": "+235-##-##-##-##", "cc": "TD", "name_en": "Chad", "desc_en": "", "name_ru": "Чад", "desc_ru": "" },
            { "mask": "+228-##-###-###", "cc": "TG", "name_en": "Togo", "desc_en": "", "name_ru": "Того", "desc_ru": "" },
            { "mask": "+66-##-###-####", "cc": "TH", "name_en": "Thailand ", "desc_en": "mobile", "name_ru": "Таиланд ", "desc_ru": "мобильные" },
            { "mask": "+66-##-###-###", "cc": "TH", "name_en": "Thailand", "desc_en": "", "name_ru": "Таиланд", "desc_ru": "" },
            { "mask": "+992-##-###-####", "cc": "TJ", "name_en": "Tajikistan", "desc_en": "", "name_ru": "Таджикистан", "desc_ru": "" },
            { "mask": "+690-####", "cc": "TK", "name_en": "Tokelau", "desc_en": "", "name_ru": "Токелау", "desc_ru": "" },
            { "mask": "+670-###-####", "cc": "TL", "name_en": "East Timor", "desc_en": "", "name_ru": "Восточный Тимор", "desc_ru": "" },
            { "mask": "+670-77#-#####", "cc": "TL", "name_en": "East Timor", "desc_en": "Timor Telecom", "name_ru": "Восточный Тимор", "desc_ru": "Timor Telecom" },
            { "mask": "+670-78#-#####", "cc": "TL", "name_en": "East Timor", "desc_en": "Timor Telecom", "name_ru": "Восточный Тимор", "desc_ru": "Timor Telecom" },
            { "mask": "+993-#-###-####", "cc": "TM", "name_en": "Turkmenistan", "desc_en": "", "name_ru": "Туркменистан", "desc_ru": "" },
            { "mask": "+216-##-###-###", "cc": "TN", "name_en": "Tunisia", "desc_en": "", "name_ru": "Тунис", "desc_ru": "" },
            { "mask": "+676-#####", "cc": "TO", "name_en": "Tonga", "desc_en": "", "name_ru": "Тонга", "desc_ru": "" },
            { "mask": "+90(###)###-####", "cc": "TR", "name_en": "Turkey", "desc_en": "", "name_ru": "Турция", "desc_ru": "" },
            { "mask": "+1(868)###-####", "cc": "TT", "name_en": "Trinidad & Tobago", "desc_en": "", "name_ru": "Тринидад и Тобаго", "desc_ru": "" },
            { "mask": "+688-90####", "cc": "TV", "name_en": "Tuvalu ", "desc_en": "mobile", "name_ru": "Тувалу ", "desc_ru": "мобильные" },
            { "mask": "+688-2####", "cc": "TV", "name_en": "Tuvalu", "desc_en": "", "name_ru": "Тувалу", "desc_ru": "" },
            { "mask": "+886-#-####-####", "cc": "TW", "name_en": "Taiwan", "desc_en": "", "name_ru": "Тайвань", "desc_ru": "" },
            { "mask": "+886-####-####", "cc": "TW", "name_en": "Taiwan", "desc_en": "", "name_ru": "Тайвань", "desc_ru": "" },
            { "mask": "+255-##-###-####", "cc": "TZ", "name_en": "Tanzania", "desc_en": "", "name_ru": "Танзания", "desc_ru": "" },
            { "mask": "+380(##)###-##-##", "cc": "UA", "name_en": "Ukraine", "desc_en": "", "name_ru": "Украина", "desc_ru": "" },
            { "mask": "+256(###)###-###", "cc": "UG", "name_en": "Uganda", "desc_en": "", "name_ru": "Уганда", "desc_ru": "" },
            { "mask": "+44-##-####-####", "cc": "UK", "name_en": "United Kingdom", "desc_en": "", "name_ru": "Великобритания", "desc_ru": "" },
            { "mask": "+598-#-###-##-##", "cc": "UY", "name_en": "Uruguay", "desc_en": "", "name_ru": "Уругвай", "desc_ru": "" },
            { "mask": "+998-##-###-####", "cc": "UZ", "name_en": "Uzbekistan", "desc_en": "", "name_ru": "Узбекистан", "desc_ru": "" },
            { "mask": "+39-6-698-#####", "cc": "VA", "name_en": "Vatican City", "desc_en": "", "name_ru": "Ватикан", "desc_ru": "" },
            { "mask": "+1(784)###-####", "cc": "VC", "name_en": "Saint Vincent & the Grenadines", "desc_en": "", "name_ru": "Сент-Винсент и Гренадины", "desc_ru": "" },
            { "mask": "+58(###)###-####", "cc": "VE", "name_en": "Venezuela", "desc_en": "", "name_ru": "Венесуэла", "desc_ru": "" },
            { "mask": "+1(284)###-####", "cc": "VG", "name_en": "British Virgin Islands", "desc_en": "", "name_ru": "Британские Виргинские острова", "desc_ru": "" },
            { "mask": "+1(340)###-####", "cc": "VI", "name_en": "US Virgin Islands", "desc_en": "", "name_ru": "Американские Виргинские острова", "desc_ru": "" },
            { "mask": "+84-##-####-###", "cc": "VN", "name_en": "Vietnam", "desc_en": "", "name_ru": "Вьетнам", "desc_ru": "" },
            { "mask": "+84(###)####-###", "cc": "VN", "name_en": "Vietnam", "desc_en": "", "name_ru": "Вьетнам", "desc_ru": "" },
            { "mask": "+678-##-#####", "cc": "VU", "name_en": "Vanuatu ", "desc_en": "mobile", "name_ru": "Вануату ", "desc_ru": "мобильные" },
            { "mask": "+678-#####", "cc": "VU", "name_en": "Vanuatu", "desc_en": "", "name_ru": "Вануату", "desc_ru": "" },
            { "mask": "+681-##-####", "cc": "WF", "name_en": "Wallis and Futuna", "desc_en": "", "name_ru": "Уоллис и Футуна", "desc_ru": "" },
            { "mask": "+685-##-####", "cc": "WS", "name_en": "Samoa", "desc_en": "", "name_ru": "Самоа", "desc_ru": "" },
            { "mask": "+967-###-###-###", "cc": "YE", "name_en": "Yemen ", "desc_en": "mobile", "name_ru": "Йемен ", "desc_ru": "мобильные" },
            { "mask": "+967-#-###-###", "cc": "YE", "name_en": "Yemen", "desc_en": "", "name_ru": "Йемен", "desc_ru": "" },
            { "mask": "+967-##-###-###", "cc": "YE", "name_en": "Yemen", "desc_en": "", "name_ru": "Йемен", "desc_ru": "" },
            { "mask": "+27-##-###-####", "cc": "ZA", "name_en": "South Africa", "desc_en": "", "name_ru": "Южно-Африканская Респ.", "desc_ru": "" },
            { "mask": "+260-##-###-####", "cc": "ZM", "name_en": "Zambia", "desc_en": "", "name_ru": "Замбия", "desc_ru": "" },
            { "mask": "+263-#-######", "cc": "ZW", "name_en": "Zimbabwe", "desc_en": "", "name_ru": "Зимбабве", "desc_ru": "" },
            { "mask": "+1(###)###-####", "cc": ["US", "CA"], "name_en": "USA and Canada", "desc_en": "", "name_ru": "США и Канада", "desc_ru": "" }
        ]
        ;

        _.tr({
            'call_requests.error_validator_phone': 'Недопустимый номер телефона в поле <b>[field]<\/b>.'
        });
    }(Tygh, Tygh.$));
</script>
<script type="text/javascript">
    //<![CDATA[
    (function(_, $) {
        $.extend(_, {
            maps_provider: false
        });

    }(Tygh, Tygh.$));
    //]]>
</script>
<script type="text/javascript">
    CloudZoom = {
        path: 'http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/js/addons/image_zoom'
    };
</script>


<!-- Inline scripts -->
<script type="text/javascript">
    (function(_, $) {
        $.ceEvent('on', 'ce.commoninit', function(context) {
            var slider = context.find('#banner_slider_3956');
            if (slider.length) {
                slider.owlCarousel({
                    direction: 'ltr',
                    items: 1,
                    singleItem : true,
                    slideSpeed: 400,
                    autoPlay: '300000',
                    stopOnHover: true,
                    pagination: false,
                    navigation: true,
                    navigationText: ['Назад', 'Вперед']
                });
            }
        });
    }(Tygh, Tygh.$));
</script>
<script type="text/javascript" src="<?= Yii::getAlias('@web/js/product_image_gallery.js') ?>" ></script>
<script type="text/javascript" src="<?= Yii::getAlias('@web/js/owl.carousel.min.js') ?>" ></script>
<script type="text/javascript">
    (function(_, $) {
        $.ceEvent('on', 'ce.commoninit', function(context) {
            var elm = context.find('#scroll_list_101');

            $('.ty-float-left:contains(.ty-scroller-list),.ty-float-right:contains(.ty-scroller-list)').css('width', '100%');

            var item = 5,
                // default setting of carousel
                itemsDesktop = 4,
                itemsDesktopSmall = 3;
            itemsTablet = 2;

            if (item > 3) {
                itemsDesktop = item;
                itemsDesktopSmall = item - 1;
                itemsTablet = item - 2;
            } else if (item == 1) {
                itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
            } else {
                itemsDesktop = item;
                itemsDesktopSmall = itemsTablet = item - 1;
            }

            var desktop = [1199, itemsDesktop],
                desktopSmall = [979, itemsDesktopSmall],
                tablet = [768, itemsTablet],
                mobile = [479, 1];


            if (elm.length) {
                elm.owlCarousel({
                    direction: 'ltr',
                    items: item,
                    itemsDesktop: desktop,
                    itemsDesktopSmall: desktopSmall,
                    itemsTablet: tablet,
                    itemsMobile: mobile,
                    scrollPerPage: true,
                    autoPlay: false,
                    lazyLoad: true,
                    slideSpeed: 400,
                    stopOnHover: true,
                    navigation: true,
                    navigationText: ['<i class="uni-left-sight"></i>', '<i class="uni-right-sight"></i>'],
                    pagination: false,
                });

            }
        });
    }(Tygh, Tygh.$));
</script>
<script type="text/javascript">
    (function(_, $) {
        $.ceEvent('on', 'ce.commoninit', function(context) {
            var elm = context.find('#scroll_list_100');

            $('.ty-float-left:contains(.ty-scroller-list),.ty-float-right:contains(.ty-scroller-list)').css('width', '100%');

            var item = 5,
                // default setting of carousel
                itemsDesktop = 4,
                itemsDesktopSmall = 3;
            itemsTablet = 2;

            if (item > 3) {
                itemsDesktop = item;
                itemsDesktopSmall = item - 1;
                itemsTablet = item - 2;
            } else if (item == 1) {
                itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
            } else {
                itemsDesktop = item;
                itemsDesktopSmall = itemsTablet = item - 1;
            }

            var desktop = [1199, itemsDesktop],
                desktopSmall = [979, itemsDesktopSmall],
                tablet = [768, itemsTablet],
                mobile = [479, 1];


            if (elm.length) {
                elm.owlCarousel({
                    direction: 'ltr',
                    items: item,
                    itemsDesktop: desktop,
                    itemsDesktopSmall: desktopSmall,
                    itemsTablet: tablet,
                    itemsMobile: mobile,
                    scrollPerPage: true,
                    autoPlay: false,
                    lazyLoad: true,
                    slideSpeed: 400,
                    stopOnHover: true,
                    navigation: true,
                    navigationText: ['<i class="uni-left-sight"></i>', '<i class="uni-right-sight"></i>'],
                    pagination: false,
                });

            }
        });
    }(Tygh, Tygh.$));
</script>
<script type="text/javascript">
    (function(_, $) {
        $.ceEvent('on', 'ce.commoninit', function(context) {
            var elm = context.find('#scroll_list_102');

            $('.ty-float-left:contains(.ty-scroller-list),.ty-float-right:contains(.ty-scroller-list)').css('width', '100%');

            var item = 5,
                // default setting of carousel
                itemsDesktop = 4,
                itemsDesktopSmall = 3;
            itemsTablet = 2;

            if (item > 3) {
                itemsDesktop = item;
                itemsDesktopSmall = item - 1;
                itemsTablet = item - 2;
            } else if (item == 1) {
                itemsDesktop = itemsDesktopSmall = itemsTablet = 1;
            } else {
                itemsDesktop = item;
                itemsDesktopSmall = itemsTablet = item - 1;
            }

            var desktop = [1199, itemsDesktop],
                desktopSmall = [979, itemsDesktopSmall],
                tablet = [768, itemsTablet],
                mobile = [479, 1];


            if (elm.length) {
                elm.owlCarousel({
                    direction: 'ltr',
                    items: item,
                    itemsDesktop: desktop,
                    itemsDesktopSmall: desktopSmall,
                    itemsTablet: tablet,
                    itemsMobile: mobile,
                    scrollPerPage: true,
                    autoPlay: false,
                    lazyLoad: true,
                    slideSpeed: 400,
                    stopOnHover: true,
                    navigation: true,
                    navigationText: ['<i class="uni-left-sight"></i>', '<i class="uni-right-sight"></i>'],
                    pagination: false,
                });

            }
        });
    }(Tygh, Tygh.$));
</script>
<script type="text/javascript" src="<?= Yii::getAlias('@web/js/tabs.js') ?>" ></script>
<script type="text/javascript" src="<?= Yii::getAlias('@web/js/exceptions.js') ?>" ></script>




<a href="#" data-ca-target-id="ask_a_question" onclick="$.cookie.set('ask_question_closed', 'Y', false, '/');" class="ask_question-open cm-dialog-opener cm-dialog-auto-size" >
    Есть вопрос?
    <img src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/design/themes/responsive/media/images/addons/ask_question/question.png" alt="">
    <span class="ask_question-pulse"></span>
</a>
<div id="ask_a_question" class="ask_question-dialog hidden">
    <form id="form_question" action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/index.php?dispatch=ask_question.send" method="post" name="form_question" enctype="multipart/form-data">

        <input type="hidden" name="fake" value="1" />
        <input type="hidden" name="name2" value="" />
        <input type="hidden" name="redirect_url" value="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" />

        <span class="cm-dialog-closer ask_question-dialog-closer">
			<span class="ty-icon-cancel"></span>
		</span>
        <div class="ask_question-form">
            <h2>У вас есть вопросы по CS-Cart?</h2>
            <h3>Не тратьте время, просто спросите.<br />Это бесплатно.</h3>
            <div class="ask_wrapp">
                <label for="askquestion_text" class="cm-required hidden"></label>
                <textarea name="data[message]" id="askquestion_text" cols="30" rows="10" placeholder="Вопрос *"></textarea>
            </div>
            <div class="ask_wrapp">
                <label for="askquestion_name" class="cm-required hidden"></label>
                <input type="text" id="askquestion_name" name="data[name]" placeholder="Ваше имя *">
            </div>
            <div class="ask_wrapp">
                <label for="askquestion_mail" class="cm-required cm-email hidden"></label>
                <input type="text" id="askquestion_mail" name="data[email]" placeholder="Ваш e-mail (на него пришлем ответ) *">
            </div>
            <input type="submit" onclick="$.cookie.set('ask_question_closed', 'Y', false, '/')" value="Отправить вопрос">
        </div>
        <div class="ask_question-image">
            <div class="name">
                <span>Александр</span>
                Руководитель отдела продаж
            </div>
            <img src="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/design/themes/responsive/media/images/addons/ask_question/alex.png" alt="">
        </div>
        <input type="hidden" name="security_hash" class="cm-no-hide-input" value="2198a5b676ffd4e8f8299c6a7007a82f" /></form>
</div>
<div id="ask_a_question_thanks" class="ask_question-dialog hidden">
	<span class="cm-dialog-closer ask_question-dialog-closer">
		<span class="ty-icon-cancel"></span>
	</span>
    <div class="ask_question--thanks">
        <h1>Спасибо за интерес к CS-Cart!</h1>
        <span>Если сегодня не выходной и не праздник, то мы постараемся дать ответ на ваш вопрос в течение дня.</span>
        <span class="cm-dialog-closer ask_question-close-btn">Закрыть</span>
    </div>
</div>
<img src="http://demo.cs-cart.ru/activity/8ae4a590ed09f99f/image">
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter24063511 = new Ya.Metrika({
                    id: 24063511,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    trackHash: true,
                    webvisor: true,
                });
            } catch(e) { };
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>




</body>

</html>