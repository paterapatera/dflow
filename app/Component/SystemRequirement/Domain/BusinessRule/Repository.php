<?php

namespace App\Component\SystemRequirement\Domain\BusinessRule;

use Illuminate\Support\Collection;

interface Repository
{
    /**
     * Get all business rules
     *
     * @return Collection<array-key, Entity>
     */
    public function getAll(): Collection;
}
