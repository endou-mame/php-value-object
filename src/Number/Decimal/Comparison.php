<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Number\Decimal;

use Override;

/**
 * Default implementation of IComparison
 * @see EndouMame\PhpValueObject\Number\Decimal\IComparison
 * @see EndouMame\PhpValueObject\Number\Decimal\DecimalValueBase
 */
trait Comparison
{
    #[Override]
    final public function gt(DecimalValueBase $other): bool
    {
        return $this->value > $other->value;
    }

    #[Override]
    final public function gte(DecimalValueBase $other): bool
    {
        return $this->value >= $other->value;
    }

    #[Override]
    final public function lt(DecimalValueBase $other): bool
    {
        return $this->value < $other->value;
    }

    #[Override]
    final public function lte(DecimalValueBase $other): bool
    {
        return $this->value <= $other->value;
    }
}
