<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Fixers\Number\Integer;

use EndouMame\PhpValueObject\Number\PositiveIntegerValue;
use EndouMame\PhpValueObject\ValueObjectMeta;
use Override;

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
