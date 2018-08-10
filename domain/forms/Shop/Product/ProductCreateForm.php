<?php

namespace domain\forms\Shop\Product;

use domain\entities\Shop\Group;
use domain\entities\Shop\Product\Product;
use yii\web\UploadedFile;

/**
 * Class ProductCreateForm
 * @package domain\forms\Shop\Product
 *
 * @property int $categoryId
 */
class ProductCreateForm extends ExtensionForm
{
    public $code;
    public $name;
    public $slug;
    public $price;
    public $brandId;
    public $description;
    public $groups;
    public $status;
    public $pictures;
    public $weight;
    public $quantity;

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
            [['code', 'name', 'slug', 'price', 'brandId', 'status', 'weight', 'quantity'], 'required'],
            [['code', 'name', 'slug'], 'string', 'max' => 255],
            [['price', 'brandId', 'weight', 'quantity'], 'integer'],
            [['status'], 'in', 'range' => [Product::STATUS_ACTIVE, Product::STATUS_HIDE]],
            [['description'], 'string'],
            [['pictures'], 'file', 'extensions' => 'png, jpg', 'maxFiles' => 4],
//            [['slug'], 'unique'],
        ];
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function beforeValidate()
    {
        $this->pictures = UploadedFile::getInstances($this, 'pictures');

        return parent::beforeValidate();
    }

    protected function compositeForms()
    {
        return [
            'groups' => ['attributes', 'ValueForm'],
        ];
    }
}