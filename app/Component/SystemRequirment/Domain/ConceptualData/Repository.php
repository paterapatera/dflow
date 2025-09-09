<?php

namespace App\Component\SystemRequirment\Domain\ConceptualData;

interface Repository
{
    /**
     * Get all conceptual data
     */
    public function getAll(): array;

    /**
     * Get conceptual data by ID
     */
    public function findById(int $id): ?array;

    /**
     * Create new conceptual data
     */
    public function create(array $data): array;

    /**
     * Update conceptual data
     */
    public function update(int $id, array $data): ?array;

    /**
     * Delete conceptual data
     */
    public function delete(int $id): bool;

    /**
     * Get conceptual data by type
     */
    public function getByType(string $type): array;

    /**
     * Search conceptual data by name
     */
    public function searchByName(string $name): array;
}
