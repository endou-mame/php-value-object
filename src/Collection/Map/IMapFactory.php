<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Collection\Map;

use EndouMame\PhpMonad\Result;
use EndouMame\PhpValueObject\Collection\Pair;
use EndouMame\PhpValueObject\Error\IErrorValue;
use EndouMame\PhpValueObject\Error\ValueObjectError;

/**
 * マップコレクション ファクトリインターフェース
 * @see EndouMame\PhpValueObject\Collection\Map
 *
 * @template TKey
 * @template TValue
 */
interface IMapFactory
{
    /**
     * 信頼できるプリミティブ値からインスタンスを生成する
     *
     * @template TFromKey of TKey
     * @template TFromValue of TValue
     *
     * @param  Pair<TFromKey,TFromValue>   ...$values
     * @return static<TFromKey,TFromValue>
     */
    public static function from(Pair ...$values): static;

    /**
     * 信頼できるプリミティブ値からインスタンスを生成する
     *
     * @template TTryFromKey of TKey
     * @template TTryFromValue of TValue
     *
     * @param  Pair<TTryFromKey,TTryFromValue>                            ...$values
     * @return Result<static<TTryFromKey,TTryFromValue>,ValueObjectError>
     */
    public static function tryFrom(Pair ...$values): Result;

    /**
     * 信頼できるプリミティブ値からインスタンスを生成する
     *
     * @template TTryFromKey of TKey
     * @template TTryFromValue of TValue
     *
     * @param  (Pair<Result<TTryFromKey,IErrorValue>,Result<TTryFromValue,IErrorValue>>|Pair) ...$values
     * @return Result<static<TTryFromKey,TTryFromValue>,ValueObjectError>
     */
    public static function tryFromResults(Pair ...$values): Result; /** @phpstan-ignore-line */

    /**
     * 空のコレクションを作成する
     * @return static<TKey,TValue>
     */
    public static function empty(): static;
}
