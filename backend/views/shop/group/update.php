<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model domain\entities\Shop\Group */

$this->title = 'Update Group: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="group-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
