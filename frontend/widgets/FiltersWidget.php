<?php

namespace frontend\widgets;

use domain\entities\Shop\Attribute\Attribute;
use domain\entities\Shop\Filter;
use domain\forms\Shop\Search\SearchForm;
use Yii;
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

        $tplFilters = '';

//        foreach ($this->filters as $filter) {
//            $tplFilters .= $this->getTplFilter($filter);
//        }

        $result = $this->getTemplate($tplFilters);

        return $result;
    }

    private function registerClientScript()
    {
        $view = $this->getView();
        FiltersAsset::register($view);
    }

//    private function getTplFilter(Filter $filter)
//    {
//        $attribute = $filter->attribute0;
//
//        if ($attribute->type == Attribute::TYPE_INTEGER) {
//
//            return $this->render('filters/_integer', [
//                'attribute' => $attribute,
//            ]);
//
//        } else if ($attribute->type == Attribute::TYPE_CHECKBOX) {
//
//            return $this->render('filters/_checkbox', [
//                'attribute' => $attribute,
//            ]);
//
//        }
//        return '';
//    }
//
    private function getTemplate($tplFilters)
    {
        return $this->render('filters/view', ['model' => $this->model]);
    }
}
