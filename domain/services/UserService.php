<?php

namespace domain\services;

use common\forms\LoginForm;
use domain\entities\User\User;
use domain\repositories\UserRepository;
use frontend\forms\PasswordResetRequestForm;
use frontend\forms\ResetPasswordForm;
use domain\forms\auth\SignupForm;
use yii\mail\MailerInterface;

class UserService
{
    private $repository;
    private $mailer;

    public function __construct(UserRepository $repository, MailerInterface $mailer)
    {
        $this->repository = $repository;
        $this->mailer = $mailer;
    }

    public function signup(SignupForm $form): User
    {
        $user = User::create($form->username, $form->email, $form->password);
        $this->repository->save($user);

        return $user;
    }

    public function auth(LoginForm $form): User
    {
        $user = $this->repository->findByName($form->username);

        if (!$user->validatePassword($form->password)) {
            throw new \DomainException('Password not corrected');
        }

        return $user;
    }

    public function requestPasswordReset(PasswordResetRequestForm $form)
    {
        /* @var $user User */
        $user = $this->repository->findByEmail($form->email);

        if (!$this->repository->isPasswordResetTokenValid($user->password_reset_token)) {
            $user->generatePasswordResetToken();
        }

        $this->repository->save($user);

        $sent = $this->mailer
            ->compose(
                ['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'],
                ['user' => $user]
            )
            ->setTo($form->email)
            ->send();

        if (!$sent) {
            throw new \RuntimeException('Email did not send');
        }
    }

    public function passwordReset(ResetPasswordForm $form, $token)
    {
        if (!$this->repository->isPasswordResetTokenValid($token)) {
            throw new \InvalidArgumentException('Token don not validated.');
        }
        $user = $this->repository->findByPasswordResetToken($token);
        $user->setPassword($form->password);
        $user->removePasswordResetToken();
        $this->repository->save($user,false);
    }
}