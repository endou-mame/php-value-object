<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Number;

use Override;
use EndouMame\PhpMonad\Result;
use EndouMame\PhpValueObject\Error\ValueObjectError;
use EndouMame\PhpValueObject\Number\Integer\IntegerValueBase;
use EndouMame\PhpValueObject\Number\Integer\IntegerValueFactory;

/**
 * 負の整数の値オブジェクト
 */
readonly class NegativeIntegerValue extends IntegerValueBase
{
    use IntegerValueFactory;

    /**
     * Avoid new() operator.
     */
    final private function __construct(int $value)
    {
        parent::__construct($value);
    }

    #[Override]
    final public static function tryFrom(int $value): Result
    {
        return static::isValidRange($value)
            ->andThen(static fn () => static::isValid($value))
            ->andThen(static fn () => Result\ok(static::from($value)));
    }

    /**
     * @return negative-int
     */
    #[Override]
    protected static function min(): int
    {
        return IntegerValueBase::MIN_VALUE;
    }

    /**
     * @return negative-int
     */
    #[Override]
    protected static function max(): int
    {
        return -1;
    }

    #[Override]
    final protected static function isValidRange(int $value): Result
    {
        $minValue = max(static::min(), IntegerValueBase::MIN_VALUE);
        $maxValue = min(static::max(), 0);

        if ($value < $minValue || $value > $maxValue) {
            return Result\err(ValueObjectError::number()->invalidRange(
                className: static::class,
                min: $minValue,
                max: $maxValue,
                value: $value,
            ));
        }

        return Result\ok(true);
    }

    #[Override]
    protected static function isValid(int $value): Result
    {
        return Result\ok(true);
    }
}
