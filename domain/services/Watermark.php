<?php

namespace domain\services;

use Yii;
use PHPThumb\GD;

class Watermark
{
    private $width;
    private $height;
    private $waterMark;
    private $marge_right = 10;
    private $marge_bottom = 10;

    public function __construct($width, $height, $waterMark = null)
    {
        $this->width = $width;
        $this->height = $height;
        if ($waterMark) {
            $this->waterMark = imagecreatefrompng(Yii::getAlias($waterMark));
        }
    }

    public function processor(GD $thumb)
    {
        $thumb->resize($this->width, $this->height);
        $thumb->pad($this->width, $this->height);

        if ($this->waterMark) {

            $im = $thumb->getWorkingImage();

            $sx = imagesx($this->waterMark);
            $sy = imagesy($this->waterMark);

            imagecopy($im, $this->waterMark,
                imagesx($im) - $sx - $this->marge_right, imagesy($im) - $sy - $this->marge_bottom,
                0, 0, imagesx($this->waterMark), imagesy($this->waterMark)
            );
        }
    }
}