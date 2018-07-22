<?php

namespace frontend\widgets;

use domain\entities\Shop\Category;
use yii\base\Widget;

class CatalogWidget extends Widget
{
    public function run()
    {
        $this->registerClientScript();

        $result = "";
        $categories = Category::find()->andWhere(['<>', 'id', 1])
            ->andWhere(['depth' => 1])->orderBy('lft')->all();

        /** @var Category $category */
        foreach ($categories as $category) {
            $result .= $this->firstLvlItem($category);
        }

        return <<<EOF
                <div class='span4 vertical-menu-grid'>
                    <div class='shader'></div>
                    
                    <div class='ty-dropdown-box  cat-menu-vertical cat-menu-vertical'>
                    
                        <div id='sw_dropdown_3943' class='ty-dropdown-box__title cm-combination '>
                            <a>Каталог товаров</a>
                        </div>
                        
                        <div id='dropdown_3943' class='cm-popup-box ty-dropdown-box__content hidden'>
                            <ul class='ty-menu__items cm-responsive-menu'>

                            $result
                            
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>
EOF;
    }

    private function registerClientScript()
    {
        $view = $this->getView();
        CatalogAsset::register($view);
    }

    private function firstLvlItem(Category $category)
    {
        if (empty($category->children)) {
            return "<li class='ty-menu__item ty-menu__item-nodrop first-lvl ty-menu-item__newest hidden-tablet'><a href='/shop/catalog/view?slug=dsdad' class='ty-menu__item-link a-first-lvl'><div class='menu-lvl-ctn'>$category->name</div></a></li>";
        }

        $subUl = $this->secondLvlUL($category);

        $templateLI = <<<EOF
            <li class='ty-menu__item cm-menu-item-responsive first-lvl ty-menu-item__apparel'>
                <a class='ty-menu__item-toggle visible-phone cm-responsive-menu-toggle'><i class='ty-menu__icon-open ty-icon-down-open'></i><i class='ty-menu__icon-hide ty-icon-up-open'></i></a>
                <a  href='http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/odezhda/' class='ty-menu__item-link a-first-lvl'>
                    <div class='menu-lvl-ctn'>$category->name<i class='icon-right-dir'></i></div>
                </a>
                $subUl
            </li>
EOF;

        return $templateLI;
    }

    private function secondLvlUL(Category $category)
    {
        $result = '';

        if (!empty($category->children)) {

            $subItems = '';

            $subItems .= $this->subLi($category);

            $result = <<<EOF
                        <div class='ty-menu__submenu' id='topmenu_115_03ea5ca549307ab8827848394c3a205d'>
                            <ul class='ty-menu__submenu-items cm-responsive-menu-submenu dropdown-column-item  dropdown-3columns with-pic clearfix'>
                                $subItems
                            </ul>
                        </div>
EOF;
        }

        return $result;
    }

    private function subLi(Category $category)
    {
        $result = '';
        $subCategory = $category->children;
        $subCategory = array_chunk($subCategory, 3);

        foreach ($subCategory as $items) {
            $result .= $this->threeLi($items);
        }

        return $result;
    }

    public function threeLi(array $categories)
    {
        $itemsLi = '';

        foreach ($categories as $category) {
            $itemsLi .= $this->subTemplateLi($category);
        }

        $result = <<<EOF
                        <li>
                            <ul class='ty-menu__submenu-col'>
                                $itemsLi
                            </ul>
                        </li>
EOF;

        return $result;
    }

    private function subTemplateLi(Category $category)
    {
        $thirdLvl = $this->getThirdItems($category);

        $templateLi = <<<EOF
            <li class='ty-top-mine__submenu-col second-lvl'>
                <div class='ty-menu__submenu-item-header '><a href='http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/odezhda/muzhskaya-odezhda/' class='ty-menu__submenu-link'>$category->name</a></div>
                <a class='ty-menu__item-toggle visible-phone cm-responsive-menu-toggle'><i class='ty-menu__icon-open ty-icon-down-open'></i><i class='ty-menu__icon-hide ty-icon-up-open'></i></a>
                $thirdLvl
            </li>
EOF;

        return $templateLi;
    }

    private function getThirdItems(Category $category)
    {
        $result = '';

        if (!empty($category->children)) {

            $subItems = '';
            $subCategories = $category->children;

            /** @var Category $subCategory */
            foreach ($subCategories as $subCategory) {
                $subItems .= $this->getThirdItem($subCategory);
            }

            if (count($subCategories) <= 4) {
                $result = <<<EOF
                    <div class='ty-menu__submenu'>
                        <ul class='ty-menu__submenu-list cm-responsive-menu-submenu' >
                            $subItems
                        </ul>
                    </div>
EOF;
            } else {

                $result = <<<EOF
                    <div class='ty-menu__submenu'>
                        <ul class='ty-menu__submenu-list hiddenCol cm-responsive-menu-submenu' style='height: 95px;'>
                            $subItems
                        </ul>
                        <a href='javascript:void(0);' onMouseOver='$(this).prev().addClass("view");$(this).addClass("hidden");' class='ty-menu__submenu-link-more'>Еще <i class='ty-icon-plus-circle'></i></a>
                    </div>
EOF;

            }
        }

        return $result;
    }

    private function getThirdItem(Category $category)
    {
        return "<li class='ty-menu__submenu-item'><a href='http://demo.cs-cart.ru/stores/8ae4a590ed09f99f/odezhda/chasy-i-dragocennosti/remeshki/' class='ty-menu__submenu-link'>$category->name</a></li>";
    }
}
