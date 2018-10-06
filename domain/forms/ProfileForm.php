<?php

namespace domain\forms;

use yii\base\Model;
use domain\entities\User\User;

class ProfileForm extends Model
{
    public $id;
    public $username;
    public $email;

    public function __construct(User $user, $config = [])
    {
        if ($user) {
            $this->id = $user->id;
            $this->username = $user->username;
            $this->email = $user->email;
        }
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['username', 'email'], 'required'],
            [['username', 'email'], 'string', 'max' => 255],
        ];
    }
}