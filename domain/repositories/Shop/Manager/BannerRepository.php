<?php

namespace domain\repositories\Shop\Manager;

use domain\entities\Shop\Manager\Banner;
use domain\exceptions\EntityNotFoundException;

class BannerRepository
{
    public function find($id): Banner
    {
        $banner = Banner::findOne(['id' => $id]);

        if (!$banner) {
            throw new EntityNotFoundException('Brand is not found.');
        }
        return $banner;
    }

    public function save(Banner $banner, $runValidation = true)
    {
        if (!$banner->save($runValidation)) {
            throw new \RuntimeException('Brand did not save.');
        }
    }

    public function delete(Banner $banner)
    {
        if ($banner->delete() === false) {
            throw new \RuntimeException('Brand has not been delete.');
        }
    }
}