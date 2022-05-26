<?php

namespace Administrator\Cleancode\Lib;

use http\Exception\InvalidArgumentException;

class EmailClass
{

    private $email;

    /**
     * @param $email
     */
    public function __construct($email)
    {
        $this->email = $email;
        $this->ensureMailIsValid($this->email);
    }

    private function ensureMailIsValid($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid email address',
                    $email
                )
            );
        }
    }

    public static function fromString(string $email): self
    {
        return new self($email);
    }

    public function __toString(): string
    {
        return $this->email;
    }


}