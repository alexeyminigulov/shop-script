<?php

namespace frontend\widgets;

use yii\base\Widget;
use yii\data\ActiveDataProvider;

class ProductsWidget extends Widget
{
    /** @var $dataProvider \yii\data\ActiveDataProvider */
    public $dataProvider;

    public function init()
    {
        parent::init();
        if (!$this->dataProvider instanceof ActiveDataProvider) {
            throw new \DomainException('Variable $dataProvider is not instance of ActiveDataProvider');
        }
    }

    public function run()
    {
        $result = $this->getTemplate();

        return $result;
    }

    private function getTemplate()
    {
        return $this->render('products/view', ['dataProvider' => $this->dataProvider]);
    }
}