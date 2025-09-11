<?php

namespace App\Component\SystemRequirement\Domain\Priority;

use App\Component\SystemRequirement\Common\Domain\ValObject;

/**
 * 優先順位
 *
 * 設計書: `docs/3.設計/データ/SDM012.優先順位.md`
 */
class Entity extends ValObject
{
    public function __construct(
        public readonly Id $id,
        public Name $name,
        public Level $level,
    ) {}
}
