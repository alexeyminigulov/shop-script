<?php

namespace domain\jobs\Shop\Category;

use domain\entities\Shop\Category\Category;
use yii\queue\JobInterface;

class CategoryPersistenceNotificator implements JobInterface
{
    public $category;
    private $className;

    public function __construct(Category $category)
    {
        $this->category = $category;
        $this->className = substr(get_class($this), 0, -11) . 'Handler';
    }

    public function execute($queue)
    {
        $handler = $this->resolveHandler();

        $handler($this, $queue);
    }

    private function resolveHandler()
    {
        return [\Yii::createObject($this->className), 'handle'];
    }
}