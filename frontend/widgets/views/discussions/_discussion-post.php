<?php

/* @var $this \yii\web\View */
/* @var $discussion \domain\entities\Shop\Discussion */

use yii\helpers\Html;

?>

<div class="ty-discussion-post__content ty-mb-l">
    <div class="ty-discussion-post" id="post_27">
         <span itemscope="" itemtype="http://schema.org/Review">
            <span itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
                <meta itemprop="ratingValue" content="3">
            </span>
            <meta itemprop="itemReviewed" content="ASUS CP6130">
            <span itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                <meta itemprop="name" content="<?= Html::encode($discussion->user->username) ?>">
            </span>
            <meta itemprop="datePublished" content="2014-09-09">
            <meta itemprop="reviewBody" content="<?= Html::encode($discussion->text) ?>">
         </span>
        <div class="row-fluid">
            <div class="span3">
                <span class="ty-discussion-post__author"><?= Html::encode($discussion->user->username) ?></span>
                <div class="clearfix ty-discussion-post__rating">
                    <span class="ty-nowrap ty-stars">
                        <?php
                        for ($i = 0; $i < 5; $i++) {
                            if ($discussion->rating > $i) {
                                echo '<i class="ty-stars__icon ty-icon-star"></i>';
                                continue;
                            }
                            echo '<i class="ty-stars__icon ty-icon-star-empty"></i>';
                        }
                        ?>
                    </span>
                </div>
                <p>
                    <span class="ty-discussion-post__date">09/09/2014, 04:36</span>
                </p>
            </div>
            <div class="span13">
                <div class="ty-discussion-post__message">
                    <?= Yii::$app->formatter->asNtext($discussion->text) ?>
                </div>
            </div>
        </div>
    </div>
</div>