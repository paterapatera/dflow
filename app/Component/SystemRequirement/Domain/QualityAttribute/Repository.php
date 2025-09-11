<?php

namespace App\Component\SystemRequirement\Domain\QualityAttribute;

use Illuminate\Support\Collection;

interface Repository
{
    /**
     * Get all quality attributes
     *
     * @return Collection<array-key, Entity>
     */
    public function getAll(): Collection;
}
