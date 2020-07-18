<?php
require_once 'AgeCalculator.php';

class AgeCalculatorTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testCalculatorWorks()
    {
        $calculator = new AgeCalculator(new DateTimeImmutable('2010-07-15'));
        $this->assertEquals(32, $calculator->getAge(new DateTimeImmutable('1977-12-22')));
    }
}