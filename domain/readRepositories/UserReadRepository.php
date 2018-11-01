<?php

namespace domain\readRepositories;

use domain\entities\User\User;

class UserReadRepository
{
    function findActiveById($id): User
    {
        $user = User::findOne(['id' => $id, 'status' => User::STATUS_ACTIVE]);

        if (!$user) {
            throw new \DomainException('User not found or not active.');
        }
        return $user;
    }

    public function findActiveByUsername($username): ?User
    {
        return User::findOne(['username' => $username, 'status' => User::STATUS_ACTIVE]);
    }
}