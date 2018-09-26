<?php

namespace domain\jobs\User;

use domain\entities\User\User;
use yii\mail\MailerInterface;

class UserConfirmEmailHandler
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function handle(UserConfirmEmailNotificator $parent)
    {
        $user = User::findOne(['id' => $parent->userId]);

        $this->sendEmail($user);
    }

    public function sendEmail(User $user)
    {
        $sent = $this->mailer
            ->compose(
                ['html' => 'confirm-email-html', 'text' => 'confirm-email-text'],
                ['user' => $user]
            )
            ->setTo($user->email)
            ->setSubject('Confirm email')
            ->send();

        if (!$sent) {
            throw new \RuntimeException('Email did not send');
        }
    }
}