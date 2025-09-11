<?php

namespace App\Component\SystemRequirement\Domain\Actor;

use App\Component\SystemRequirement\Common\Domain\ValObject;
use App\Component\SystemRequirement\Domain\ActorEnvironment;
use App\Component\SystemRequirement\Domain\ActorType;
use App\Component\SystemRequirement\Domain\ActorUseDevice;
use App\Component\SystemRequirement\Domain\ActorUseStatus;
use Illuminate\Support\Collection;

/**
 * アクター
 *
 * 設計書: `docs/3.設計/データ/SDM005.アクター.md`
 */
class Entity extends ValObject
{
    /**
     * @param  Collection<int, ActorEnvironment\Id>  $envIds
     * @param  Collection<int, ActorUseStatus\Id>  $useStatusIds
     * @param  Collection<int, ActorUseDevice\Id>  $deviceIds
     */
    public function __construct(
        public readonly Id $id,
        public Name $name,
        public Purpose $purpose,
        public UsageFrequency $usageFrequency,
        public UsageLifecycle $usageLifecycle,
        public ActorType\Id $typeId,
        public Collection $envIds,
        public Collection $useStatusIds,
        public Collection $deviceIds,
    ) {}
}
