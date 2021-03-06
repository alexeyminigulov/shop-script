<?php

namespace domain\repositories;

use Yii;
use domain\dispatcher\EventDispatcherInterface;
use domain\entities\User\User;
use domain\exceptions\EntityNotFoundException;

class UserRepository
{
    private $dispatcher;

    public function __construct(EventDispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }

    public function get($id): User
    {
        if (!$user = User::findOne(['id' => $id, 'status' => User::STATUS_ACTIVE])) {
            throw new EntityNotFoundException('User not found.');
        }
        return $user;
    }

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

    public function findByEmail($email): User
    {
        if (!$user = User::findByEmail($email)) {
            throw new EntityNotFoundException('User not found.');
        }

        return $user;
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public function isPasswordResetTokenValid($token): bool
    {
        if (empty($token)) {
            return false;
        }
        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];

        return $timestamp + $expire >= time();
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return User
     */
    public function findByPasswordResetToken($token): User
    {
        $user = User::findOne([
            'password_reset_token' => $token,
            'status' => User::STATUS_ACTIVE,
        ]);

        if (!$user) {
            throw new \InvalidArgumentException('Wrong password reset token.');
        }
        return $user;
    }

    public function findByConfirmEmailToken($token): User
    {
        $user = User::findOne([
            'email_confirm_token' => $token,
            'status' => User::STATUS_INACTIVE,
        ]);

        if (!$user) {
            throw new \InvalidArgumentException('Wrong confirm email token.');
        }
        return $user;
    }

    public function save(User $user, $runValidation = true)
    {
        if (!$user->save($runValidation)) {
            throw new \RuntimeException('User did not save.');
        }
        $this->dispatcher->dispatchAll($user->releaseEvents());
    }
}