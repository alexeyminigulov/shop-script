<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user domain\entities\User\User */

$baseUrl = \Yii::$app->params['frontendDomain'];
$resetLink = \Yii::$app->get('frontendUrlManager')
    ->createAbsoluteUrl(['site/confirm-email', 'token' => $user->email_confirm_token]);
?>
<div class="password-reset">
    <p>Hello <?= Html::encode($user->username) ?>,</p>

    <p>Follow the link below to confirm your email:</p>

    <p><?= Html::a(Html::encode($resetLink), $resetLink) ?></p>
</div>