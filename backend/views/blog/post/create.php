<?php

/* @var $this yii\web\View */
/* @var $model \domain\forms\Blog\PostForm */

$this->title = 'Create Post';
$this->params['breadcrumbs'][] = ['label' => 'Post', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>