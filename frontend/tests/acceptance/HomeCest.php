<?php
namespace frontend\tests\acceptance;

use frontend\tests\AcceptanceTester;
use yii\helpers\Url;

class HomeCest
{
    public function checkHome(AcceptanceTester $I)
    {
        $I->amOnPage('/index-test.php');
        $I->canSee('Новинки в магазине');
//        $I->see('My Application');
//
        $I->seeLink('Информация');
        $I->click('Информация');
        $I->amOnPage('/index.php?r=site/about');
        $I->canSee('Сайт, торгующий товарами в Интернете. Позволяет пользователям сформировать заказ на покупку, выбрать способ оплаты и доставки заказа в сети Интернет. Выбрав необходимые товары или услуги, пользователь обычно имеет возможность тут же на сайте выбрать метод оплаты и доставки.', 'p');
//        $I->wait(2); // wait for page to be opened
//
//        $I->see('This is the About page.');
    }
}
