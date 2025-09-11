<?php

namespace App\Component\SystemRequirement\Feature\UsecaseCreate;

use App\Component\SystemRequirement\Domain;
use App\Http\Controllers\Controller as BaseController;
use Inertia\Inertia;
use Inertia\Response;

/**
 * ユースケース作成機能のコントローラ
 *
 * 設計書: `docs/3.設計/システム要件定義/機能/DF001.ユースケース作成.md`
 */
class Controller extends BaseController
{
    /**
     * ユースケース新規作成入力
     */
    public function new(
        Domain\Actor\Repository $actorRepository,
        Domain\UserStory\Repository $userStoryRepository,
        Domain\Priority\Repository $priorityRepository,
        Domain\BusinessRule\Repository $businessRuleRepository,
        Domain\ConceptualData\Repository $conceptualDataRepository,
        Domain\QualityAttribute\Repository $qualityAttributeRepository
    ): Response {
        $actors = $actorRepository->getAll();
        $userStories = $userStoryRepository->getAll();
        $priorities = $priorityRepository->getAll();
        $businessRules = $businessRuleRepository->getAll();
        $conceptualData = $conceptualDataRepository->getAll();
        $qualityAttributes = $qualityAttributeRepository->getAll();

        return Inertia::render('system-requirement/usecase/new', New\ResponseOk::from(
            $actors,
            $userStories,
            $priorities,
            $businessRules,
            $conceptualData,
            $qualityAttributes
        ));
    }
}
