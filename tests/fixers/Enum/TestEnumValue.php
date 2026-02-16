<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject\Examples\Enum;

use EndouMame\PhpValueObject\Enum\EnumValueFactory;
use EndouMame\PhpValueObject\Enum\EnumValueObjectDefault;
use EndouMame\PhpValueObject\Enum\IEnumValue;
use EndouMame\PhpValueObject\ValueObjectMeta;

#[ValueObjectMeta(name: '列挙型', description: '列挙型の値オブジェクトの例')]
enum TestEnumValue: string implements IEnumValue
{
    use EnumValueFactory;
    use EnumValueObjectDefault;

    case Value1 = 'Value1';
    case Value2 = 'Value2';
    case Value3 = 'Value3';
}
