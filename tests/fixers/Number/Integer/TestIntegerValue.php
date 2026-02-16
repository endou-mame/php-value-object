<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Fixers\Number\Integer;

use EndouMame\PhpValueObject\Number\IntegerValue;
use EndouMame\PhpValueObject\ValueObjectMeta;
use Override;

/**
 * IntegerValue抽象クラスのテスト用実装
 * 単にIntegerValueを実装するだけのシンプルなクラス
 */
#[ValueObjectMeta(name: '整数')]
final readonly class TestIntegerValue extends IntegerValue
{
    #[Override]
    protected static function min(): int
    {
        return -1000;
    }

    #[Override]
    protected static function max(): int
    {
        return 1000;
    }
}
