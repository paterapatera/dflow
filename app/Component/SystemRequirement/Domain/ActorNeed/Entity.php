<?php

namespace App\Component\SystemRequirement\Domain\ActorNeed;

use App\Component\SystemRequirement\Common\Domain\ValObject;
use App\Component\SystemRequirement\Domain\Actor;
use App\Component\SystemRequirement\Domain\Actor\Id;
use App\Component\SystemRequirement\Domain\Domain;

/**
 * アクター要求
 *
 * 設計書: `docs/3.設計/データ/SDM012.アクター要求.md`
 */
class Entity extends ValObject
{
    public function __construct(
        public readonly Id $id,
        public Ideal $ideal,
        public Actor\Id $actorId,
        public Domain\Id $domainId,
    ) {}
}
