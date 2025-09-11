<?php

namespace App\Component\SystemRequirement\Feature\UsecaseCreate\New;

use App\Component\SystemRequirement\Domain;
use Illuminate\Support\Collection;

/**
 * ユースケース新規作成入力のレスポンス
 *
 * 設計書: `docs/3.設計/システム要件定義/機能/DF001.ユースケース作成.md`
 */
class ResponseOk
{
    /**
     * @param  Collection<array-key, Domain\Actor\Entity>  $actors
     * @param  Collection<array-key, Domain\UserStory\Entity>  $userStories
     * @param  Collection<array-key, Domain\Priority\Entity>  $priorities
     * @param  Collection<array-key, Domain\BusinessRule\Entity>  $businessRules
     * @param  Collection<array-key, Domain\ConceptualData\Entity>  $conceptualData
     * @param  Collection<array-key, Domain\QualityAttribute\Entity>  $qualityAttributes
     * @return array<string, mixed>
     */
    public static function from(
        Collection $actors,
        Collection $userStories,
        Collection $priorities,
        Collection $businessRules,
        Collection $conceptualData,
        Collection $qualityAttributes
    ): array {
        return [
            'actors' => $actors,
            'userStories' => $userStories,
            'priorities' => $priorities,
            'businessRules' => $businessRules,
            'conceptualData' => $conceptualData,
            'qualityAttributes' => $qualityAttributes,
        ];
    }
}
