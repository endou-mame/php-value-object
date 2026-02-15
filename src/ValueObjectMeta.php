<?php

declare(strict_types=1);

namespace EndouMame\PhpValueObject;

use Attribute;

/**
 * ValueObjectのメタ情報を定義するAttribute
 */
#[Attribute(Attribute::TARGET_CLASS)]
final readonly class ValueObjectMeta
{
    public function __construct(
        public string $name,
        public ?string $description = null,
    ) {
    }
}
