<?php

namespace frontend\tests\acceptance;

use frontend\tests\AcceptanceTester;
use common\fixtures\UserFixture;

class LoginCest
{
    /**
     * Load fixtures before db transaction begin
     * Called in _before()
     * @see \Codeception\Module\Yii2::_before()
     * @see \Codeception\Module\Yii2::loadFixtures()
     * @return array
     */
    public function _fixtures()
    {
        return [
            'user' => [
                'class' => UserFixture::className(),
                'dataFile' => codecept_data_dir() . 'login_data.php'
            ]
        ];
    }

    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/login');
    }

    protected function formParams($login, $password)
    {
        return [
            'LoginForm[username]' => $login,
            'LoginForm[password]' => $password,
        ];
    }

    public function checkEmpty(AcceptanceTester $I)
    {
        $I->submitForm('#login-form', $this->formParams('', ''));
        $I->see('Username cannot be blank.');
        $I->see('Password cannot be blank.');
    }

    public function checkWrongPassword(AcceptanceTester $I)
    {
        $I->submitForm('#login-form', $this->formParams('admin', 'wrong'));
        $I->seeInPageSource('Password not corrected');
    }

    public function checkValidLogin(AcceptanceTester $I)
    {
        $I->fillField('LoginForm[username]', 'davert');
        $I->fillField('LoginForm[password]', 'qwerty');
        $I->click('Войти');
        $I->makeScreenshot('checkValidLogin');
        $I->see('Выйти', 'button');
        $I->dontSeeLink('Войти');
        $I->dontSeeLink('Создать учетную запись');
    }
}
