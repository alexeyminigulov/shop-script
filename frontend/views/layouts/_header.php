<?php

use frontend\widgets\CatalogWidget;

?>
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

                        <?= CatalogWidget::widget() ?>

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