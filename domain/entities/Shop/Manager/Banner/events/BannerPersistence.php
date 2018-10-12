<?php

namespace domain\entities\Shop\Manager\Banner\events;

use domain\entities\Shop\Manager\Banner\Banner;

class BannerPersistence
{
    public $banner;

    public function __construct(Banner $banner)
    {
        $this->banner = $banner;
    }
}