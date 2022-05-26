<?php

namespace Administrator\Cleancode\UnitTest;

use Administrator\Cleancode\Dependency\BaseClass;
use PHPUnit\Framework\Test;
use PHPUnit\Framework\TestCase;

class ClassTest extends TestCase
{
    /**
     * @test
     * @return void
     */
    public function isInstanceOfClass()
    {
        $base = new BaseClass();
        self::assertTrue(true);
    }
}