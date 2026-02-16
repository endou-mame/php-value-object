<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Examples\Number\Integer;

use Override;
use EndouMame\PhpValueObject\Number\PositiveIntegerValue;
use EndouMame\PhpValueObject\ValueObjectMeta;

/**
 * PositiveIntegerValue抽象クラスのテスト用実装
 * 単にPositiveIntegerValueを実装するだけのシンプルなクラス
 */
#[ValueObjectMeta(name: '正の整数')]
final readonly class TestPositiveIntegerValue extends PositiveIntegerValue
{
    #[Override]
    protected static function max(): int
    {
        return 1000;
    }
}
