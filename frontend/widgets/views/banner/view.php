<?php

/* @var $this \yii\web\View */
/* @var $banners \domain\entities\Shop\Manager\Banner[] */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<div id="banner_slider_3956" class="banners owl-carousel">
    <?php foreach ($banners as $banner): ?>

        <?= $this->render('_template', ['banner' => $banner]) ?>

    <?php endforeach; ?>
</div>