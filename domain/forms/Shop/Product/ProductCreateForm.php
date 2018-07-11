<?php

namespace domain\forms\Shop\Product;

use domain\entities\Shop\Group;
use domain\repositories\Shop\CategoryRepository;
use domain\repositories\Shop\ProductRepository;
use domain\services\Shop\ProductService;
use yii\base\Model;

class ProductCreateForm extends Model
{
    public $name;
    public $slug;
    public $price;
    public $groups;

    private $service;

    public function __construct($categoryId, $config = [])
    {
        parent::__construct($config);

        $this->service = new ProductService(new ProductRepository(), new CategoryRepository());

        $this->groups = array_map(function (Group $group) {
            return new GroupForm($group);
        }, $this->service->getGroups($categoryId));
    }

    public function rules()
    {
        return [
            [['name', 'slug', 'price'], 'required'],
            [['name', 'slug'], 'string', 'max' => 255],
            [['price'], 'integer'],
        ];
    }
}