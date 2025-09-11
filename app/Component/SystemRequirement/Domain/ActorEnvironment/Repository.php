<?php

namespace App\Component\SystemRequirement\Domain\ActorEnvironment;

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
