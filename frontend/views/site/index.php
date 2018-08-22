<?php

/* @var $this \yii\web\View */
/* @var $products \domain\entities\Shop\Product\Product[] */

use frontend\widgets\ProductCarousel;
use frontend\widgets\BannerWidget;

?>
<div class="tygh-content clearfix">
    <div class="container-fluid  content-grid">


        <div class="container-fluid-row container-fluid-row-no-limit fullwidth-page-banners">
            <div class="row-fluid ">
                <div class="span16 ">

                    <?= BannerWidget::widget() ?>

                </div>
            </div>
        </div>

        <div class="container-fluid-row">
            <div class="row-fluid ">
                <div class="span16 pd-all tabs-wrap">
                    <div class="row-fluid ">
                        <div class="span16 ">
                            <div class="ty-mainbox-container clearfix">
                                <div class="ty-mainbox-title">
                                    Хиты продаж / Бестселлеры
                                </div>
                                <div class="ty-mainbox-body">
                                    <div class="ty-wysiwyg-content" data-ca-live-editor-object-id="0" data-ca-live-editor-object-type=""></div>
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
                                <div id="content_ab__grid_tab_4437_101"><?= ProductCarousel::widget() ?></div>
                                <div id="content_ab__grid_tab_4437_100"><span></span></div>
                                <div id="content_ab__grid_tab_4437_102"><span></span></div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid-row container-fluid-row-full-width pd-bottom">

            <div class="row-fluid ">
                <div class="span16 ">
                    <div class="ty-mainbox-container clearfix">
                        <div class="ty-mainbox-title">
                            Новинки в магазине
                        </div>
                        <div class="ty-mainbox-body">

                            <div class="grid-list no-buttons">

                                <?php foreach ($products as $product): ?>

                                <?= $this->render('_product', ['product' => $product]) ?>

                                <?php endforeach; ?>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid-row container-fluid-row-full-width advanced-banners-grid b-top  pd-all-big small-grid">
                <div class="row-fluid ">
                    <div class="span16 ">
                        <div class="row-fluid ">
                            <div class="span8 ">
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
                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/sport-i-otdyh/ryukzaki/2011-pit-boss/"
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
                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/foto-video/cifrovye-fotoapparaty/nikon-1-j1-two-lens-kit-krasnyy/"
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
                        <div class="row-fluid ">
                            <div class="span4 ">
                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/telefony/"
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
                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/igrovye-pristavki/"
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
                                <a href="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/elektronika/televizory-i-video/"
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
                <div class="row-fluid ">
                    <div class="span16 ">
                        <div class="ty-mainbox-container clearfix about-company-desc">
                            <div class="ty-mainbox-title">О компании</div>
                            <div class="ty-mainbox-body">
                                <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                                    <p>Сайт, торгующий товарами в Интернете. Позволяет пользователям сформировать заказ на покупку, выбрать способ оплаты и доставки заказа в сети Интернет. Выбрав необходимые товары или услуги, пользователь обычно имеет возможность тут же на сайте выбрать метод оплаты и доставки.</p>
                                    <p>Основное отличие Интернет-магазина от традиционного — в типе торговой площадки. Обычному магазину нужен торговый зал, витрины, ценники, а также продавцы, кассиры и опытные консультанты, у онлайн-магазина же вся инфраструктура реализована программно.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid-row">
                <div class="row-fluid ">
                    <div class="span16 footer-stay-connected pd-top">
                        <div class="row-fluid ">
                            <div class="span8 ty-grid">
                                <div class="ty-footer-form-block no-help">
                                    <form action="http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/" method="post" name="subscribe_form">
                                        <input type="hidden" name="redirect_url" value="index.php" />
                                        <input type="hidden" name="newsletter_format" value="2" />
                                        <div class="ty-footer-form-block__form ty-control-group with-side">
                                            <div class="ty-footer-form-block__title">Оставайтесь на связи</div>
                                            <div class="ty-uppercase ty-social-link__title">Эксклюзивные скидки<br>Подпишитесь на наши новости и получите купон на скидку 10%!</div>
                                        </div>
                                        <div class="ty-footer-form-block__input cm-block-add-subscribe">
                                            <label class="cm-required cm-email hidden" for="subscr_email110">E-mail</label>
                                            <input type="text" name="subscribe_email" id="subscr_email110" size="20" placeholder="E-mail" class="cm-hint ty-input-text-medium ty-valign-top" />
                                            <button  class="ty-btn__subscribe ty-btn__primary ty-btn" type="submit" name="dispatch[newsletters.add_subscriber]" >Подписаться</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="span8 ty-grid">
                                <div class="ty-wysiwyg-content"  data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                                    <div class="ty-social-link-block">
                                        <div class="ty-mainbox-title">Присоединяйтесь!</div>
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