<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Number\Decimal;

use BcMath\Number;
use EndouMame\PhpMonad\Option;
use EndouMame\PhpMonad\Result;
use EndouMame\PhpValueObject\Error\ValueObjectError;

/**
 * 少数の値オブジェクト ファクトリインターフェース
 * @see EndouMame\PhpValueObject\Number\Decimal\DecimalValueFactory
 */
interface IDecimalValueFactory
{
    /**
     * 信頼できるプリミティブ値からインスタンスを生成する
     */
    public static function from(Number $value): static;

    /**
     * 信頼できるプリミティブ値からインスタンスを生成する（Null許容）
     * @return Option<static>
     */
    public static function fromNullable(?Number $value): Option;

    /**
     * 信頼できないプリミティブ値からインスタンスを生成する
     * @return Result<static,ValueObjectError>
     */
    public static function tryFrom(Number $value): Result;

    /**
     * 信頼できないプリミティブ値からインスタンスを生成する（Null許容）
     * @return Result<Option<static>,ValueObjectError>
     */
    public static function tryFromNullable(?Number $value): Result;

    /**
     * ゼロの値オブジェクトを生成する
     */
    public static function zero(): static;
}
