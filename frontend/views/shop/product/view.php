<?php

/* @var $this \yii\web\View */
/* @var $product \domain\entities\Shop\Product\Product */
/* @var $categories \domain\entities\Shop\Category[] */

use yii\helpers\Html;
use frontend\widgets\BreadCrumbs;
use frontend\widgets\ProductContentFeatures;

?>
<div class="tygh-content clearfix">
    <div class="container-fluid  content-grid full_width">
        <div class="container-fluid-row">
            <div class="row-fluid ">
                <div class="span16 main-content-grid row-container">
                    <div class="row-fluid ">
                        <div class="span16 ">
                            <!-- Inline script moved to the bottom of the page -->
                            <div class="ty-product-block ty-product-detail">
                                <div class="row-fluid  ty-product-block__wrapper clearfix">
                                    <h1 class="ty-product-block-title"><bdi><?= Html::encode($product->name) ?></bdi></h1>

                                    <?= BreadCrumbs::widget([
                                        'categories' => $categories,
                                    ]) ?>

                                    <div class="span7 ty-product-block__img-wrapper">
                                        <div class="ty-product-block__img cm-reload-214" id="product_images_214_update">
                                            <div class="active-gallery one-col">
                                            </div>
                                            <div class="one-col">
                                                <div class="ty-product-img cm-preview-wrapper" style="display:inline-block">
                                                    <a id="det_img_link_2145b5600b13baf1_765" data-ca-image-id="preview[product_images_2145b5600b13baf1]" class="cm-image-previewer cm-previewer ty-previewer" data-ca-image-width="500" data-ca-image-height="500" href="http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/572/500/detailed/0/P_50013287768924f3386bc5fe80.jpg" title=""><img class="ty-pict     cm-image" id="det_img_2145b5600b13baf1_765" src="http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/400/350/detailed/0/P_50013287768924f3386bc5fe80.jpg" alt="" title="" data-cloudzoom="zoomImage: &quot;http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/572/500/detailed/0/P_50013287768924f3386bc5fe80.jpg&quot;" style="user-select: none;">
                                                        <span class="ty-previewer__icon hidden-phone"></span></a>
                                                    <a id="det_img_link_2145b5600b13baf1_766" data-ca-image-id="preview[product_images_2145b5600b13baf1]" class="cm-image-previewer hidden cm-previewer ty-previewer" data-ca-image-width="500" data-ca-image-height="500" href="http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/572/500/detailed/0/nDMJWQLHhMN4fi8b_500.jpg" title=""><img class="ty-pict     cm-image" id="det_img_2145b5600b13baf1_766" src="http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/400/350/detailed/0/nDMJWQLHhMN4fi8b_500.jpg" alt="" title="" data-cloudzoom="zoomImage: &quot;http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/572/500/detailed/0/nDMJWQLHhMN4fi8b_500.jpg&quot;">
                                                        <span class="ty-previewer__icon hidden-phone"></span></a>
                                                    <a id="det_img_link_2145b5600b13baf1_767" data-ca-image-id="preview[product_images_2145b5600b13baf1]" class="cm-image-previewer hidden cm-previewer ty-previewer" data-ca-image-width="500" data-ca-image-height="500" href="http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/572/500/detailed/0/b3k0951cYIyn1LDE_500.jpg" title=""><img class="ty-pict     cm-image" id="det_img_2145b5600b13baf1_767" src="http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/400/350/detailed/0/b3k0951cYIyn1LDE_500.jpg" alt="" title="" data-cloudzoom="zoomImage: &quot;http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/572/500/detailed/0/b3k0951cYIyn1LDE_500.jpg&quot;">
                                                        <span class="ty-previewer__icon hidden-phone"></span></a>
                                                    <a id="det_img_link_2145b5600b13baf1_768" data-ca-image-id="preview[product_images_2145b5600b13baf1]" class="cm-image-previewer hidden cm-previewer ty-previewer" data-ca-image-width="735" data-ca-image-height="750" href="http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/858/750/detailed/0/vx8EzIhsyOV81i8h_500.jpg" title=""><img class="ty-pict     cm-image" id="det_img_2145b5600b13baf1_768" src="http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/400/350/detailed/0/vx8EzIhsyOV81i8h_500.jpg" alt="" title="" data-cloudzoom="zoomImage: &quot;http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/858/750/detailed/0/vx8EzIhsyOV81i8h_500.jpg&quot;">
                                                        <span class="ty-previewer__icon hidden-phone"></span></a>
                                                    <a id="det_img_link_2145b5600b13baf1_769" data-ca-image-id="preview[product_images_2145b5600b13baf1]" class="cm-image-previewer hidden cm-previewer ty-previewer" data-ca-image-width="1000" data-ca-image-height="1000" href="http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/1143/1000/detailed/0/uMhBLQB2lSbT9kBm_500.jpg" title=""><img class="ty-pict     cm-image" id="det_img_2145b5600b13baf1_769" src="http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/400/350/detailed/0/uMhBLQB2lSbT9kBm_500.jpg" alt="" title="" data-cloudzoom="zoomImage: &quot;http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/1143/1000/detailed/0/uMhBLQB2lSbT9kBm_500.jpg&quot;">
                                                        <span class="ty-previewer__icon hidden-phone"></span></a>
                                                    <p class="ty-center"><small style="color:#999;">Наведите на картинку для увеличения</small></p>
                                                </div>
                                                <div class="ty-product-thumbnails ty-center cm-image-gallery" id="images_preview_2145b5600b13baf1" style="width: 400px;">
                                                    <a data-ca-gallery-large-id="det_img_link_2145b5600b13baf1_765" class="cm-thumbnails-mini active ty-product-thumbnails__item"><img class="ty-pict     cm-image" id="det_img_2145b5600b13baf1_765_mini" src="http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/50/50/detailed/0/P_50013287768924f3386bc5fe80.jpg" alt="" title="">
                                                    </a><a data-ca-gallery-large-id="det_img_link_2145b5600b13baf1_766" class="cm-thumbnails-mini ty-product-thumbnails__item"><img class="ty-pict     cm-image" id="det_img_2145b5600b13baf1_766_mini" src="http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/50/50/detailed/0/nDMJWQLHhMN4fi8b_500.jpg" alt="" title="">
                                                    </a><a data-ca-gallery-large-id="det_img_link_2145b5600b13baf1_767" class="cm-thumbnails-mini ty-product-thumbnails__item"><img class="ty-pict     cm-image" id="det_img_2145b5600b13baf1_767_mini" src="http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/50/50/detailed/0/b3k0951cYIyn1LDE_500.jpg" alt="" title="">
                                                    </a><a data-ca-gallery-large-id="det_img_link_2145b5600b13baf1_768" class="cm-thumbnails-mini ty-product-thumbnails__item"><img class="ty-pict     cm-image" id="det_img_2145b5600b13baf1_768_mini" src="http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/50/50/detailed/0/vx8EzIhsyOV81i8h_500.jpg" alt="" title="">
                                                    </a><a data-ca-gallery-large-id="det_img_link_2145b5600b13baf1_769" class="cm-thumbnails-mini ty-product-thumbnails__item"><img class="ty-pict     cm-image" id="det_img_2145b5600b13baf1_769_mini" src="http://demo.cs-cart.ru/stores/0074ef20992a3836/images/thumbnails/50/50/detailed/0/uMhBLQB2lSbT9kBm_500.jpg" alt="" title="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="span9 ty-product-block__left">
                                        <?= $this->render('_card-product', [
                                                'product' => $product,
                                        ]) ?>
                                    </div>
                                    <div class="ty-discussion-post-popup hidden" id="new_post_dialog_214" title="Написать отзыв">
                                        <form action="http://demo.cs-cart.ru/stores/0074ef20992a3836/" method="post" class="posts-form cm-processed-form" name="add_post_form" id="add_post_form_214">
                                            <div id="new_post_214">
                                                <div class="ty-control-group">
                                                    <label for="dsc_name_214" class="ty-control-group__title cm-required">Ваше имя</label>
                                                    <input type="text" id="dsc_name_214" name="post_data[name]" value="" size="50" class="ty-input-text-large">
                                                </div>
                                                <div class="ty-control-group">
                                                    <label for="rating_214" class="ty-control-group__title cm-required cm-multiple-radios">Ваша оценка</label>
                                                    <div class="clearfix cm-field-container">
                                                        <div class="ty-rating" id="rating_214">
                                                            <input type="radio" id="rating_214_5" class="ty-rating__check" name="post_data[rating_value]" value="5"><label class="ty-rating__label" for="rating_214_5" title="Отлично!">Отлично!</label>
                                                            <input type="radio" id="rating_214_4" class="ty-rating__check" name="post_data[rating_value]" value="4"><label class="ty-rating__label" for="rating_214_4" title="Очень хорошо">Очень хорошо</label>
                                                            <input type="radio" id="rating_214_3" class="ty-rating__check" name="post_data[rating_value]" value="3"><label class="ty-rating__label" for="rating_214_3" title="Сносно">Сносно</label>
                                                            <input type="radio" id="rating_214_2" class="ty-rating__check" name="post_data[rating_value]" value="2"><label class="ty-rating__label" for="rating_214_2" title="Плохо">Плохо</label>
                                                            <input type="radio" id="rating_214_1" class="ty-rating__check" name="post_data[rating_value]" value="1"><label class="ty-rating__label" for="rating_214_1" title="Очень плохо">Очень плохо</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ty-control-group">
                                                    <label for="dsc_message_214" class="ty-control-group__title cm-required">Ваше сообщение</label>
                                                    <textarea id="dsc_message_214" name="post_data[message]" class="ty-input-textarea ty-input-text-large" rows="5" cols="72"></textarea>
                                                </div>
                                                <!--new_post_214-->
                                            </div>
                                            <div class="buttons-container">
                                                <button class="ty-btn__secondary ty-btn" type="submit" name="dispatch[discussion.add]">Отправить</button>
                                            </div>
                                            <input type="hidden" name="security_hash" class="cm-no-hide-input" value="e809baceaeeed99a23e1a09f43008161">
                                        </form>
                                    </div>
                                </div>
                                <!-- Inline script moved to the bottom of the page -->
                                <div class="ty-tabs cm-j-tabs clearfix">
                                    <ul class="ty-tabs__list">
                                        <li id="description" class="ty-tabs__item cm-js active"><a class="ty-tabs__a">Описание</a></li>
                                        <li id="features" class="ty-tabs__item cm-js"><a class="ty-tabs__a">Особенности</a></li>
                                        <li id="discussion" class="ty-tabs__item cm-js"><a class="ty-tabs__a">Отзывы</a></li>
                                    </ul>
                                </div>
                                <div class="cm-tabs-content ty-tabs__content clearfix" id="tabs_content">
                                    <div id="content_description" class="ty-wysiwyg-content content-description">
                                        <div>
                                            <p><span style="font-size: small;">Глянцевая поверхность ASUS CP6130 придает им элегантности, а бросающиаяся в глаза кнопка включения уместно расположена в середине корпуса. </span></p>
                                        </div>
                                    </div>
                                    <?= ProductContentFeatures::widget([
                                        'product' => $product,
                                    ]) ?>
                                    <div id="content_files" class="ty-wysiwyg-content content-files">
                                    </div>
                                    <div id="content_tags" class="ty-wysiwyg-content content-tags">
                                    </div>
                                    <div id="content_attachments" class="ty-wysiwyg-content content-attachments">
                                    </div>
                                    <div id="content_discussion" class="ty-wysiwyg-content content-discussion hidden">
                                        <div class="discussion-block" id="content_discussion_block">
                                            <div id="posts_list_214">
                                                <div class="ty-pagination-container cm-pagination-container" id="pagination_contents_comments_214">
                                                    <div class="ty-discussion-post__content ty-mb-l">
                                                        <div class="ty-discussion-post " id="post_27">
                                             <span itemscope="" itemtype="http://schema.org/Review">
                                                <span itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
                                                   <meta itemprop="ratingValue" content="3">
                                                </span>
                                                <meta itemprop="itemReviewed" content="ASUS CP6130">
                                                <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                                   <meta itemprop="name" content="Виктор Вединов">
                                                </span>
                                                <meta itemprop="datePublished" content="2014-09-09">
                                                <meta itemprop="reviewBody" content="Небольшой (вполне уместится на письменном столе), высокая пропускная способность видеокарты в текущем ценовом диапазоне, система восстановления ОС (активируется нажатием F9).
                                                   Недостаток: При первом запуске монитор не показывает картинку, нужно подождать несколько минут не выключая компьютер.">
                                             </span>
                                                            <div class="row-fluid">
                                                                <div class="span3">
                                                                    <span class="ty-discussion-post__author">Виктор Вединов</span>
                                                                    <div class="clearfix ty-discussion-post__rating">
                                                      <span class="ty-nowrap ty-stars">
                                                      <i class="ty-stars__icon ty-icon-star"></i>
                                                      <i class="ty-stars__icon ty-icon-star"></i>
                                                      <i class="ty-stars__icon ty-icon-star"></i>
                                                      <i class="ty-stars__icon ty-icon-star-empty"></i>
                                                      <i class="ty-stars__icon ty-icon-star-empty"></i>
                                                      </span>
                                                                    </div>
                                                                    <p><span class="ty-discussion-post__date">09/09/2014, 04:36</span></p>
                                                                </div>
                                                                <div class="span13">
                                                                    <div class="ty-discussion-post__message">Небольшой (вполне уместится на письменном столе), высокая пропускная способность видеокарты в текущем ценовом диапазоне, система восстановления ОС (активируется нажатием F9).<br>
                                                                        <br>
                                                                        Недостаток: При первом запуске монитор не показывает картинку, нужно подождать несколько минут не выключая компьютер.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ty-discussion-post__content ty-mb-l">
                                                        <div class="ty-discussion-post " id="post_26">
                                             <span itemscope="" itemtype="http://schema.org/Review">
                                                <span itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
                                                   <meta itemprop="ratingValue" content="4">
                                                </span>
                                                <meta itemprop="itemReviewed" content="ASUS CP6130">
                                                <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                                   <meta itemprop="name" content="Раиса Малышева">
                                                </span>
                                                <meta itemprop="datePublished" content="2014-09-08">
                                                <meta itemprop="reviewBody" content="Прекрасный компьютер. Покупался для домашнего пользования. Подключен к телевизору 42&amp;quot;. Компактный корпус, влезет куда угодно.">
                                             </span>
                                                            <div class="row-fluid">
                                                                <div class="span3">
                                                                    <span class="ty-discussion-post__author">Раиса Малышева</span>
                                                                    <div class="clearfix ty-discussion-post__rating">
                                                      <span class="ty-nowrap ty-stars">
                                                      <i class="ty-stars__icon ty-icon-star"></i>
                                                      <i class="ty-stars__icon ty-icon-star"></i>
                                                      <i class="ty-stars__icon ty-icon-star"></i>
                                                      <i class="ty-stars__icon ty-icon-star"></i>
                                                      <i class="ty-stars__icon ty-icon-star-empty"></i>
                                                      </span>
                                                                    </div>
                                                                    <p><span class="ty-discussion-post__date">09/08/2014, 05:13</span></p>
                                                                </div>
                                                                <div class="span13">
                                                                    <div class="ty-discussion-post__message">Прекрасный компьютер. Покупался для домашнего пользования. Подключен к телевизору 42". Компактный корпус, влезет куда угодно.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--pagination_contents_comments_214-->
                                                </div>
                                                <!--posts_list_214-->
                                            </div>
                                            <div class="ty-discussion-post__buttons buttons-container">
                                                <a class="ty-btn cm-dialog-opener cm-dialog-auto-size ty-btn__primary " rel="nofollow" data-ca-target-id="new_post_dialog_214">Написать отзыв</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="content_required_products" class="ty-wysiwyg-content content-required_products">
                                    </div>
                                    <div id="content_ab__deal_of_the_day" class="ty-wysiwyg-content content-ab__deal_of_the_day">
                                    </div>
                                </div>
                            </div>
                            <div class="product-details"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid-row container-fluid-row-full-width b-top">
            <div class="row-fluid ">
                <div class="span16 ">
                    <div class="ty-wysiwyg-content" data-ca-live-editor-object-id="0" data-ca-live-editor-object-type="">
                        <div class="row-fluid benefits">
                            <div class="span5 benefit delivery">
                                <i class="uni-delivery-truck"></i>
                                <div class="content">
                                    <header><a href="http://demo.cs-cart.ru/stores/0074ef20992a3836/oplata-i-dostavka/" rel="nofollow">Быстро и качественно доставляем</a></header>
                                    <p>Наша компания производит доставку по всей России и ближнему зарубежью</p>
                                </div>
                            </div>
                            <div class="span6 benefit warranty">
                                <i class="uni-shield"></i>
                                <div class="content">
                                    <header><a href="http://demo.cs-cart.ru/stores/0074ef20992a3836/garantiya-nizkoy-ceny/" rel="nofollow">Гарантия качества и сервисное обслуживание</a></header>
                                    <p>Мы предлагаем только те товары, в качестве которых мы уверены</p>
                                </div>
                            </div>
                            <div class="span5 benefit exchange">
                                <i class="uni-money"></i>
                                <div class="content">
                                    <header><a href="http://demo.cs-cart.ru/stores/0074ef20992a3836/vozvrat/" rel="nofollow">Возврат товара в течение 30 дней</a></header>
                                    <p>У вас есть 30 дней, для того чтобы протестировать вашу покупку</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>