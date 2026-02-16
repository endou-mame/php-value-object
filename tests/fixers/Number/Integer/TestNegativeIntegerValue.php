<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Examples\Number\Integer;

use Override;
use EndouMame\PhpValueObject\Number\NegativeIntegerValue;
use EndouMame\PhpValueObject\ValueObjectMeta;

/**
 * NegativeIntegerValue抽象クラスのテスト用実装
 * 単にNegativeIntegerValueを実装するだけのシンプルなクラス
 */
#[ValueObjectMeta(name: '負の整数')]
final readonly class TestNegativeIntegerValue extends NegativeIntegerValue
{
    #[Override]
    protected static function min(): int
    {
        return -1000;
    }
}
