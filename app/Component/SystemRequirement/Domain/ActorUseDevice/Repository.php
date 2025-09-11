<?php

namespace App\Component\SystemRequirement\Domain\ActorUseDevice;

use Illuminate\Support\Collection;

interface Repository
{
    /**
     * Get all actors
     *
     * @return Collection<array-key, Entity>
     */
    public function getAll(): Collection;
}
