<?php

namespace domain\repositories\Shop\Manager;

use domain\entities\Shop\Manager\Banner\Banner;
use domain\exceptions\EntityNotFoundException;
use domain\dispatcher\EventDispatcherInterface;
use domain\entities\Shop\Manager\Banner\events\BannerPersistence;

class BannerRepository
{
    private $dispatcher;

    public function __construct(EventDispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function find($id): Banner
    {
        $banner = Banner::findOne(['id' => $id]);

        if (!$banner) {
            throw new EntityNotFoundException('Banner is not found.');
        }
        return $banner;
    }

    public function save(Banner $banner, $runValidation = true)
    {
        if (!$banner->save($runValidation)) {
            throw new \RuntimeException('Banner did not save.');
        }
        $this->dispatcher->dispatch(new BannerPersistence($banner));
    }

    public function delete(Banner $banner)
    {
        if ($banner->delete() === false) {
            throw new \RuntimeException('Banner has not been delete.');
        }
        $this->dispatcher->dispatch(new BannerPersistence($banner));
    }
}