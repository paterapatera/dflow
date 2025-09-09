<?php

namespace App\Component\SystemRequirment\Domain\QualityAttribute;

interface Repository
{
    /**
     * Get all quality attributes
     */
    public function getAll(): array;

    /**
     * Get quality attribute by ID
     */
    public function findById(int $id): ?array;

    /**
     * Create new quality attribute
     */
    public function create(array $data): array;

    /**
     * Update quality attribute
     */
    public function update(int $id, array $data): ?array;

    /**
     * Delete quality attribute
     */
    public function delete(int $id): bool;

    /**
     * Get quality attributes by category
     */
    public function getByCategory(string $category): array;

    /**
     * Get measurable quality attributes
     */
    public function getMeasurable(): array;
}
