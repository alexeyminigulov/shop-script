<?php

namespace domain\entities\User\events;

use domain\entities\User\User;

class UserSignupConfirmed
{
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
}