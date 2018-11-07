<?php

namespace common\auth;

use Yii;
use domain\entities\User\User;
use OAuth2\Storage\UserCredentialsInterface;
use yii\web\IdentityInterface;
use filsh\yii2\oauth2server\Module;
use domain\readRepositories\UserReadRepository;

class Identity implements IdentityInterface, UserCredentialsInterface
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public static function findIdentity($id)
    {
        $user = static::getRepository()->findActiveById($id);

        return $user ? new self($user) : null;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        $module = static::getOauth();
        $token = $module->getServer()->getResourceController()->getToken();
        return !empty($token['user_id'])
            ? static::findIdentity($token['user_id'])
            : null;
    }

    public function getId()
    {
        return $this->user->id;
    }

    public function getAuthKey()
    {
        return $this->user->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    public function checkUserCredentials($username, $password): bool
    {
        if (!$user = self::getRepository()->findActiveByUsername($username)) {
            return false;
        }
        return $user->validatePassword($password);
    }

    public function getUserDetails($username): array
    {
        $user = self::getRepository()->findActiveByUsername($username);
        return ['user_id' => $user->id];
    }

    public function getUser()
    {
        return $this->user;
    }

    private static function getRepository(): UserReadRepository
    {
        return Yii::$container->get(UserReadRepository::class);
    }

    private static function getOauth(): Module
    {
        return Yii::$app->getModule('oauth2');
    }
}