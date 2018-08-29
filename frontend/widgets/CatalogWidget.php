<?php

namespace frontend\widgets;

use domain\entities\Shop\Category;
use domain\repositories\Shop\CategoryRepository;
use yii\base\Widget;

class CatalogWidget extends Widget
{
    /* @var $categories Category[] */
    private $categories;

    /* @var $repository CategoryRepository */
    private $repository;

    public function init()
    {
        parent::init();
        $this->repository = new CategoryRepository();
    }

    public function run()
    {
        $this->registerClientScript();

        return $this->tplCatalog();
    }

    private function registerClientScript()
    {
        $view = $this->getView();
        CatalogAsset::register($view);
    }

    private function tplCatalog()
    {
        $result = "";
        $this->categories = Category::find()->andWhere(['<>', 'id', 1])->orderBy('lft')->all();

        /** @var Category $category */
        foreach ($this->categories as $category) {
            if ($category->depth == 1)
            $result .= $this->firstLvlItem($category);
        }

        return $this->render('catalog/view', [
            'tplCategories' => $result,
        ]);
    }

    private function firstLvlItem(Category $category)
    {
        $children = $this->repository->getLoadedChildren($this->categories, $category->id);

        if (empty($children)) {
            return $this->render('catalog/_itemFirstLevel', [
                'category' => $category
            ]);
        }

        $secondLevel = $this->secondLvlUL($category);

        return $this->render('catalog/_firstLevel', [
            'category' => $category,
            'secondLevel' => $secondLevel,
        ]);
    }

    private function secondLvlUL(Category $category)
    {
        $result = '';

        $children = $this->repository->getLoadedChildren($this->categories, $category->id);

        if (!empty($children)) {

            $items = $this->subLi($category);

            $result = $this->render('catalog/_secondLevel', [
                'items' => $items,
            ]);
        }

        return $result;
    }

    private function subLi(Category $category)
    {
        $result = '';
        $subCategory = $this->repository->getLoadedChildren($this->categories, $category->id);
        $subCategory = array_chunk($subCategory, 3);

        foreach ($subCategory as $items) {
            $result .= $this->threeLi($items);
        }

        return $result;
    }

    public function threeLi(array $categories)
    {
        $items = '';

        foreach ($categories as $category) {
            $items .= $this->subTemplateLi($category);
        }

        $result = $this->render('catalog/_one-col-secondLevel', [
            'items' => $items,
        ]);

        return $result;
    }

    private function subTemplateLi(Category $category)
    {
        $thirdLevel = $this->getThirdItems($category);

        $templateLi = $this->render('catalog/_item-secondLevel', [
            'category' => $category,
            'blockThirdLevel' => $thirdLevel,
        ]);

        return $templateLi;
    }

    private function getThirdItems(Category $category)
    {
        $result = '';
        $children = $this->repository->getLoadedChildren($this->categories, $category->id);

        if (!empty($children)) {

            $items = '';
            $subCategories = $children;

            /** @var Category $subCategory */
            foreach ($subCategories as $subCategory) {
                $items .= $this->getThirdItem($subCategory);
            }

            if (count($subCategories) <= 4) {

                $result = $this->render('catalog/_smallThirdLevel', [
                    'items' => $items,
                ]);
            } else {

                $result = $this->render('catalog/_bigThirdLevel', [
                    'items' => $items,
                ]);
            }
        }

        return $result;
    }

    private function getThirdItem(Category $category)
    {
        return $this->render('catalog/_itemThirdLevel', [
            'category' => $category,
        ]);
    }
}
