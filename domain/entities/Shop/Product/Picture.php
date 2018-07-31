<?php

namespace domain\entities\Shop\Product;

use yii\db\ActiveRecord;
use yii\web\UploadedFile;
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
                    'thumb' => ['width' => 400, 'height' => 300],
                    'thumb_50_50' => ['width' => 50, 'height' => 50],
                    'thumb_189_189' => ['width' => 189, 'height' => 189],
                    'thumb_400_350' => ['width' => 400, 'height' => 350],
                ],
                'filePath' => '@static/[[pk]].[[extension]]',
                'fileUrl' => '@staticUrl/[[pk]].[[extension]]',
                'thumbPath' => '@static/[[profile]]_[[pk]].[[extension]]',
                'thumbUrl' => '@staticUrl/[[profile]]_[[pk]].[[extension]]',
            ],
        ];
    }

    public static function tableName()
    {
        return '{{%shop_pictures}}';
    }
}