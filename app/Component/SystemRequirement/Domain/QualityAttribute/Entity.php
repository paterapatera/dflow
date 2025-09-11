<?php

namespace App\Component\SystemRequirement\Domain\QualityAttribute;

use App\Component\SystemRequirement\Common\Domain\ValObject;

/**
 * 品質特性
 *
 * 設計書: `docs/3.設計/データ/SDM016.品質特性.md`
 */
class Entity extends ValObject
{
    public function __construct(
        public readonly Id $id,
        public Name $name,
        public Description $description,
    ) {}
}
