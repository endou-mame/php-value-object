<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Number\Integer;

use DivisionByZeroError;
use Override;
use EndouMame\PhpMonad\Result;
use EndouMame\PhpValueObject\Error\ValueObjectError;

/**
 * Default implementation of IArithmetic
 * @see EndouMame\PhpValueObject\Number\Integer\IArithmetic
 * @see EndouMame\PhpValueObject\Number\Integer\IntegerValueBase
 * @see EndouMame\PhpValueObject\Number\Integer\IIntegerValueFactory
 */
trait Arithmetic
{
    #[Override]
    final public function add(IntegerValueBase $other): static
    {
        return static::from($this->value + $other->value);
    }

    /**
     * @return Result<static,ValueObjectError>
     */
    #[Override]
    final public function tryAdd(IntegerValueBase $other): Result
    {
        return static::tryFrom($this->value + $other->value);
    }

    #[Override]
    final public function sub(IntegerValueBase $other): static
    {
        return static::from($this->value - $other->value);
    }

    /**
     * @return Result<static,ValueObjectError>
     */
    #[Override]
    final public function trySub(IntegerValueBase $other): Result
    {
        return static::tryFrom($this->value - $other->value);
    }

    #[Override]
    final public function mul(IntegerValueBase $other): static
    {
        return static::from($this->value * $other->value);
    }

    /**
     * @return Result<static,ValueObjectError>
     */
    #[Override]
    final public function tryMul(IntegerValueBase $other): Result
    {
        return static::tryFrom($this->value * $other->value);
    }

    #[Override]
    final public function div(IntegerValueBase $other): static
    {
        if ($other->isZero()) {
            throw new DivisionByZeroError('Division by zero');
        }

        // 整数除算
        return static::from(intdiv($this->value, $other->value));
    }

    /**
     * @return Result<static,ValueObjectError>
     */
    #[Override]
    final public function tryDiv(IntegerValueBase $other): Result
    {
        if ($other->isZero()) {
            return Result\err(ValueObjectError::number()->invalidDivideByZero(
                className: static::class,
            ));
        }

        return static::tryFrom(intdiv($this->value, $other->value));
    }
}
