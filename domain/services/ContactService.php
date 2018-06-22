<?php

namespace domain\services;

use frontend\forms\ContactForm;
use yii\mail\MailerInterface;

class ContactService
{
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param ContactForm $form
     * @param string $email the target email address
     * @throws \RuntimeException
     */
    public function contact(ContactForm $form, $email)
    {
        $sent = $this->mailer->compose()
            ->setTo($email)
            ->setFrom([$form->email => $form->name])
            ->setSubject($form->subject)
            ->setTextBody($form->body)
            ->send();

        if (!$sent) {
            throw new \RuntimeException('Email not sent.');
        }
    }
}