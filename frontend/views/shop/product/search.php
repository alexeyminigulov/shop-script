<?php

/* @var $this \yii\web\View */
/* @var $dataProvider \yii\data\ActiveDataProvider */

?>

<div class="tygh-content clearfix">
    <div class="container-fluid content-grid categories_grid">
        <div class="container-fluid-row">
            <div class="row-fluid ">

                <?= $this->render('_main-content', [
                    'dataProvider' => $dataProvider,
                ]) ?>

                <?= $this->render('_left') ?>
            </div>
        </div>
    </div>
</div>