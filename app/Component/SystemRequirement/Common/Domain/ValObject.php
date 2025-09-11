<?php

namespace App\Component\SystemRequirement\Common\Domain;

abstract class ValObject implements \JsonSerializable
{
    public function jsonSerialize(): mixed
    {
        return get_object_vars($this);
    }
}
