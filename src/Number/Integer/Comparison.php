<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Number\Integer;

use Override;

/**
 * Default implementation of IComparison
 * @see EndouMame\PhpValueObject\Number\Integer\IComparison
 * @see EndouMame\PhpValueObject\Number\Integer\IntegerValueBase
 */
trait Comparison
{
    #[Override]
    final public function gt(IntegerValueBase $other): bool
    {
        return $this->value > $other->value;
    }

    #[Override]
    final public function gte(IntegerValueBase $other): bool
    {
        return $this->value >= $other->value;
    }

    #[Override]
    final public function lt(IntegerValueBase $other): bool
    {
        return $this->value < $other->value;
    }

    #[Override]
    final public function lte(IntegerValueBase $other): bool
    {
        return $this->value <= $other->value;
    }
}
