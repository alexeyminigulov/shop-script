<?php

namespace frontend\widgets;

use Yii;
use domain\entities\Shop\Group;
use yii\base\Widget;
use domain\entities\Shop\Product\Product;
use domain\repositories\Shop\ProductRepository;

class ProductContentFeatures extends Widget
{
    /* @var $product Product */
    public $product;
    /* @var $repository ProductRepository */
    private $repository;

    public function init()
    {
        $this->repository = Yii::$container->get(ProductRepository::class);
    }

    public function run()
    {
        $result = $this->getTemplate();

        return $result;
    }

    private function getTemplate()
    {
        $groups = $this->repository->getGroups($this->product->category_id);

        $productGroups = '';
        foreach ($groups as $group) {
            $productGroups .= $this->groupTemplate($group);
        }

        return $this->render('product-content-features/view', [
            'productGroups' => $productGroups,
        ]);
    }

    private function groupTemplate(Group $group)
    {
        $attributesTpl = '';
        foreach ($group->attributes0 as $attribute) {
            $attributesTpl .= $this->render('product-content-features/_attributeTemplate', [
                'attribute' => $attribute,
            ]);
        }

        return $this->render('product-content-features/_groupTemplate', [
            'group' => $group,
            'attributesTpl' => $attributesTpl,
        ]);
    }
}
