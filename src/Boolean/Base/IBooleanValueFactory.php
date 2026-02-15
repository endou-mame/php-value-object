<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Boolean\Base;

use EndouMame\PhpMonad\Option;
use EndouMame\PhpMonad\Result;
use EndouMame\PhpValueObject\Error\ValueObjectError;

/**
 * 真偽値の値オブジェクト ファクトリインターフェース
 * @see EndouMame\PhpValueObject\Boolean\Base\BooleanValueFactory
 */
interface IBooleanValueFactory
{
    /**
     * 信頼できるプリミティブ値からインスタンスを生成する
     */
    public static function from(bool $value): static;

    /**
     * 信頼できるプリミティブ値からインスタンスを生成する（Null許容）
     * @return Option<static>
     */
    public static function fromNullable(?bool $value): Option;

    /**
     * 信頼できないプリミティブ値からインスタンスを生成する
     * @return Result<static,ValueObjectError>
     */
    public static function tryFrom(bool $value): Result;

    /**
     * 信頼できないプリミティブ値からインスタンスを生成する（Null許容）
     * @return Result<Option<static>,ValueObjectError>
     */
    public static function tryFromNullable(?bool $value): Result;

    /**
     * 真値のインスタンスを取得
     */
    public static function true(): static;

    /**
     * 偽値のインスタンスを取得
     */
    public static function false(): static;
}
