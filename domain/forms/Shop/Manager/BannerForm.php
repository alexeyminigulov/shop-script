<?php

namespace domain\forms\Shop\Manager;

use yii\base\Model;
use yii\web\UploadedFile;

class BannerForm extends Model
{
    public $name;
    public $title;
    public $description;
    public $btnTitle;
    public $btnUrl;
    public $image;
    public $backgroundImg;

    public function rules()
    {
        return [
            [['name', 'title', 'description', 'btnTitle', 'btnUrl', 'image', 'backgroundImg'], 'required'],
            [['name', 'title', 'btnTitle', 'btnUrl', 'backgroundImg'], 'string', 'max' => 255],
            [['image'], 'image', 'extensions' => 'png, jpg'],
        ];
    }

    public function beforeValidate()
    {
        $this->image = UploadedFile::getInstance($this, 'image');

        return parent::beforeValidate();
    }
}