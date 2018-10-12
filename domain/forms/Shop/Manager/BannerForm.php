<?php

namespace domain\forms\Shop\Manager;

use domain\entities\Shop\Manager\Banner\Banner;
use domain\validators\HexColorValidator;
use yii\base\Model;
use yii\web\UploadedFile;

class BannerForm extends Model
{
    public $id;
    public $name;
    public $title;
    public $description;
    public $btnTitle;
    public $btnUrl;
    public $backgroundColor;
    public $colorScheme;
    public $image;
    public $backgroundImg;

    public function __construct(Banner $banner = null, $config = [])
    {
        if ($banner) {
            $this->id = $banner->id;
            $this->name = $banner->name;
            $this->title = $banner->title;
            $this->description = $banner->description;
            $this->btnTitle = $banner->button_title;
            $this->btnUrl = $banner->button_url;
            $this->backgroundColor = $banner->background_color;
            $this->colorScheme = $banner->color_scheme;
        }
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['name', 'title', 'description', 'btnTitle', 'btnUrl', 'backgroundColor', 'colorScheme'], 'required'],
            [['name', 'title', 'btnTitle', 'btnUrl'], 'string', 'max' => 255],
            [['image', 'backgroundImg'], 'image', 'extensions' => 'png, jpg'],
            [['backgroundColor'], HexColorValidator::class],
            [['colorScheme'], 'in', 'range' => [Banner::SCHEME_LIGHT, Banner::SCHEME_DARK]],
        ];
    }

    public function beforeValidate()
    {
        $this->image = UploadedFile::getInstance($this, 'image');
        $this->backgroundImg = UploadedFile::getInstance($this, 'backgroundImg');

        return parent::beforeValidate();
    }
}