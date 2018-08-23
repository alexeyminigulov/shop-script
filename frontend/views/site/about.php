<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\forms\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\Breadcrumbs;

$this->title = 'Информация';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="tygh-content clearfix">
    <div class="container-fluid content-grid">

        <div class="container-fluid-row">
            <div class="row-fluid ">
                <div class="span16 breadcrumbs-grid">
                    <div id="breadcrumbs_10">
                        <?= Breadcrumbs::widget([
                            'homeLink' => ['label' => 'Главная', 'url' => Yii::$app->homeUrl],
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                            'options' => [
                                'class' => 'ty-breadcrumbs clearfix breadcrumb',
                                'style' => 'background-color:#fff;border-bottom:0px;'
                            ],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid-row">
            <div class="row-fluid ">
                <div class="span16 ">
                    <div class="ty-mainbox-container clearfix about-company-desc">
                        <div class="ty-mainbox-title"><?= Html::encode($this->title) ?></div>
                        <div class="ty-mainbox-body">
                            <div class="ty-wysiwyg-content">
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
                            <div class="ty-wysiwyg-content">
                                <div class="ty-social-link-block">
                                    <div class="ty-mainbox-title">Присоединяйтесь!</div>
                                    <div class="ty-uppercase ty-social-link__title">Вступайте к нам в группу<br>и узнавайте первыми все акции и предложения!</div>
                                    <div class="ty-social-link facebook">
                                        <a target="_blank" href="/"><i class="uni-facebook"></i></a>
                                    </div>
                                    <div class="ty-social-link vk">
                                        <a target="_blank" href="/"><i class="uni-vk"></i></a>
                                    </div>
                                    <div class="ty-social-link twitter">
                                        <a target="_blank" href="/"><i class="uni-twitter"></i></a>
                                    </div>
                                    <div class="ty-social-link google-plus">
                                        <a target="_blank" href="/"><i class="uni-google-plus"></i></a>
                                    </div>
                                    <div class="ty-social-link youtube">
                                        <a target="_blank" href="/"><i class="uni-youtube"></i></a>
                                    </div>
                                    <div class="ty-social-link linkedin">
                                        <a target="_blank" href="/"><i class="uni-linkedin"></i></a>
                                    </div>
                                    <div class="ty-social-link telegram">
                                        <a target="_blank" href="/"><i class="uni-telegram"></i></a>
                                    </div>
                                    <div class="ty-social-link dribbble">
                                        <a target="_blank" href="/"><i class="uni-dribbble"></i></a>
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