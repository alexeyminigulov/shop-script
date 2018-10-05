<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model domain\entities\Shop\Discount */
/* @var $searchModel backend\forms\Shop\DiscountSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Discount';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="discount-index">

    <p>
        <?= Html::a('Create Discount', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [

            'id',
            'name',
            'percent',
            [
                'attribute' => 'from_date',
                'format' => 'date',
            ],
            [
                'attribute' => 'to_date',
                'format' => 'date',
            ],
            'active',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>