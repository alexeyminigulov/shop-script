<?php

namespace domain\services;

class TransactionManager
{
    public function wrap(callable $function): void
    {
        \Yii::$app->db->transaction($function);
    }
}