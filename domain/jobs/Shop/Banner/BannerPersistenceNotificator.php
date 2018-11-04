<?php

namespace domain\jobs\Shop\Banner;

use domain\entities\Shop\Manager\Banner\Banner;
use yii\queue\Job;

class BannerPersistenceNotificator implements Job
{
    public $banner;
    private $className;

    public function __construct(Banner $banner)
    {
        $this->banner = $banner;
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