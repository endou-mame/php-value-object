<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Fixers\Number\Decimal;

use BcMath\Number;
use EndouMame\PhpValueObject\Number\PositiveDecimalValue;
use EndouMame\PhpValueObject\ValueObjectMeta;
use Override;

/**
 * PositiveDecimalValue抽象クラスのテスト用実装
 * ゼロを含まない正の小数値オブジェクト
 */
#[ValueObjectMeta(name: '正の数値')]
final readonly class TestPositiveDecimalValue extends PositiveDecimalValue
{
    #[Override]
    protected static function scale(): int
    {
        return 2;
    }

    #[Override]
    protected static function min(): Number
    {
        return new Number('0.01');
    }

    #[Override]
    protected static function max(): Number
    {
        return new Number('1000');
    }
}
