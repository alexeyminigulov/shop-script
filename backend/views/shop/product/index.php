<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use domain\helpers\CategoryHelper;
use \domain\entities\Shop\Product\Product;

/* @var $this yii\web\View */
/* @var $searchModel backend\forms\Shop\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model \domain\forms\Shop\ProductSelectForm */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <div class="product-select-form">

        <?php $form = ActiveForm::begin([
                                'method' => 'GET',
                                'action' => Url::to(['shop/product/create'])
                            ]); ?>

        <?= $form->field($model, 'categoryId')->dropDownList(CategoryHelper::list(false), ['name' => 'id']) ?>

        <div class="form-group">
            <?= Html::submitButton('Create Product', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            'name',
            'slug',
            'price',
            [
                'label' => 'Category',
                'attribute' => 'category_id',
                'value' => function (Product $product) {
                    return $product->category->name;
                },
                'headerOptions' => ['class' => 'text-blue'],
                'filter' => CategoryHelper::list(false),
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
