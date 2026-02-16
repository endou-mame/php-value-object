<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Fixers\Collection;

use EndouMame\PhpValueObject\Collection\Map;
use Override;

/**
 * 要素数制限付きMap
 *
 * @extends Map<string,string>
 */
final readonly class LimitedMap extends Map
{
    /**
     * 最小要素数
     */
    #[Override]
    protected static function minCount(): int
    {
        return 2; // 2要素以上必要
    }

    /**
     * 最大要素数
     */
    #[Override]
    protected static function maxCount(): int
    {
        return 5; // 5要素以下必要
    }
}
