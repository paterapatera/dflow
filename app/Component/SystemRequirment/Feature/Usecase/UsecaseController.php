<?php

namespace App\Component\SystemRequirment\Feature\Usecase;

use App\Component\SystemRequirment\Domain\Actor;
use App\Component\SystemRequirment\Domain\BusinessRule;
use App\Component\SystemRequirment\Domain\ConceptualData;
use App\Component\SystemRequirment\Domain\Priority;
use App\Component\SystemRequirment\Domain\QualityAttribute;
use App\Component\SystemRequirment\Domain\UserStory;
use App\Http\Controllers\Controller;
use Inertia\Inertia;
use Inertia\Response;

class UsecaseController extends Controller
{
    /**
     * ユースケースを作成フォーム
     */
    public function new(
        Actor\Repository $actorRepository,
        UserStory\Repository $userStoryRepository,
        Priority\Repository $priorityRepository,
        BusinessRule\Repository $businessRuleRepository,
        ConceptualData\Repository $conceptualDataRepository,
        QualityAttribute\Repository $qualityAttributeRepository
    ): Response {
        $actors = $actorRepository->getAll();
        $userStories = $userStoryRepository->getAll();
        $priorities = $priorityRepository->getAll();
        $businessRules = $businessRuleRepository->getAll();
        $conceptualData = $conceptualDataRepository->getAll();
        $qualityAttributes = $qualityAttributeRepository->getAll();

        return Inertia::render('system-requirement/usecase/new', [
            'actors' => $actors,
            'userStories' => $userStories,
            'priorities' => $priorities,
            'businessRules' => $businessRules,
            'conceptualData' => $conceptualData,
            'qualityAttributes' => $qualityAttributes,
        ]);
    }
}
