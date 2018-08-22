<?php

namespace console\controllers;

use Yii;
use domain\entities\Shop\Brand;
use domain\entities\Shop\Category;
use Faker\Factory;
use yii\console\Controller;
use domain\entities\Shop\Attribute\Attribute;
use domain\entities\Shop\Product\Value;
use domain\repositories\Shop\CategoryRepository;
use domain\repositories\Shop\ProductRepository;
use domain\services\TransactionManager;
use domain\entities\Shop\Product\Product;

class SeedController extends Controller
{
    private $transaction;
    private $repository;
    private $repoCategory;

    public function __construct($id, $module,
                                TransactionManager $transaction, ProductRepository $repository,
                                CategoryRepository $repoCategory, $config = [])
    {
        parent::__construct($id, $module, $config);
        $this->transaction = $transaction;
        $this->repository = $repository;
        $this->repoCategory = $repoCategory;
    }

    public function actionIndex($categoryId, $count = 100)
    {
        for ($i = 0; $i < $count; $i++) {
            if ($i % 10 == 0) {
                echo 'Index $i: ' .$i. PHP_EOL;
            }
            $this->createProduct($categoryId);
        }
    }

    private function createProduct($categoryId): void
    {
        $faker = Factory::create();

        $product = Product::create($faker->numberBetween(1000, 9999), $faker->name, $faker->slug,
            $faker->numberBetween(50, $max = 80000), $categoryId, $faker->numberBetween(1, 3),
            $faker->text, 10,
            $faker->numberBetween(100, 20000), $faker->numberBetween(5, 40));


        $this->transaction->wrap(function () use ($product, $faker, $categoryId) {

            $this->repository->save($product);


            /** @var Attribute[] $attributes */
            $attributes = $this->repoCategory->getAttributes($categoryId);
            foreach ($attributes as $attribute) {
                if ($attribute->type == Attribute::TYPE_TEXT) {
                    $value = Value::create($product->id, $attribute->id, $faker->name);

                } else if ($attribute->type == Attribute::TYPE_INTEGER) {
                    $value = Value::create($product->id, $attribute->id, $faker->numberBetween(100, 1000));

                } else if ($attribute->type == Attribute::TYPE_BOOLEAN) {
                    $value = Value::create($product->id, $attribute->id, $faker->boolean);

                } else if ($attribute->type == Attribute::TYPE_NUMBER) {
                    $value = Value::create($product->id, $attribute->id, $faker->randomFloat(2, $min = 10, 50));

                } else if ($attribute->type == Attribute::TYPE_RADIO_BUTTON) {
                    $items = $attribute->getItems()->column();
                    $value = Value::create($product->id, $attribute->id, $faker->randomElements($items, 1, false)[0]);

                } else if ($attribute->type == Attribute::TYPE_CHECKBOX) {
                    $items = $attribute->getItems()->column();
                    $count = $faker->numberBetween(1,3);
                    foreach ($faker->randomElements($items, $count, false) as $item) {
                        $value = Value::create($product->id, $attribute->id, $item);
                        $product->assignmentValue($value);
                    }
                    continue;
                }
                $product->assignmentValue($value);
            }



            $this->repository->save($product, false);
        });
    }

    public function actionBrand()
    {
        $brand = Brand::create('Acer', 'acer');
        $brand->save();

        $brand = Brand::create('Lenova', 'lenova');
        $brand->save();

        $brand = Brand::create('Apple', 'apple');
        $brand->save();

        $brand = Brand::create('Adidas', 'adidas');
        $brand->save();

        $brand = Brand::create('Samsung', 'samsung');
        $brand->save();

        $brand = Brand::create('Lg', 'lg');
        $brand->save();
    }

    public function actionCategory()
    {
        $parentCategory = Category::findOne(['id' => 1]);
        $category = Category::create('Electronic', 'electronic', $parentCategory);
        $category->save();

        $parentCategory = Category::findOne(['id' => 2]);
        $category = Category::create('Computers', 'Computers', $parentCategory);
        $category->save();

        $parentCategory = Category::findOne(['id' => 3]);
        $category = Category::create('PC', 'pc', $parentCategory);
        $category->save();

        $parentCategory = Category::findOne(['id' => 1]);
        $category = Category::create('Clothes', 'clothes', $parentCategory);
        $category->save();

        $parentCategory = Category::findOne(['id' => 5]);
        $category = Category::create('Man clothes', 'man-clothes', $parentCategory);
        $category->save();
    }
}