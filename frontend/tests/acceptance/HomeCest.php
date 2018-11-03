<?php
namespace frontend\tests\acceptance;

use frontend\tests\AcceptanceTester;
use yii\helpers\Url;

class HomeCest
{
    public function checkHome(AcceptanceTester $I)
    {
        $I->amOnPage('/index.php');
        $I->canSee('Новинки в магазине');
//        $I->see('My Application');
//
        $I->seeLink('Информация');
        $I->click('Информация');
        $I->amOnPage('/about');
//        $I->wait(2); // wait for page to be opened
//
//        $I->see('This is the About page.');
    }
}
