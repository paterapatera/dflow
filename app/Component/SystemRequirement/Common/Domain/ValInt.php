<?php

namespace App\Component\SystemRequirement\Common\Domain;

abstract class ValInt implements \JsonSerializable
{
    public function __construct(public readonly int $val) {}

    public function jsonSerialize(): mixed
    {
        return $this->val;
    }
}
