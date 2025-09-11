<?php

namespace App\Component\SystemRequirement\Domain\UserStory;

use Illuminate\Support\Collection;

interface Repository
{
    /**
     * Get all user stories
     *
     * @return Collection<array-key, Entity>
     */
    public function getAll(): Collection;
}
