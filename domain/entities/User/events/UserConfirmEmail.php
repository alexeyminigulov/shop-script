<?php

namespace domain\entities\User\events;

use domain\entities\User\User;

class UserConfirmEmail
{
    public $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
}