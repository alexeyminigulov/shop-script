<?php

/* @var $this \yii\web\View */
/* @var $product \domain\entities\Shop\Product\Product */
/* @var $categories \domain\entities\Shop\Category[] */
/* @var $comment \domain\forms\Shop\Discussion\CommentForm */
/* @var $discussions \domain\entities\Shop\Discussion[] */

use yii\helpers\Html;
use frontend\widgets\BreadCrumbs;
use frontend\widgets\ProductContentFeatures;
use frontend\assets\JqueryZoomAsset;
use frontend\assets\MagnificPopup;
use yii\widgets\ActiveForm;
use frontend\widgets\DiscussionWidget;

JqueryZoomAsset::register($this);
MagnificPopup::register($this);
?>
<div class="tygh-content clearfix">
    <div class="container-fluid  content-grid full_width">
        <div class="container-fluid-row">
            <div class="row-fluid ">
                <div class="span16 main-content-grid row-container">
                    <div class="row-fluid ">
                        <div class="span16 ">
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
                                                    <?php foreach ($product->pictures as $key => $picture): ?>
                                                        <a class="cm-image-previewer cm-previewer ty-previewer<?= $key != 0 ? ' hidden' : '' ?>"
                                                           <?= "id='$key'" ?>
                                                           href="<?= $picture->getThumbFileUrl('picture', 'thumb_800_800') ?>"
                                                           data-ca-image-width="<?= $key == 0 ? '650' : '1000' ?>"
                                                           data-ca-image-height="<?= $key == 0 ? '650' : '1000' ?>">
                                                            <?= Html::img($picture->getThumbFileUrl('picture', 'thumb_400_350'), [
                                                                'class' => 'ty-pict cm-image',
                                                                'alt' => '',
                                                                'title' => '',
                                                            ]) ?>
                                                            <span class="ty-previewer__icon hidden-phone"></span>
                                                        </a>
                                                    <?php endforeach; ?>

                                                    <p class="ty-center"><small style="color:#999;">Наведите на картинку для увеличения</small></p>
                                                </div>
                                                <div class="ty-product-thumbnails ty-center cm-image-gallery" style="width: 400px;">
                                                    <?php foreach ($product->pictures as $key => $picture): ?>
                                                        <a <?= "data-ca-gallery-large-id='$key'" ?>
                                                                class="cm-thumbnails-mini ty-product-thumbnails__item<?= $key == 0 ? ' active' : '' ?>">
                                                            <?= Html::img($picture->getThumbFileUrl('picture', 'thumb_50_50')) ?>
                                                        </a>
                                                    <?php endforeach; ?>
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
                                        <?php $form = ActiveForm::begin([
                                            'action' => ['shop/product/comment', 'slug' => $product->slug],
                                            'options' => [
                                                'class' => 'posts-form cm-processed-form',
                                                'name' => 'add_post_form',
                                                'id' => 'add_post_form_214',
                                            ]
                                        ]); ?>

                                            <?= $form->field($comment, 'productId', [
                                                'options' => ['class' => ''],
                                            ])->hiddenInput()->label(false) ?>

                                            <div id="new_post_214">
                                                <div class="ty-control-group">
                                                    <label for="rating_214" class="ty-control-group__title cm-required cm-multiple-radios">Ваша оценка</label>
                                                    <div class="clearfix cm-field-container">
                                                        <div class="ty-rating" id="rating_214">
                                                            <input type="radio" id="rating_214_5" class="ty-rating__check" name="CommentForm[rating]" value="5"><label class="ty-rating__label" for="rating_214_5" title="Отлично!">Отлично!</label>
                                                            <input type="radio" id="rating_214_4" class="ty-rating__check" name="CommentForm[rating]" value="4"><label class="ty-rating__label" for="rating_214_4" title="Очень хорошо">Очень хорошо</label>
                                                            <input type="radio" id="rating_214_3" class="ty-rating__check" name="CommentForm[rating]" value="3"><label class="ty-rating__label" for="rating_214_3" title="Сносно">Сносно</label>
                                                            <input type="radio" id="rating_214_2" class="ty-rating__check" name="CommentForm[rating]" value="2"><label class="ty-rating__label" for="rating_214_2" title="Плохо">Плохо</label>
                                                            <input type="radio" id="rating_214_1" class="ty-rating__check" name="CommentForm[rating]" value="1"><label class="ty-rating__label" for="rating_214_1" title="Очень плохо">Очень плохо</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?= $form->field($comment, 'text', [
                                                    'options' => [
                                                        'class' => 'ty-control-group',
                                                    ],
                                                    'labelOptions' => ['class' => 'ty-control-group__title'],
                                                ])->textarea([
                                                    'id' => 'dsc_message_214',
                                                    'class' => 'ty-input-textarea ty-input-text-large',
                                                    'rows' => '5',
                                                    'cols' => '72',
                                                ])->label('Ваше сообщение') ?>
                                            </div>

                                            <div class="buttons-container">
                                                <button class="ty-btn__secondary ty-btn" type="submit" name="dispatch[discussion.add]">Отправить</button>
                                            </div>
                                        <?php ActiveForm::end(); ?>
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
                                        <?= DiscussionWidget::widget([
                                                'discussions' => $discussions,
                                        ]) ?>
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

<?php

$js = '';

foreach ($product->pictures as $key => $picture) {
    $url = $picture->getThumbFileUrl('picture', 'thumb_800_800');
    $js .= "$('#$key').zoom({
        url: '$url',
        callback: function(){
        $(this).colorbox({href: this.src});
        }
      });";
}

$this->registerJs($js);

?>

<?php

$js = "$('a.cm-image-previewer.cm-previewer.ty-previewer').magnificPopup({
        type: 'image',
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true
		},
        gallery: {
          enabled: true 
        },
	})";

$this->registerJs($js);

?>
