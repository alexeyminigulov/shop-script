<?php

namespace domain\services;

use domain\entities\User;
use domain\forms\ProfileForm;

class ProfileService
{
    public function update(ProfileForm $form)
    {
        $user = User::findOne(['id' => $form->id]);

        $user->edit($form->username, $form->email);

        if (!$user->save()) {
            throw new \RuntimeException('User is not save');
        }

        return $user;
    }
}