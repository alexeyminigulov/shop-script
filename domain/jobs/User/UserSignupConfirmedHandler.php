<?php

namespace shop\listeners\User;

use domain\entities\User\User;
use domain\services\mailer\Newsletter;
use domain\jobs\User\UserSignupConfirmedNotificator;

class UserSignupConfirmedHandler
{
    private $newsletter;

    public function __construct(Newsletter $newsletter)
    {
        $this->newsletter = $newsletter;
    }

    public function handle(UserSignupConfirmedNotificator $parent): void
    {
        $user = User::findOne(['id' => $parent->userId]);
        $this->newsletter->subscribe($user->email);
    }
}