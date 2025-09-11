<?php

namespace App\Component\SystemRequirement\Common\Domain;

abstract class ValStr implements \JsonSerializable
{
    public function __construct(public readonly string $val) {}

    public function jsonSerialize(): mixed
    {
        return $this->val;
    }
}
