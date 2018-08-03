<?php

/* @var $this yii\web\View */
/* @var $model domain\entities\Shop\DeliveryMethod */

$this->title = 'Create DeliveryMethod';
$this->params['breadcrumbs'][] = ['label' => 'DeliveryMethods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="delivery-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
