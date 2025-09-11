<?php

namespace App\Component\SystemRequirement\Domain\UserStory;

use App\Component\SystemRequirement\Common\Domain\ValObject;
use App\Component\SystemRequirement\Domain\Actor;
use App\Component\SystemRequirement\Domain\ActorEnvironment;
use App\Component\SystemRequirement\Domain\ActorNeed;
use App\Component\SystemRequirement\Domain\ActorUseDevice;
use App\Component\SystemRequirement\Domain\ActorUseStatus;
use App\Component\SystemRequirement\Domain\Domain;
use App\Component\SystemRequirement\Domain\ImplDifficulty;
use Illuminate\Support\Collection;

/**
 * アクターストーリー
 *
 * 設計書: `docs/3.設計/データ/SDM011.アクターストーリー.md`
 */
class Entity extends ValObject
{
    /**
     * @param  Collection<int, ActorNeed\Id>  $actorNeedIds
     * @param  Collection<int, ActorEnvironment\Id>  $envIds
     * @param  Collection<int, ActorUseDevice\Id>  $deviceIds
     * @param  Collection<int, ActorUseStatus\Id>  $useStatusIds
     * @param  Collection<int, WorkRule>  $workRules
     * @param  Collection<int, Concern>  $concerns
     */
    public function __construct(
        public readonly Id $id,
        public Title $title,
        public Flow $normalFlow,
        public Flow $alternativeFlow,
        public Collection $workRules,
        public Frequency $frequency,
        public Cost $cost,
        public Collection $concerns,
        public Version $version,
        public Collection $actorNeedIds,
        public Actor\Id $actorId,
        public Collection $envIds,
        public Collection $deviceIds,
        public Collection $useStatusIds,
        public Domain\Id $domainId,
        public ImplDifficulty\Id $implDifficultyId,
    ) {}
}
