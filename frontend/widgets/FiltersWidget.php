<?php

namespace frontend\widgets;

use Yii;
use domain\entities\Shop\Filter;
use domain\forms\Shop\Search\SearchForm;
use yii\base\Widget;
use domain\entities\Shop\Category;
use domain\repositories\Shop\CategoryRepository;

class FiltersWidget extends Widget
{
    /* @var $category Category */
    public $category;
    /* @var $model SearchForm */
    public $model;
    /** @var $filters Filter[] */
    private $filters;
    /* @var $categories CategoryRepository */
    private $categories;

    public function init()
    {
        parent::init();
        $this->categories = Yii::$container->get(CategoryRepository::class);
        $this->filters = $this->categories->getFilters($this->category->id);
    }

    public function run()
    {
        $this->registerClientScript();

        $result = $this->getTemplate();

        return $result;
    }

    private function registerClientScript()
    {
        $view = $this->getView();
        FiltersAsset::register($view);
    }

    private function getTemplate()
    {
        return $this->render('filters/view', ['model' => $this->model]);
    }
}
