<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\DateTime\LocalDateRange;

use Override;
use EndouMame\PhpValueObject\DateTime\LocalDate;
use EndouMame\PhpValueObject\DateTime\LocalDateRange;
use EndouMame\PhpValueObject\DateTime\RangeType;

/**
 * @extends LocalDateRange<LocalDate, LocalDate>
 */
final readonly class LocalDateRangeOpen extends LocalDateRange
{
    #[Override]
    public static function rangeType(): RangeType
    {
        return RangeType::OPEN;
    }
}
