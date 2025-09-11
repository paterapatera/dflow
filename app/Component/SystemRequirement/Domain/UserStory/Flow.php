<?php

namespace App\Component\SystemRequirement\Domain\UserStory;

use App\Component\SystemRequirement\Common\Domain\ValObject;
use Illuminate\Support\Collection;

class Flow extends ValObject
{
    /**
     * @param  Collection<int, Step>  $steps
     */
    public function __construct(
        public readonly string $id,
        public readonly string $name,
        public readonly Collection $steps,
    ) {}
}
