<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Fixers\String;

use EndouMame\PhpValueObject\String\Ulid;
use EndouMame\PhpValueObject\ValueObjectMeta;

/**
 * UlidValue抽象クラスのテスト用実装
 * 単にUlidValueを継承するだけのシンプルなクラス
 */
#[ValueObjectMeta(name: 'ULID', description: 'ULIDのテスト実装')]
final readonly class TestUlidValue extends Ulid
{
    // 追加実装なし - 基本クラスから継承
}
