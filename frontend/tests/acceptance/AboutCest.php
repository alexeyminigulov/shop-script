<?php
namespace frontend\tests\acceptance;

use frontend\tests\AcceptanceTester;

class AboutCest
{
    public function checkAbout(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->canSee('Новинки в магазине');
        $I->seeLink('Информация');
        $I->click('Информация');
        $I->seeCurrentUrlEquals('/about');
//        $I->makeScreenshot('3434');
        $I->canSee('Информация', ['class' => 'ty-mainbox-title']);
    }
}
