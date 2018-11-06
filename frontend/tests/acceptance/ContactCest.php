<?php
namespace frontend\tests\functional;

use frontend\tests\AcceptanceTester;

/* @var $scenario \Codeception\Scenario */

class ContactCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/contact');
    }

    public function checkContact(AcceptanceTester $I)
    {
        $I->canSeeInSource('<h1 class="ty-mainbox-title">Поддержка</h1>');
    }

    public function checkContactSubmitNoData(AcceptanceTester $I)
    {
        $I->submitForm('#contact-form', []);
        $I->see('Name cannot be blank', 'p');
        $I->see('Name cannot be blank', 'p');
        $I->see('Email cannot be blank', 'p');
        $I->see('Subject cannot be blank', 'p');
        $I->see('Body cannot be blank', 'p');
        $I->see('The verification code is incorrect', 'p');
    }

    public function checkContactSubmitNotCorrectEmail(AcceptanceTester $I)
    {
        $I->submitForm('#contact-form', [
            'ContactForm[name]' => 'tester',
            'ContactForm[email]' => 'tester.email',
            'ContactForm[subject]' => 'test subject',
            'ContactForm[body]' => 'test content',
            'ContactForm[verifyCode]' => 'testme',
        ]);
        $I->see('Email is not a valid email address.');
        $I->dontSee('Name cannot be blank');
        $I->dontSee('Subject cannot be blank');
        $I->dontSee('Body cannot be blank');
        $I->see('The verification code is incorrect');
    }

    /*public function checkContactSubmitCorrectData(AcceptanceTester $I)
    {
        $I->submitForm('#contact-form', [
            'ContactForm[name]' => 'tester',
            'ContactForm[email]' => 'tester@example.com',
            'ContactForm[subject]' => 'test subject',
            'ContactForm[body]' => 'test content',
            'ContactForm[verifyCode]' => 'testme',
        ]);
//        $I->seeEmailIsSent();
        $I->see('Thank you for contacting us. We will respond to you as soon as possible.');
    }*/
}
