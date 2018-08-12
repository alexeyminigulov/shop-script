<?php

namespace domain\entities\Shop\Product;

use domain\entities\Shop\Brand;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use domain\entities\Shop\Category;
use domain\entities\Shop\Attribute\Attribute;
use lhs\Yii2SaveRelationsBehavior\SaveRelationsBehavior;
use yii\web\UploadedFile;

/**
 * This is the model class for table "shop_products".
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $slug
 * @property int $price
 * @property int $category_id
 * @property int $brand_id
 * @property string $description
 * @property string $main_picture_id
 * @property string $status
 * @property int $weight
 * @property int $quantity
 *
 * @property Brand $brand
 * @property Value[] $values
 * @property Attribute[] $attributes0
 * @property Category $category
 * @property Picture[] $pictures
 * @property Picture $mainPicture
 */
class Product extends ActiveRecord
{
    const STATUS_ACTIVE = 10;
    const STATUS_HIDE = 0;

    public static function create($code, $name, $slug,
                                  $price, $categoryId, $brandId,
                                  $description, $status,
                                  $weight, $quantity): self
    {
        $product = new Product();
        $product->code = $code;
        $product->name = $name;
        $product->slug = $slug;
        $product->price = $price;
        $product->category_id = $categoryId;
        $product->brand_id = $brandId;
        $product->description = $description;
        $product->status = $status;
        $product->weight = $weight;
        $product->quantity = $quantity;

        return $product;
    }

    public function edit($code, $name, $slug,
                         $price, $brandId,
                         $description, $status,
                         $weight, $quantity)
    {
        $this->code = $code;
        $this->name = $name;
        $this->slug = $slug;
        $this->price = $price;
        $this->brand_id = $brandId;
        $this->description = $description;
        $this->status = $status;
        $this->weight = $weight;
        $this->quantity = $quantity;
    }

    public function checkout(int $quantity)
    {
        if ($this->quantity < $quantity) {
            throw new \DomainException('Only ' . $this->quantity . ' items are available.');
        }
        $this->quantity -= $quantity;
    }

    public function assignmentValue(Value $value)
    {
        $values = $this->values;
        $values[] = $value;
        $this->values = $values;
    }

    public function eraseValues()
    {
        $this->values = [];
    }

    public function assignPicture(Picture $picture)
    {
        $pictures = $this->pictures;
        $pictures[] = $picture;
        $this->pictures = $pictures;

        $this->populateRelation('mainPicture', reset($pictures));
    }

    public function deletePicture(Picture $picture, int $maxSort)
    {
        $pictures = $this->pictures;
        $sort = $picture->sort;

        foreach ($pictures as $key => $val) {

            if ($val->id == $picture->id) {
                if ($key == 0) {
                    if (count($pictures) < 2) {
                        throw new \DomainException('Last picture can\'t be removed');
                    }
                    $this->mainPicture = $pictures[1];
                }
                unset($pictures[$key]);
                break;
            }
        }

        if ($maxSort > $sort) {
            foreach ($pictures as &$val) {
                if ($val->sort == $maxSort) {
                    $val->sort = $sort;
                }
            }
        }
        $this->pictures = $pictures;
    }

    public function movePictureDown(Picture $picture)
    {
        $this->movePicture($picture, 1);
    }

    public function movePictureUp(Picture $picture)
    {
        $this->movePicture($picture, -1);
    }

    private function movePicture(Picture $picture, $step)
    {
        $pictures = $this->pictures;
        $photo = null;
        foreach ($pictures as &$image) {
            if ($picture->sort + $step == $image->sort) {
                $photo = clone $picture;
                $picture->sort = $image->sort;
                $image->sort = $photo->sort;
                if ($image->sort == 0) {
                    $this->mainPicture = $image;
                }
                break;
            }
        }
        if (!$photo) {
            return;
        }

        foreach ($pictures as &$image) {

            if ($image->id == $picture->id) {
                $image->sort = $picture->sort;
                if ($picture->sort == 0) {
                    $this->mainPicture = $picture;
                }
            }
        }

        $this->pictures = $pictures;
    }

    /**
     * ====================== Relation =======================
     */

    public function getValues()
    {
        return $this->hasMany(Value::className(), ['product_id' => 'id']);
    }

    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['id' => 'brand_id']);
    }

    public function getAttributes0()
    {
        return $this->hasMany(Attribute::className(), ['id' => 'attribute_id'])->viaTable('shop_values', ['product_id' => 'id']);
    }

    public function getCategory(): ActiveQuery
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    public function getPictures(): ActiveQuery
    {
        return $this->hasMany(Picture::className(), ['product_id' => 'id'])->orderBy('sort');
    }

    public function getMainPicture()
    {
        return $this->hasOne(Picture::className(), ['id' => 'main_picture_id']);
    }

    public function getDefaultPicture(): Picture
    {
        return Picture::findOne(['id', 1]);
    }

    public function behaviors()
    {
        return [
            [
                'class' => SaveRelationsBehavior::className(),
                'relations' => ['values', 'pictures', 'mainPicture'],
            ],
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
        $related = $this->getRelatedRecords();

        parent::afterSave($insert, $changedAttributes);

        if (key_exists('mainPicture', $related)) {

            $idPicture = $related['mainPicture']->id;
            $this->updateAttributes(['main_picture_id' => $idPicture]);
        }
    }


    public static function tableName()
    {
        return 'shop_products';
    }
}
