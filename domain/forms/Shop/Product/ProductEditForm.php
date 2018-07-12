<?php

namespace domain\forms\Shop\Product;

use domain\entities\Shop\Group;
use domain\entities\Shop\Product\Product;
use yii\base\Model;

/**
 * Class ProductCreateForm
 * @package domain\forms\Shop\Product
 *
 * @property int $categoryId
 */
class ProductEditForm extends Model
{
    public $id;
    public $name;
    public $slug;
    public $price;
    public $groups;

    private $product;

    /**
     * ProductCreateForm constructor.
     * @param Product $product
     * @param Group[] $groups
     * @param array $config
     */
    public function __construct(Product $product, array $groups, $config = [])
    {
        parent::__construct($config);

        $this->id = $product->id;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->price = $product->price;

        $this->product = $product;

        $this->groups = array_map(function (Group $group) {
            return new GroupForm($group, $this->id);
        }, $groups);
    }

    public function rules()
    {
        return [
            [['name', 'slug', 'price'], 'required'],
            [['name', 'slug'], 'string', 'max' => 255],
            [['price'], 'integer'],
//            [['slug'], 'unique'],
        ];
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function load($data, $formName = null)
    {
        $result = parent::load($data, $formName);
        if (!$result) {
            return false;
        }

        foreach ($this->compositeForms() as $scope) {

            if (isset($data[$scope])) {
                foreach ($this->groups as $group) {
                    foreach ($group->attributes as $attribute) {
                        /* @var $attribute ValueForm */
                        $attribute->setAttributes($data[$scope][$attribute->id]);
                    }
                }
            } else {
                return false;
            }
        }

        return true;
    }

    private function compositeForms()
    {
        return [
            'ValueForm',
        ];
    }
}