<?php

namespace App\Component\SystemRequirement\Domain\ConceptualData;

use Illuminate\Support\Collection;

interface Repository
{
    /**
     * Get all conceptual data
     *
     * @return Collection<array-key, Entity>
     */
    public function getAll(): Collection;
}
