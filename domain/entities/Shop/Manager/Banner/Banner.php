<?php

namespace domain\entities\Shop\Manager\Banner;

use yii\db\ActiveRecord;
use yii\web\UploadedFile;
use yiidreamteam\upload\ImageUploadBehavior;

/**
 * This is the model class for table "shop_banners".
 *
 * @property int $id
 * @property string $name
 * @property string $title
 * @property string $description
 * @property string $button_title
 * @property string $button_url
 * @property string $image
 * @property string $background_img
 * @property string $background_color
 * @property string $color_scheme
 *
 * @mixin ImageUploadBehavior
 */
class Banner extends ActiveRecord
{
    const SCHEME_LIGHT = 'light';
    const SCHEME_DARK = 'dark';

    public static function create($name, $title, $description,
                                  $btnTitle, $btnUrl,
                                  UploadedFile $image = null, UploadedFile $backgroundImg = null,
                                  $backgroundColor, $colorScheme): self
    {
        $banner = new Banner();
        $banner->name = $name;
        $banner->title = $title;
        $banner->description = $description;
        $banner->button_title = $btnTitle;
        $banner->button_url = $btnUrl;
        $banner->image = $image;
        $banner->background_img = $backgroundImg;
        $banner->background_color = $backgroundColor;
        $banner->color_scheme = $colorScheme;

        return $banner;
    }

    public function edit($name, $title, $description,
                         $btnTitle, $btnUrl,
                         UploadedFile $image = null, UploadedFile $backgroundImg = null,
                         $backgroundColor, $colorScheme)
    {
        $this->name = $name;
        $this->title = $title;
        $this->description = $description;
        $this->button_title = $btnTitle;
        $this->button_url = $btnUrl;
        $this->image = $image;
        $this->background_img = $backgroundImg;
        $this->background_color = $backgroundColor;
        $this->color_scheme = $colorScheme;
    }

    public function behaviors()
    {
        return [
            [
                'class' => '\yiidreamteam\upload\ImageUploadBehavior',
                'createThumbsOnRequest' => true,
                'attribute' => 'image',
                'thumbs' => [
                    'thumb' => ['width' => 400, 'height' => 300],
                    'thumb_120_120' => ['width' => 120, 'height' => 120],
                    'thumb_189_189' => ['width' => 189, 'height' => 189],
                    'thumb_400_350' => ['width' => 400, 'height' => 350],
                    'thumb_800_800' => ['width' => 800, 'height' => 800],
                ],
                'filePath' => '@static/banners/image/[[pk]].[[extension]]',
                'fileUrl' => '@staticUrl/banners/image/[[pk]].[[extension]]',
                'thumbPath' => '@static/banners/image/[[profile]]_[[pk]].[[extension]]',
                'thumbUrl' => '@staticUrl/banners/image/[[profile]]_[[pk]].[[extension]]',
            ],
            [
                'class' => '\yiidreamteam\upload\ImageUploadBehavior',
                'createThumbsOnRequest' => true,
                'attribute' => 'background_img',
                'thumbs' => [
                    'thumb' => ['width' => 400, 'height' => 300],
                    'thumb_120_120' => ['width' => 120, 'height' => 120],
                    'thumb_189_189' => ['width' => 189, 'height' => 189],
                    'thumb_400_350' => ['width' => 400, 'height' => 350],
                    'thumb_800_800' => ['width' => 800, 'height' => 800],
                ],
                'filePath' => '@static/banners/background/[[pk]].[[extension]]',
                'fileUrl' => '@staticUrl/banners/background/[[pk]].[[extension]]',
                'thumbPath' => '@static/banners/background/[[profile]]_[[pk]].[[extension]]',
                'thumbUrl' => '@staticUrl/banners/background/[[profile]]_[[pk]].[[extension]]',
            ],
        ];
    }

    public static function tableName()
    {
        return '{{%shop_banners}}';
    }
}