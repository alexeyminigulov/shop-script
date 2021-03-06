<?php

namespace domain\forms\Shop\Product;

use domain\entities\Shop\Group;
use domain\entities\Shop\Product\Product;
use yii\base\Model;
use yii\web\UploadedFile;

/**
 * Class ProductCreateForm
 * @package domain\forms\Shop\Product
 *
 * @property int $categoryId
 */
class ProductEditForm extends ExtensionForm
{
    public $id;
    public $code;
    public $name;
    public $slug;
    public $brandId;
    public $description;
    public $price;
    public $groups;
    public $status;
    public $pictures;
    public $weight;
    public $quantity;

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
        $this->code = $product->code;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->brandId = $product->brand_id;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->status = $product->status;
        $this->pictures = $product->pictures;
        $this->weight = $product->weight;
        $this->quantity = $product->quantity;

        $this->product = $product;

        $this->groups = array_map(function (Group $group) {
            return new GroupForm($group, $this->id);
        }, $groups);
    }

    public function rules()
    {
        return [
            [['code', 'name', 'slug', 'price', 'brandId', 'status', 'weight', 'quantity'], 'required'],
            [['code', 'name', 'slug'], 'string', 'max' => 255],
            [['price', 'weight', 'quantity'], 'integer'],
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