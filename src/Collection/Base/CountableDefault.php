<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Collection\Base;

use Override;

/**
 * @see \Countable
 */
trait CountableDefault
{
    #[Override]
    public function count(): int
    {
        return count($this->elements);
    }
}
