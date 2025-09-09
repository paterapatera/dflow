<?php

namespace App\Component\SystemRequirment\Domain\UserStory;

interface Repository
{
    /**
     * Get all user stories
     */
    public function getAll(): array;

    /**
     * Get user story by ID
     */
    public function findById(int $id): ?array;

    /**
     * Create new user story
     */
    public function create(array $data): array;

    /**
     * Update user story
     */
    public function update(int $id, array $data): ?array;

    /**
     * Delete user story
     */
    public function delete(int $id): bool;

    /**
     * Get user stories by actor ID
     */
    public function getByActorId(int $actorId): array;
}
