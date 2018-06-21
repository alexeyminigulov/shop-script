<?php

namespace domain\repositories;

use domain\entities\User;
use domain\exceptions\EntityNotFoundException;


class UserRepository
{
    /**
     * Finds user by name and password
     *
     * @param string $name
     * @throws EntityNotFoundException if user not found.
     * @return User
     */
    public function findByName($name): User
    {
        if (!$user = User::findByName($name)) {
            throw new EntityNotFoundException('User not found.');
        }

        return $user;
    }
}