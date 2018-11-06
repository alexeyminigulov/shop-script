<?php
namespace frontend\tests\acceptance;

use frontend\tests\AcceptanceTester;

class HomeCest
{
    public function checkHome(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->canSee('Новинки в магазине');
        $I->seeLink('Информация');
        $I->click('Информация');
        $I->amOnPage('/about');
    }
}
