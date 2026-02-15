<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Collection\Base;

use Override;

/**
 * Default implementation of ICollection
 * @see EndouMame\PhpValueObject\Collection\Base\ICollection
 * @template TKey
 * @template TValue
 */
trait CollectionDefault
{
    #[Override]
    final public function isEmpty(): bool
    {
        return count($this) === 0;
    }

    /**
     * @return array<TKey, TValue>
     */
    abstract public function toArray(): array;
}
