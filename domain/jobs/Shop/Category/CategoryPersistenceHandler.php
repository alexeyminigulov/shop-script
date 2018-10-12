<?php

namespace domain\jobs\Shop\Category;

use domain\entities\Shop\Category\Category;
use yii\caching\Cache;
use yii\caching\TagDependency;

class CategoryPersistenceHandler
{
    private $cache;

    public function __construct(Cache $cache)
    {
        $this->cache = $cache;
    }

    public function handle(CategoryPersistenceNotificator $parent)
    {
        if (!$parent->category instanceof Category) {
            throw new \DomainException('Passed parameter is not Category');
        }
        TagDependency::invalidate($this->cache, ['categories']);
    }
}