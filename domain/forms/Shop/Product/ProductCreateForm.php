<?php

namespace domain\forms\Shop\Product;

use domain\entities\Shop\Group;
use yii\base\Model;

/**
 * Class ProductCreateForm
 * @package domain\forms\Shop\Product
 *
 * @property int $categoryId
 */
class ProductCreateForm extends Model
{
    public $name;
    public $slug;
    public $price;
    public $groups;

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