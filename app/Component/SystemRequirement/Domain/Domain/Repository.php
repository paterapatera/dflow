<?php

namespace App\Component\SystemRequirement\Domain\Domain;

use Illuminate\Support\Collection;

interface Repository
{
    /**
     * Get all priorities
     *
     * @return Collection<array-key, Entity>
     */
    public function getAll(): Collection;
}
