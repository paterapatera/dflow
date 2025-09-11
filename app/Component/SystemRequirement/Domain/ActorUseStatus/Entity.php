<?php

namespace App\Component\SystemRequirement\Domain\ActorUseStatus;

use App\Component\SystemRequirement\Common\Domain\ValObject;

/**
 * アクター利用状況
 *
 * 設計書: `docs/3.設計/データ/SDM003.アクター利用状況.md`
 */
class Entity extends ValObject
{
    public function __construct(
        public readonly Id $id,
        public Name $name,
    ) {}
}
