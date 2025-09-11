<?php

namespace App\Component\SystemRequirement\Domain\ImplDifficulty;

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
