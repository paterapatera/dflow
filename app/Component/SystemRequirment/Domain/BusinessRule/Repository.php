<?php

namespace App\Component\SystemRequirment\Domain\BusinessRule;

interface Repository
{
    /**
     * Get all business rules
     */
    public function getAll(): array;

    /**
     * Get business rule by ID
     */
    public function findById(int $id): ?array;

    /**
     * Create new business rule
     */
    public function create(array $data): array;

    /**
     * Update business rule
     */
    public function update(int $id, array $data): ?array;

    /**
     * Delete business rule
     */
    public function delete(int $id): bool;

    /**
     * Get business rules by category
     */
    public function getByCategory(string $category): array;

    /**
     * Get active business rules
     */
    public function getActive(): array;
}
