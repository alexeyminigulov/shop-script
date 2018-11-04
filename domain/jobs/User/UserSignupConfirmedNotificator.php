<?php

namespace domain\jobs\User;

use domain\entities\User\User;
use yii\queue\Job;

class UserSignupConfirmedNotificator implements Job
{
    public $userId;
    private $className;

    public function __construct(User $user)
    {
        $this->userId = $user->id;
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