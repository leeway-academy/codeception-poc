<?php 

class AgeCalculatorCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function formWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Hi! Welcome to this POC :)', 'h1');
        $name = 'Mauro';
        $birthday = '22/12/1977';
        $I->fillField('firstName', $name);
        $I->wait(1);
        $I->fillField('birthday', $birthday);
        $I->wait(1);
        $I->pause();
        $I->click('Calculate age' );
        $I->wait(1);
        $I->see('42', 'h2');
        $I->see('Hi '.$name, 'h1');
        $I->wait(1);
    }
}
