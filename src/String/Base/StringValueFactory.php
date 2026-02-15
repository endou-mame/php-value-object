<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\String\Base;

use Override;
use EndouMame\PhpMonad\Option;
use EndouMame\PhpMonad\Result;

/**
 * Default implementation of IStringValueFactory
 * @see EndouMame\PhpValueObject\String\StringValue
 * @see EndouMame\PhpValueObject\String\Base\IStringValueFactory
 */
trait StringValueFactory
{
    #[Override]
    final public static function from(string $value): static
    {
        return new static($value);
    }

    #[Override]
    final public static function fromNullable(?string $value): Option
    {
        if ($value === null) {
            return Option\none();
        }

        return Option\some(static::from($value));
    }

    #[Override]
    final public static function tryFromNullable(?string $value): Result
    {
        if ($value === null) {
            // @phpstan-ignore return.type
            return Result\ok(Option\none());
        }

        // @phpstan-ignore return.type
        return static::tryFrom($value)->map(static fn ($result) => Option\some($result));
    }
}
