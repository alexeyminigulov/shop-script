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
class ProductCreateForm extends Model
{
    public $code;
    public $name;
    public $slug;
    public $price;
    public $brandId;
    public $description;
    public $groups;
    public $status;

    private $categoryId;

    /**
     * ProductCreateForm constructor.
     * @param int $categoryId
     * @param Group[] $groups
     * @param array $config
     */
    public function __construct($categoryId, array $groups, $config = [])
    {
        parent::__construct($config);

        $this->categoryId = $categoryId;
        $this->groups = array_map(function (Group $group) {
            return new GroupForm($group);
        }, $groups);
    }

    public function rules()
    {
        return [
            [['code', 'name', 'slug', 'price', 'brandId', 'status'], 'required'],
            [['code', 'name', 'slug'], 'string', 'max' => 255],
            [['price', 'brandId'], 'integer'],
            [['status'], 'in', 'range' => [Product::STATUS_ACTIVE, Product::STATUS_HIDE]],
            [['description'], 'string'],
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

    public function validate($attributeNames = null, $clearErrors = true)
    {
        $result = parent::validate($attributeNames, $clearErrors);
        if (!$result) {
            return false;
        }
        foreach ($this->groups as $group) {
            foreach ($group->attributes as $attribute) {
                /* @var $attribute ValueForm */
                if (!$attribute->validate()) {
                    return false;
                }
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