<?php

namespace domain\jobs\Shop\Banner;

use domain\entities\Shop\Manager\Banner\Banner;
use yii\caching\Cache;
use yii\caching\TagDependency;

class BannerPersistenceHandler
{
    private $cache;

    public function __construct(Cache $cache)
    {
        $this->cache = $cache;
    }

    public function handle(BannerPersistenceNotificator $parent)
    {
        if (!$parent->banner instanceof Banner) {
            throw new \DomainException('Passed parameter is not Banner');
        }
        TagDependency::invalidate($this->cache, ['banners']);
    }
}