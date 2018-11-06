<?php

namespace frontend\tests\functional;

use frontend\tests\AcceptanceTester;

class SignupCest
{
    protected $formId = '#form-signup';

    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/signup');
    }

    public function signupWithEmptyFields(AcceptanceTester $I)
    {
        $I->see('Регистрация', 'h1');
        $I->submitForm($this->formId, []);
        $I->see('Username cannot be blank.');
        $I->see('Email cannot be blank.');
        $I->see('Password cannot be blank.');
    }

    public function signupWithWrongEmail(AcceptanceTester $I)
    {
        $I->submitForm(
            $this->formId, [
                'SignupForm[username]'  => 'tester',
                'SignupForm[email]'     => 'ttttt',
                'SignupForm[password]'  => 'tester_password',
            ]
        );
        $I->dontSee('Username cannot be blank.', '.help-block');
        $I->dontSee('Password cannot be blank.', '.help-block');
        $I->see('Email is not a valid email address.', '.help-block');
    }

    public function signupSuccessfully(AcceptanceTester $I)
    {
        $I->submitForm($this->formId, [
            'SignupForm[username]' => 'tester',
            'SignupForm[email]' => 'tester.email@example.com',
            'SignupForm[password]' => 'tester_password',
        ]);

        $I->see('Выйти', 'form button[type=submit]');
    }
}
