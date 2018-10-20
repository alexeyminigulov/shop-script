<?php

/* @var $this yii\web\View */
/* @var $user domain\entities\User\User */

$baseUrl = \Yii::$app->params['frontendDomain'];
$resetLink = \Yii::$app->get('frontendUrlManager')
    ->createAbsoluteUrl(['site/confirm-email', 'token' => $user->email_confirm_token]);
?>
    Hello <?= $user->username ?>,

    Follow the link below to confirm your email:

<?= $resetLink ?>