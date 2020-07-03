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

    public function frontPageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Hello world!');
    }
}
