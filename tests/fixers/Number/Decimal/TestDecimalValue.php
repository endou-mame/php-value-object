<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Examples\Number\Decimal;

use BcMath\Number;
use Override;
use EndouMame\PhpValueObject\Number\DecimalValue;
use EndouMame\PhpValueObject\ValueObjectMeta;

/**
 * DecimalValue抽象クラスのテスト用実装
 * 単にDecimalValueを実装するだけのシンプルなクラス
 */
#[ValueObjectMeta(name: '数値')]
final readonly class TestDecimalValue extends DecimalValue
{
    #[Override]
    protected static function scale(): int
    {
        return 2;
    }

    #[Override]
    protected static function min(): Number
    {
        return new Number('-1000');
    }

    #[Override]
    protected static function max(): Number
    {
        return new Number('1000');
    }
}
