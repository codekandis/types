# Type Strings

[Back to documentation index][doclink-documentation-index] | [Back to project README][doclink-project-readme]

## Index

* [Purpose](#purpose)
* [Collections](#collections)
* [Properties](#properties)
* [Factory methods](#factory-methods)
* [Concrete values](#concrete-values)
* [Masked values](#masked-values)
* [When to use which style](#when-to-use-which-style)
* [Source reference](#source-reference)

## Purpose

Type string collections provide deterministic names for PHP value types.

They are not validators. They are shared vocabularies for code that needs to describe types consistently.

## Collections

`GetTypeTypes` represents names compatible with PHP's `gettype()` output.

`TypeHintTypes` represents names compatible with PHP type hints where possible.

`MaskedGetTypeTypes` and `MaskedTypeHintTypes` wrap their values in angle brackets. Masked values are intended for
message fragments where the output must visibly mark a type instead of a literal value.

## Properties

All type string collections expose the same property set:

* `$unknownType`
* `$null`
* `$resource`
* `$typedResourceTemplate`
* `$closedResource`
* `$array`
* `$object`
* `$typedObjectTemplate`
* `$boolean`
* `$typedBooleanTemplate`
* `$integer`
* `$float`
* `$string`

The names are intentionally boring. That is a feature here, not a lack of imagination.

## Factory methods

All type string collections provide the same factory methods:

```php
createTypedResource( string $resourceType ): string
createTypedObject( string $className ): string
createTypedBoolean( bool $value ): string
```

Examples:

```php
use CodeKandis\Types\GetTypeTypes;
use CodeKandis\Types\TypeHintTypes;

$getTypeTypes  = new GetTypeTypes();
$typeHintTypes = new TypeHintTypes();

$getTypeTypes->createTypedBoolean( false );
// boolean<false>

$typeHintTypes->createTypedBoolean( false );
// bool<false>

$getTypeTypes->createTypedObject( stdClass::class );
// object<stdClass>

$typeHintTypes->createTypedObject( stdClass::class );
// object<stdClass>
```

## Concrete values

| Meaning         | `GetTypeTypes`      | `TypeHintTypes`   |
|-----------------|---------------------|-------------------|
| null            | `NULL`              | `null`            |
| resource        | `resource`          | `resource`        |
| closed resource | `resource (closed)` | `closed-resource` |
| array           | `array`             | `array`           |
| object          | `object`            | `object`          |
| boolean         | `boolean`           | `bool`            |
| integer         | `integer`           | `int`             |
| float           | `double`            | `float`           |
| string          | `string`            | `string`          |
| unknown type    | `unknown type`      | `unknown-type`    |

## Masked values

Masked collections wrap the same semantic values in angle brackets.

```php
use CodeKandis\Types\MaskedTypeHintTypes;

$types = new MaskedTypeHintTypes();

$types->array;
// <array>

$types->createTypedBoolean( true );
// <bool<true>>

$types->createTypedObject( stdClass::class );
// <object<stdClass>>
```

Masked values are useful when a message must distinguish a literal value from a type marker.

Example:

* `42` can be a literal integer value
* `<int>` clearly describes a type
* `<object<stdClass>>` clearly describes a concrete object type

## When to use which style

Use `GetTypeTypes` when the output should match PHP's runtime type wording.

Use `TypeHintTypes` when the output should match type declarations and PHPDoc-style language.

Use masked variants in exception messages where non-scalar values cannot be rendered as meaningful literal values.

Do not parse masked values as a protocol. They are human-readable message fragments, not a serialization format.

## Source reference

See the complete [source reference][doclink-source-reference].



[doclink-documentation-index]: ./README.md
[doclink-project-readme]: ../README.md
[doclink-source-reference]: ./source-reference.md
