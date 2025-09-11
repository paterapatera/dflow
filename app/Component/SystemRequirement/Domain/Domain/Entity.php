<?php

namespace App\Component\SystemRequirement\Domain\Domain;

use App\Component\SystemRequirement\Common\Domain\ValObject;

/**
 * ドメイン
 *
 * 設計書: `docs/3.設計/データ/SDM008.ドメイン.md`
 */
class Entity extends ValObject
{
    public function __construct(
        public readonly Id $id,
        public Name $name,
    ) {}
}
