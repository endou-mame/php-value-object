# PHP Value Object

[![Packagist Version](https://img.shields.io/packagist/v/endou-mame/php-value-object)](https://packagist.org/packages/endou-mame/php-value-object)
[![PHP Version](https://img.shields.io/packagist/php-v/endou-mame/php-value-object)](https://packagist.org/packages/endou-mame/php-value-object)
[![PHPStan](https://github.com/endou-mame/php-value-object/actions/workflows/phpstan.yml/badge.svg)](https://github.com/endou-mame/php-value-object/actions/workflows/phpstan.yml)
[![Documentation](https://github.com/endou-mame/php-value-object/actions/workflows/deploy-docs.yml/badge.svg)](https://github.com/endou-mame/php-value-object/actions/workflows/deploy-docs.yml)
[![License](https://img.shields.io/packagist/l/endou-mame/php-value-object)](https://github.com/endou-mame/php-value-object/blob/main/LICENSE)

不変性、型安全性、自己検証を持つドメイン値オブジェクトを提供する PHP ライブラリです。

## インストール

```bash
composer require endou-mame/php-value-object
```

## 使用例

### カスタム値オブジェクトの作成

```php
use EndouMame\PhpValueObject\String\StringValue;
use EndouMame\PhpValueObject\ValueObjectMeta;

#[ValueObjectMeta(name: '商品コード')]
final readonly class ProductCode extends StringValue
{
    protected static function minLength(): int { return 5; }
    protected static function maxLength(): int { return 5; }
    protected static function regex(): string { return '/^P[0-9]{4}$/'; }
}

$code = ProductCode::from('P1234');
```

### Result 型によるエラーハンドリング

```php
use EndouMame\PhpMonad\Result;

$result = ProductCode::tryFrom('invalid');

$code = $result
    ->map(fn($code) => $code->value())
    ->unwrapOr('デフォルト');
```

## ドキュメント

詳細なガイドと API リファレンスは [ドキュメントサイト](https://endou-mame.github.io/php-value-object/) を参照してください。

## 要件

- PHP 8.4 以上

## ライセンス

MIT License
