<?php

namespace App\Component\SystemRequirment\Domain\Priority;

interface Repository
{
    /**
     * Get all priorities
     */
    public function getAll(): array;

    /**
     * Get priority by ID
     */
    public function findById(int $id): ?array;

    /**
     * Get priority by value
     */
    public function findByValue(string $value): ?array;

    /**
     * Create new priority
     */
    public function create(array $data): array;

    /**
     * Update priority
     */
    public function update(int $id, array $data): ?array;

    /**
     * Delete priority
     */
    public function delete(int $id): bool;
}
