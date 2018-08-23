<?php

/* @var $this yii\web\View */
/* @var $content string */

use frontend\widgets\BreadCrumbs;

$this->params['breadcrumbs'][] = $this->title;
?>

<?php $this->beginContent('@app/views/layouts/main.php'); ?>

<div class="tygh-content clearfix">
    <div class="container-fluid content-grid">

        <div class="container-fluid-row">
            <div class="row-fluid ">
                <div class="span16 breadcrumbs-grid">
                    <div id="breadcrumbs_10">
                        <?= BreadCrumbs::widget([
                            'params' => $this->params['breadcrumbs'],
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid-row">

            <?= $content ?>

        </div>

    </div>
</div>

<?php $this->endContent(); ?>