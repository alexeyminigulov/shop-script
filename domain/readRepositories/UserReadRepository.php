<?php

namespace domain\readRepositories;

use domain\entities\User\User;

class UserReadRepository
{
    function findActiveById($id): ?User
    {
        return User::findOne(['id' => $id, 'status' => User::STATUS_ACTIVE]);
    }

    public function findActiveByUsername($username): ?User
    {
        return User::findOne(['username' => $username, 'status' => User::STATUS_ACTIVE]);
    }
}