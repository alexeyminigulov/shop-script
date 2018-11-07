<?php

namespace domain\entities\Shop\Product;

use yii\db\ActiveRecord;
use yii\web\UploadedFile;
use domain\services\Watermark;
use yiidreamteam\upload\ImageUploadBehavior;

/**
 * This is the model class for table "shop_pictures".
 *
 * @property int $id
 * @property int $product_id
 * @property string $picture
 * @property int $sort
 *
 * @mixin ImageUploadBehavior
 */
class Picture extends ActiveRecord
{
    public static function create($productId, $sort, UploadedFile $file)
    {
        $picture = new Picture();
        $picture->product_id = $productId;
        $picture->sort = $sort;
        $picture->picture = $file;

        return $picture;
    }

    public function edit(UploadedFile $file)
    {
        $this->picture = $file;
    }

    public function rules()
    {
        return [
            [['product_id', 'sort', 'picture'], 'required'],
            [['product_id', 'sort'], 'integer'],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => '\yiidreamteam\upload\ImageUploadBehavior',
                'createThumbsOnRequest' => true,
                'attribute' => 'picture',
                'thumbs' => [
                    'thumb' => ['width' => 400, 'height' => 300, 'processor' => [new Watermark(400, 300), 'processor']],
                    'thumb_40_40' => ['width' => 40, 'height' => 40, 'processor' => [new Watermark(40, 40), 'processor']],
                    'thumb_50_50' => ['width' => 50, 'height' => 50, 'processor' => [new Watermark(50, 50), 'processor']],
                    'thumb_120_120' => ['width' => 120, 'height' => 120, 'processor' => [new Watermark(120, 120), 'processor']],
                    'thumb_189_189' => ['width' => 189, 'height' => 189, 'processor' => [new Watermark(189, 189), 'processor']],
                    'thumb_400_350' => ['width' => 400, 'height' => 350, 'processor' => [new Watermark(400, 350), 'processor']],
                    'thumb_800_800' => ['width' => 800, 'height' => 800, 'processor' => [new Watermark(800, 800, '@frontend/web/image/logo.png'), 'processor']],
                ],
                'filePath' => '@static/products/origin/[[attribute_product_id]]/[[pk]].[[extension]]',
                'fileUrl' => '@staticUrl/products/origin/[[attribute_product_id]]/[[pk]].[[extension]]',
                'thumbPath' => '@static/products/cache/[[attribute_product_id]]/[[profile]]_[[pk]].[[extension]]',
                'thumbUrl' => '@staticUrl/products/cache/[[attribute_product_id]]/[[profile]]_[[pk]].[[extension]]',
            ],
        ];
    }

    public static function tableName()
    {
        return '{{%shop_pictures}}';
    }
}