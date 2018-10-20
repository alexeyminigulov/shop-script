<?php

namespace domain\services\mailer;

interface Newsletter
{
    public function subscribe($email): void;
    public function unsubscribe($email): void;
}