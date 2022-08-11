<?php

namespace PavloDotDev\HomoglyphAttackGenerator;

class Letter
{
    protected string $letter;
    protected string $hex;

    public function __construct(string $letter)
    {
        $this->letter = $letter;
        $this->hex = dechex(mb_ord($letter, "UTF-8"));
    }

    public function getLetter(): string
    {
        return $this->letter;
    }

    public function getHex(): string
    {
        return $this->hex;
    }
}
