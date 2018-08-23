<?php

namespace frontend\widgets;

use Yii;
use domain\entities\Shop\Category;
use yii\widgets\Breadcrumbs as Widget;

class BreadCrumbs extends Widget
{
    /* @var $categories Category[] */
    public $categories;
    public $params;

    public function init()
    {
        parent::init();
        $this->options = [
            'class' => 'ty-breadcrumbs clearfix breadcrumb',
            'style' => 'background-color:#fff;border-bottom:0px;'
        ];

        $this->homeLink = ['label' => 'Главная', 'url' => Yii::$app->homeUrl];

        if ($this->categories) {

            $links = array_map(function ($category) {
                return ['label' => $category->name, 'url' => 'view?slug='. $category->slug];
            }, $this->categories);
            $lastKey = count($links)-1;
            unset($links[$lastKey]['url']);

            $this->links = $links;

        } else {
            $this->links = isset($this->params) ? $this->params : [];
        }
    }
}
