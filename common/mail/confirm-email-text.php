<?php

/* @var $this yii\web\View */
/* @var $user domain\entities\User\User */

$baseUrl = \Yii::$app->params['frontendDomain'];
$resetLink = \Yii::$app->get('frontendUrlManager')
    ->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
    Hello <?= $user->username ?>,

    Follow the link below to confirm your email:

<?= $resetLink ?>