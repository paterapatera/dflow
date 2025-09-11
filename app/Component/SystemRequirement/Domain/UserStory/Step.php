<?php

namespace App\Component\SystemRequirement\Domain\UserStory;

use App\Component\SystemRequirement\Common\Domain\ValObject;
use Illuminate\Support\Collection;

class Step extends ValObject
{
    /**
     * @param  Collection<int, string>  $flowIds
     */
    public function __construct(
        public readonly string $description,
        public readonly Collection $flowIds,
    ) {}
}
