<?php

/* @var $this \yii\web\View */
/* @var $posts \domain\entities\Blog\Post[] */

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
                                <a itemprop="item" href="<?= Yii::$app->homeUrl ?>" class="ty-breadcrumbs__a">
                                   <bdi>Главная</bdi>
                                </a>
                            </span>
                            <span class="ty-breadcrumbs__slash">/</span>
                            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <span itemprop="item" class="ty-breadcrumbs__current">
                                   <bdi>Новости</bdi>
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

                        <h1 class="ty-mainbox-title">Новости</h1>

                        <div class="ty-mainbox-body">
                            <div class="discussion-block" id="content_discussion">
                                <div id="posts_list_0">
                                    <div class="ty-pagination-container cm-pagination-container" id="pagination_contents_comments_0">
                                        <?php foreach ($posts as $post): ?>
                                        <div class="ty-discussion-post__content ty-mb-l">
                                            <div class="ty-discussion-post" id="post_130">
                                                <span itemscope="" itemtype="http://schema.org/Review">
                                                    <span itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
                                                        <meta itemprop="ratingValue" content="5">
                                                    </span>
                                                    <meta itemprop="itemReviewed" content="Simtech">
                                                    <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                                                        <meta itemprop="name" content="Петрова Анна">
                                                    </span>
                                                    <meta itemprop="datePublished" content="2014-08-03">
                                                    <meta itemprop="reviewBody" content="<?= Yii::$app->formatter->asNtext($post->description) ?>">
                                                </span>
                                                <div class="row-fluid">
                                                    <div class="span3">
                                                        <?= Html::img($post->getImageFileUrl('photo'), ['style' => 'max-width:120px;height:auto']) ?>
                                                        <p>
                                                            <span class="ty-discussion-post__date">08/03/2014, 20:56</span>
                                                        </p>
                                                    </div>
                                                    <div class="span13">
                                                        <div class="ty-discussion-post__message">
                                                            <?= Yii::$app->formatter->asNtext($post->description) ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
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