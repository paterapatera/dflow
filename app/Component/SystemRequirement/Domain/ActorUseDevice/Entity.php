<?php

namespace App\Component\SystemRequirement\Domain\ActorUseDevice;

use App\Component\SystemRequirement\Common\Domain\ValObject;

/**
 * アクター利用端末
 *
 * 設計書: `docs/3.設計/データ/SDM004.アクター利用端末.md`
 */
class Entity extends ValObject
{
    public function __construct(
        public readonly Id $id,
        public Name $name,
    ) {}
}
