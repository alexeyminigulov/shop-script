<?php

/* @var $this \yii\web\View */
/* @var $post \domain\entities\Blog\Post */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<div class="tygh-content clearfix">
    <div class="container-fluid  content-grid">
        <div class="container-fluid-row">
            <div class="row-fluid">
                <div class="span16 breadcrumbs-grid">
                    <div id="breadcrumbs_10">
                        <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="ty-breadcrumbs clearfix">
                            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <a itemprop="item" href="<?= Url::to(['blog/post/index']) ?>" class="ty-breadcrumbs__a">
                                   <bdi>Новости</bdi>
                                </a>
                            </span>
                            <span class="ty-breadcrumbs__slash">/</span>
                            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <span itemprop="item" class="ty-breadcrumbs__current">
                                   <bdi><?= Html::encode($post->title) ?></bdi>
                                </span>
                             </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid-row">
            <div class="row-fluid">
                <div class="span16 main-content-grid">
                    <div class="ty-mainbox-container clearfix">

                        <h1 class="ty-mainbox-title"><?= Yii::$app->formatter->asNtext($post->title) ?></h1>

                        <div class="ty-mainbox-body">
                            <?= Yii::$app->formatter->asHtml($post->content) ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>