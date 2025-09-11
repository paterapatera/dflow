<?php

namespace App\Component\SystemRequirement\Domain\ActorEnvironment;

use App\Component\SystemRequirement\Common\Domain\ValObject;

/**
 * アクター環境
 *
 * 設計書: `docs/3.設計/データ/SDM002.アクター環境.md`
 */
class Entity extends ValObject
{
    public function __construct(
        public readonly Id $id,
        public Name $name,
    ) {}
}
