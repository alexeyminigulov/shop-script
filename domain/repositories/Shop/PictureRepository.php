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
}