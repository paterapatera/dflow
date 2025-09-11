<?php

namespace App\Component\SystemRequirement\Common\Domain;

abstract class ValFloat implements \JsonSerializable
{
    public function __construct(public readonly float $val) {}

    public function jsonSerialize(): mixed
    {
        return $this->val;
    }
}
