<?php

namespace Administrator\Cleancode\UnitTest;

use Administrator\Cleancode\Lib\Calculator;
use PHPUnit\Framework\TestCase;

class DemoTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        self::assertGreaterThanOrEqual(2, 2);
    }

    /**
     * @test
     * @return void
     */
    public function testIsEven()
    {
        $cal = new Calculator();
        $response = $cal->evenNumber(10);
        self::assertTrue( $response );
    }

    /**
     * @test
     * @return void
     */
    public function testIsOdd()
    {
        $cal = new Calculator();
        $response = $cal->oddNumber(11);
        self::assertTrue( $response );
    }


}