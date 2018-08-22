<?php

namespace domain\forms\Shop\Manager;

use domain\entities\Shop\Manager\Banner;
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
        }
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['name', 'title', 'description', 'btnTitle', 'btnUrl'], 'required'],
            [['name', 'title', 'btnTitle', 'btnUrl'], 'string', 'max' => 255],
            [['image', 'backgroundImg'], 'image', 'extensions' => 'png, jpg'],
        ];
    }

    public function beforeValidate()
    {
        $this->image = UploadedFile::getInstance($this, 'image');
        $this->backgroundImg = UploadedFile::getInstance($this, 'backgroundImg');

        return parent::beforeValidate();
    }
}