<?php

namespace App\Component\SystemRequirement\Domain\ImplDifficulty;

use App\Component\SystemRequirement\Common\Domain\ValObject;

/**
 * 実現難易度
 *
 * 設計書: `docs/3.設計/データ/SDM010.実現難易度.md`
 */
class Entity extends ValObject
{
    public function __construct(
        public readonly Id $id,
        public Name $name,
        public Level $level,
    ) {}
}
