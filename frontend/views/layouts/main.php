<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="ty-tygh" id="tygh_container">

    <div id="ajax_overlay" class="ty-ajax-overlay"></div>
    <div id="ajax_loading_box" class="ty-ajax-loading-box"></div>
    <div class="cm-notification-container notification-container"></div>
    <div class="ty-helper-container" id="tygh_main_container">

        <div class="tygh-top-panel clearfix">
            <div class="container-fluid  top-grid top-panel-padding">
                <div class="container-fluid-row ">
                    <div class="row-fluid ">
                        <div class="span16 ">
                            <div class="ty-ut-panel">
                                <div id="minimize_block" class="ty-ut-panel__wrapper">
                                    <div class="ty-ut-panel__title" style="margin: 0 15px;">Демо CS-Cart + Unitheme</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->render('_header') ?>

        <?= $content ?>

        <?= $this->render('_footer') ?>

    </div>
</div>






<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" data-no-defer></script>

<script type="text/javascript" src="<?= Yii::getAlias('@web/js/tygh.js') ?>"></script>
<script type="text/javascript">
    (function(_, $) {

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





<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>