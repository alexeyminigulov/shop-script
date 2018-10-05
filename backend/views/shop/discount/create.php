<?php

/* @var $this yii\web\View */
/* @var $model domain\entities\Shop\Discount */

$this->title = 'Create Discount';
$this->params['breadcrumbs'][] = ['label' => 'Discount', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discount-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>