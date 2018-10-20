<?php

namespace domain\services\mailer;

use DrewM\MailChimp\MailChimp as Mail;

class MailChimp implements Newsletter
{
    private $client;
    private $listId;

    public function __construct(Mail $chimp, $listId)
    {
        $this->client = $chimp;
        $this->listId = $listId;
    }

    public function subscribe($email): void
    {
        $this->client->post("lists/$this->listId/members", [
            'email_address' => $email,
            'status'        => 'subscribed',
        ]);
        if ($error = $this->client->getLastError()) {
            throw new \RuntimeException($error);
        }
    }

    public function unsubscribe($email): void
    {
        $subscriberHash = $this->client->subscriberHash($email);

        $this->client->delete("lists/$this->listId/members/$subscriberHash");

        if ($error = $this->client->getLastError()) {
            throw new \RuntimeException($error);
        }
    }
}