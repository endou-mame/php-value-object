<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Enum;

use EndouMame\PhpValueObject\IValueObject;

/**
 * 列挙型の値オブジェクト インターフェース
 * @see EndouMame\PhpValueObject\Enum\EnumValueFactory
 */
interface IEnumValue extends IValueObject, IEnumValueFactory
{
}
