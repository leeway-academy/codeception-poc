<?php 

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }

    public function formWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Hi! Welcome to this POC :)', 'h1');
        $name = 'Mauro';
        $birthday = '22/12/1977';
        $I->fillField('firstName', $name);
        $I->fillField('birthday', $birthday);
        $I->pause();
        $I->click('Calculate age' );
        $I->see('42', 'h2');
        $I->see('Hi '.$name, 'h1');
    }
}
