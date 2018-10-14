<?php

/* @var $this \yii\web\View */
/* @var $product \domain\entities\Shop\Product\Product */
/* @var $discussions \domain\entities\Shop\Discussion[] */

use yii\helpers\Html;
use frontend\widgets\RatingStars;
use yii\widgets\ActiveForm;

?>
<?php $form = ActiveForm::begin([
    'action' => ['shop/cart/add'],
    'options' => [
        'class' => 'cm-disable-empty-files cm-ajax cm-ajax-full-render cm-ajax-status-middle cm-processed-form',
    ]
]); ?>
    <div class="advanced-layer-01">
        <div class="ty-product-block__rating">
            <div class="ty-discussion__rating-wrapper" id="average_rating_product">
                <?= RatingStars::widget(['rating' => $product->rating]) ?>
                <a class="ty-discussion__review-a cm-external-click" data-ca-scroll="content_discussion" data-ca-external-click-id="discussion">
                    <?= Html::encode(count($discussions)) ?> Отзыва</a>
                <a class="ty-discussion__review-write cm-dialog-opener cm-dialog-auto-size" data-ca-target-id="new_post_dialog_214" rel="nofollow">
                    Написать отзыв
                </a>
            </div>
        </div>
        <div class="ty-product-block__sku">
            <div class="ty-control-group ty-sku-item cm-hidden-wrapper cm-reload-214" id="sku_update_214">
                <input type="hidden" name="AddProductForm[productCode]" value="<?= $product->code ?>">
                <label class="ty-control-group__label" id="sku_214">КОД:</label>
                <span class="ty-control-group__item"><?= $product->code ?></span>
            </div>
        </div>
    </div>
    <div class="show_info_block_in_product"></div>
    <div class="row-fluid">
        <div class="span8 ty-product-options-grid">
            <div class="prices-container price-wrap">
                <div class="ty-product-prices">
                    <span class="cm-reload-214 ty-list-price-block" id="old_price_update_214"></span>
                    <div class="ty-product-block__price-actual">
                        <span class="cm-reload-214 ty-price-update" id="price_update_214">
                           <span class="ty-price" id="line_discounted_price_214">
                               <bdi>
                                   <span class="ty-price-num"><?= Html::encode($product->price) ?></span>&nbsp;<span class="ty-price-num"><span class="ty-rub">Р</span></span>
                               </bdi>
                           </span>
                        </span>
                    </div>
                    <span class="cm-reload-214" id="line_discount_update_214"></span>
                </div>
            </div>
            <div class="cm-reload-214 stock-wrap" id="product_amount_update_214">
                <div class="ty-control-group product-list-field">
                    <label class="ty-control-group__label">Доступность:</label>
                    <span class="ty-qty-in-stock ty-control-group__item">
                        <i class="ty-icon-ok"></i> В наличии
                     </span>
                </div>
            </div>
            <div class="ty-product-block__advanced-option clearfix">
                <div class="cm-reload-214" id="advanced_options_update_214">
                    <input type="hidden" name="appearance[dont_show_points]" value="">
                    <div class="ty-reward-group">
                        <span class="ty-control-group__label product-list-field">Цена в баллах:</span>
                        <span class="ty-control-group__item" id="price_in_points_214"><bdi>38880 баллов</bdi></span>
                    </div>
                </div>
            </div>
            <div class="ty-product-block__field-group">
                <div class="block-qty-grid">
                    <div class="cm-reload-214" id="qty_update_214">
                        <input type="hidden" name="appearance[show_qty]" value="1">
                        <input type="hidden" name="appearance[capture_options_vs_qty]" value="">
                        <div class="ty-qty clearfix changer" id="qty_214">
                            <label class="ty-control-group__label" for="qty_count_214">Кол-во:</label>
                            <div class="ty-center ty-value-changer cm-value-changer">
                                <a class="cm-increase ty-value-changer__increase">+</a>
                                <input type="text" size="5" class="ty-value-changer__input cm-amount" id="qty_count_214" name="AddProductForm[amount]" value="1" data-ca-min-qty="1">
                                <a class="cm-decrease ty-value-changer__decrease">−</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ty-product-block__button">
                <div class="cm-reload-214 " id="add_to_cart_update_214">
                    <button class="ty-btn__primary ty-btn__big ty-btn__add-to-cart cm-form-dialog-closer ty-btn" type="submit">Купить</button>
                </div>
            </div>
            <div class="ty-product-list__feature" style="margin-top: 20px">
                <div class="cm-reload-214" id="dt_product_features_update_214">
                    <em>
                        <a href="http://demo.cs-cart.ru/stores/0074ef20992a3836/elektronika/kompyutery/nastolnye-pk/?features_hash=10-88">
                            <div class="ty-control-group"><span class="ty-product-feature__label">Бренд:</span><em>ASUS</em></div>
                        </a>
                    </em>
                </div>
            </div>
        </div>
    </div>
    <div class="advanced-buttons">
        <a class="ty-btn ty-btn__text ty-add-to-wish cm-submit text-button " id="button_wishlist_214" data-ca-dispatch="dispatch[wishlist.add..214]">Отложить</a>
        <a class="ty-btn ty-btn__text ty-add-to-compare cm-ajax cm-ajax-full-render text-button " href="http://demo.cs-cart.ru/stores/0074ef20992a3836/index.php?dispatch=product_features.add_product&amp;product_id=214&amp;redirect_url=index.php%3Fdispatch%3Dproducts.view%26product_id%3D214" rel="nofollow" data-ca-target-id="comparison_list,account_info*,abt__unitheme_compared_products">Сравнить</a>
        <a class="ty-btn share-link" onclick="$(this).next().toggleClass('hidden');"><i class="uni-share"></i>Поделиться</a>
        <div class="sb-block hidden">
            <ul class="ty-social-buttons">
                <li class="ty-social-buttons__inline">
                    <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.7a5ca036ea5299f1d2ebb2234731e35e.ru.html#dnt=false&amp;id=twitter-widget-0&amp;lang=ru&amp;original_referer=http%3A%2F%2Fdemo.cs-cart.ru%2Fstores%2F0074ef20992a3836%2Felektronika%2Fkompyutery%2Fnastolnye-pk%2Fasus-cp6130%2F&amp;size=m&amp;text=%D0%9A%D0%B0%D1%82%D0%B0%D0%BB%D0%BE%D0%B3%20%3A%3A%20%D0%AD%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D0%BD%D0%B8%D0%BA%D0%B0%20%3A%3A%20%D0%9A%D0%BE%D0%BC%D0%BF%D1%8C%D1%8E%D1%82%D0%B5%D1%80%D1%8B%20%3A%3A%20%D0%9D%D0%B0%D1%81%D1%82%D0%BE%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5%20%D0%9F%D0%9A%20%3A%3A%20ASUS%20CP6130&amp;time=1532363230382&amp;type=share&amp;url=http%3A%2F%2Fdemo.cs-cart.ru%2Fstores%2F0074ef20992a3836%2Felektronika%2Fkompyutery%2Fnastolnye-pk%2Fasus-cp6130%2F" style="position: static; visibility: visible; width: 77px; height: 20px;" data-url="http://demo.cs-cart.ru/stores/0074ef20992a3836/elektronika/kompyutery/nastolnye-pk/asus-cp6130/"></iframe>
                </li>
                <li class="ty-social-buttons__inline">
                    <div id="fb-root" class=" fb_reset">
                        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                            <div><iframe name="fb_xdm_frame_http" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="http://staticxx.facebook.com/connect/xd_arbiter/r/bSTT5dUx9MY.js?version=42#channel=f1115b7f111557&amp;origin=http%3A%2F%2Fdemo.cs-cart.ru" style="border: none;"></iframe><iframe name="fb_xdm_frame_https" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" src="https://staticxx.facebook.com/connect/xd_arbiter/r/bSTT5dUx9MY.js?version=42#channel=f1115b7f111557&amp;origin=http%3A%2F%2Fdemo.cs-cart.ru" style="border: none;"></iframe></div>
                        </div>
                        <div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
                            <div></div>
                        </div>
                    </div>
                    <div class="fb-like fb_iframe_widget" data-href="http://demo.cs-cart.ru/stores/0074ef20992a3836/elektronika/kompyutery/nastolnye-pk/asus-cp6130/" data-send="true" data-show-faces="false" data-action="like" data-font="arial" data-colorscheme="light" data-width="450" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=&amp;color_scheme=light&amp;container_width=0&amp;font=arial&amp;href=http%3A%2F%2Fdemo.cs-cart.ru%2Fstores%2F0074ef20992a3836%2Felektronika%2Fkompyutery%2Fnastolnye-pk%2Fasus-cp6130%2F&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=true&amp;show_faces=false&amp;width=450"><span style="vertical-align: bottom; width: 106px; height: 20px;"><iframe name="f32c6f6a433b5e" width="450px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/plugins/like.php?action=like&amp;app_id=&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FbSTT5dUx9MY.js%3Fversion%3D42%23cb%3Df2dbc16b8d58f6c%26domain%3Ddemo.cs-cart.ru%26origin%3Dhttp%253A%252F%252Fdemo.cs-cart.ru%252Ff1115b7f111557%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=0&amp;font=arial&amp;href=http%3A%2F%2Fdemo.cs-cart.ru%2Fstores%2F0074ef20992a3836%2Felektronika%2Fkompyutery%2Fnastolnye-pk%2Fasus-cp6130%2F&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;send=true&amp;show_faces=false&amp;width=450" style="border: none; visibility: visible; width: 106px; height: 20px;" class=""></iframe></span></div>
                </li>
                <li class="ty-social-buttons__inline">
                    <div id="___plusone_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 38px; height: 24px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 38px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 24px;" tabindex="0" vspace="0" width="100%" id="I0_1532363229981" name="I0_1532363229981" src="https://apis.google.com/u/0/se/0/_/+1/fastbutton?usegapi=1&amp;size=standard&amp;annotation=bubble&amp;align=left&amp;expandto=top&amp;recommendations=yes&amp;origin=http%3A%2F%2Fdemo.cs-cart.ru&amp;url=http%3A%2F%2Fdemo.cs-cart.ru%2Fstores%2F0074ef20992a3836%2Felektronika%2Fkompyutery%2Fnastolnye-pk%2Fasus-cp6130%2F&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.ru.aYCr97fX1-A.O%2Fam%3DwQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCNwePgFminONPcVuUVcy6CL3bJRwg%2Fm%3D__features__#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1532363229981&amp;_gfid=I0_1532363229981&amp;parent=http%3A%2F%2Fdemo.cs-cart.ru&amp;pfname=&amp;rpctoken=30006728" data-gapiattached="true" title="G+"></iframe></div>
                </li>
                <li class="ty-social-buttons__inline">
                    <a href="https://ru.pinterest.com/pin/create/button/?guid=uESn50GFc0Vc-1&amp;url=http%3A%2F%2Fdemo.cs-cart.ru%2Fstores%2F0074ef20992a3836%2Felektronika%2Fkompyutery%2Fnastolnye-pk%2Fasus-cp6130%2F&amp;media=http%3A%2F%2Fdemo.cs-cart.ru%2Fstores%2F0074ef20992a3836%2Fimages%2Fdetailed%2F0%2FP_50013287768924f3386bc5fe80.jpg&amp;description=%D0%93%D0%BB%D1%8F%D0%BD%D1%86%D0%B5%D0%B2%D0%B0%D1%8F%20%D0%BF%D0%BE%D0%B2%D0%B5%D1%80%D1%85%D0%BD%D0%BE%D1%81%D1%82%D1%8C%20ASUS%20CP6130%20%D0%BF%D1%80%D0%B8%D0%B4%D0%B0%D0%B5%D1%82%20%D0%B8%D0%BC%20%D1%8D%D0%BB%D0%B5%D0%B3%D0%B0%D0%BD%D1%82%D0%BD%D0%BE%D1%81%D1%82%D0%B8%2C%20%D0%B0%20%D0%B1%D1%80%D0%BE%D1%81%D0%B0%D1%8E%D1%89%D0%B8%D0%B0%D1%8F%D1%81%D1%8F%20%D0%B2%20%D0%B3%D0%BB%D0%B0%D0%B7%D0%B0%20%D0%BA%D0%BD%D0%BE%D0%BF%D0%BA%D0%B0%20%D0%B2%D0%BA%D0%BB%D1%8E%D1%87%D0%B5%D0%BD%D0%B8%D1%8F%20%D1%83%D0%BC%D0%B5%D1%81%D1%82%D0%BD%D0%BE%20%D1%80%D0%B0%D1%81%D0%BF%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B0...">Сохранить</a>
                </li>
            </ul>
        </div>
    </div>
<?php ActiveForm::end(); ?>