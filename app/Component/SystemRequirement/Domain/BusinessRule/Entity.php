<?php

namespace App\Component\SystemRequirement\Domain\BusinessRule;

use App\Component\SystemRequirement\Common\Domain\ValObject;

/**
 * ビジネスルール
 *
 * 設計書: `docs/3.設計/データ/SDM013.ビジネスルール.md`
 */
class Entity extends ValObject
{
    public function __construct(
        public readonly Id $id,
        public string $name,
        public string $description,
    ) {}
}
