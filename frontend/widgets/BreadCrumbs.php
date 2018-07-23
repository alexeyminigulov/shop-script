<?php

namespace frontend\widgets;

use domain\entities\Shop\Category;
use yii\base\Widget;

class BreadCrumbs extends Widget
{
    /* @var $categories Category[] */
    public $categories;

    public function run()
    {
        $result = $this->getTemplate();

        return $result;
    }

    private function getTemplate()
    {
        $tplBreadCrumbs = '';
        foreach ($this->categories as $key => $category) {
            $lastElem = $key == count($this->categories) - 1;
            $tplBreadCrumbs .= $this->render('_breadCrumb', [
                'category' => $category,
                'lastElem' => $lastElem,
            ]);
        }

        return $this->render('breadCrumbs', [
            'tplBreadCrumbs' => $tplBreadCrumbs,
        ]);
    }
}
