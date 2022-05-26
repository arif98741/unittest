<?php

namespace Administrator\Cleancode\Lib;

class TestClass
{
    public function index($day): bool
    {
        if ($day) {
            if (is_string($day)) {
                $day = strtolower($day);
                if ($day === 'friday') {
                    return true;
                } elseif ($day === 'saturday') {
                    return true;
                } elseif ($day === 'sunday') {
                    return true;
                }
                return false;
            }
            return false;
        }
        return false;
    }
}