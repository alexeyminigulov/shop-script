<?php

namespace domain\services;

use common\forms\LoginForm;
use domain\entities\User;
use domain\repositories\UserRepository;

class UserService
{
    public $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function auth(LoginForm $form): User
    {
        $user = $this->repository->findByName($form->username);

        if (!$user->validatePassword($form->password)) {
            throw new \DomainException('Password not corrected');
        }

        return $user;
    }
}