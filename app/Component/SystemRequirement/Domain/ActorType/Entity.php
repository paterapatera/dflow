<?php

namespace App\Component\SystemRequirement\Domain\ActorType;

use App\Component\SystemRequirement\Common\Domain\ValObject;

/**
 * アクター種類
 *
 * 設計書: `docs/3.設計/データ/SDM001.アクター種類.md`
 */
class Entity extends ValObject
{
    public function __construct(
        public readonly Id $id,
        public Name $name,
    ) {}
}
