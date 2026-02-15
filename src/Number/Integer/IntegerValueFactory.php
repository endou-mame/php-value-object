<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Number\Integer;

use Override;
use EndouMame\PhpMonad\Option;
use EndouMame\PhpMonad\Result;

/**
 * Default implementation of IIntegerValueFactory
 * @see EndouMame\PhpValueObject\Number\Integer\IntegerValueBase
 * @see EndouMame\PhpValueObject\Number\Integer\IIntegerValueFactory
 */
trait IntegerValueFactory
{
    #[Override]
    final public static function from(int $value): static
    {
        return new static($value);
    }

    #[Override]
    final public static function fromNullable(?int $value): Option
    {
        if ($value === null) {
            return Option\none();
        }

        return Option\some(static::from($value));
    }

    #[Override]
    final public static function tryFromNullable(?int $value): Result
    {
        if ($value === null) {
            // @phpstan-ignore return.type
            return Result\ok(Option\none());
        }

        // @phpstan-ignore return.type
        return static::tryFrom($value)->map(static fn ($result) => Option\some($result));
    }

    #[Override]
    public static function zero(): static
    {
        return static::from(0);
    }
}
