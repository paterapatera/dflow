<?php

namespace App\Component\SystemRequirment\Domain\Actor;

interface Repository
{
    /**
     * Get all actors
     */
    public function getAll(): array;

    /**
     * Get actor by ID
     */
    public function findById(int $id): ?array;

    /**
     * Create new actor
     */
    public function create(array $data): array;

    /**
     * Update actor
     */
    public function update(int $id, array $data): ?array;

    /**
     * Delete actor
     */
    public function delete(int $id): bool;
}
