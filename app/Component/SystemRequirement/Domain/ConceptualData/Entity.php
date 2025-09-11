<?php

namespace App\Component\SystemRequirement\Domain\ConceptualData;

use App\Component\SystemRequirement\Common\Domain\ValObject;

/**
 * 概念データ
 *
 * 設計書: `docs/3.設計/データ/SDM015.概念データ.md`
 */
class Entity extends ValObject
{
    public function __construct(
        public readonly Id $id,
        public Name $name,
        public NameEn $nameEn,
    ) {}
}
