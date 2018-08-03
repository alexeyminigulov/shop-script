<?php

/* @var $this yii\web\View */
/* @var $model domain\entities\Shop\DeliveryMethod */

$this->title = 'Update DeliveryMethod: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'DeliveryMethods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="delivery-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>