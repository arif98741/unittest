<?php

namespace Administrator\Cleancode\UnitTest;

use Administrator\Cleancode\Lib\EmailClass;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmailAddress(): void
    {
        $this->assertInstanceOf(
            EmailClass::class,
            EmailClass::fromString('user@fexample.com')
        );
    }

    /**
     * @test
     * @return void
     */
    public function testCannotBeCreatedFromInvalidEmailAddress(): void
    {
        $this->expectException(InvalidArgumentException::class);
        //EmailClass::fromString('invalid');
    }

    public function testCanBeUsedAsString(): void
    {
        $this->assertEquals(
            'user@example.com',
            EmailClass::fromString('user@example.com')
        );
    }
}