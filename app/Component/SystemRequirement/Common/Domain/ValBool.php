<?php

namespace App\Component\SystemRequirement\Common\Domain;

abstract class ValBool implements \JsonSerializable
{
    public function __construct(public readonly bool $val) {}

    public function jsonSerialize(): mixed
    {
        return $this->val;
    }
}
