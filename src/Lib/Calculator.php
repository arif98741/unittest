<?php

namespace Administrator\Cleancode\Lib;

class Calculator
{
    public function evenNumber($number): bool
    {
        if ($number % 2 == 0)
            return true;
        else
            return false;
    }

    public function oddNumber($number): bool
    {
        if ($number % 2 !== 0)
            return true;
        else
            return false;
    }
}