<?php

namespace domain\repositories\Shop;

use domain\entities\Shop\Product\Picture;
use domain\exceptions\EntityNotFoundException;

class PictureRepository
{
    public function find($id): Picture
    {
        $picture = Picture::findOne(['id', $id]);

        if (!$picture) {
            throw new EntityNotFoundException('Picture is not found.');
        }
        return $picture;
    }

    public function delete(Picture $picture)
    {
        if ($picture->delete() === false) {
            throw new \RuntimeException('Picture has not been delete.');
        }
    }
}