# Type Determination

[Back to documentation index][doclink-documentation-index] | [Back to project README][doclink-project-readme]

## Index

* [Purpose](#purpose)
* [`TypeDeterminer`](#typedeterminer)
* [`TypeDeterminationKind`](#typedeterminationkind)
* [Examples](#examples)
* [Detailed values](#detailed-values)
* [Failure model](#failure-model)
* [Source reference](#source-reference)

## Purpose

Type determination converts a runtime value into a deterministic type string.

This is different from validation. The determiner does not decide whether a value is allowed. It only describes what
kind of value it received.

## `TypeDeterminer`

`TypeDeterminerInterface` defines one public method:

```php
determine( mixed $value, TypeDeterminationKind $kind ): string
```

`TypeDeterminer` implements that method and selects the output format through `TypeDeterminationKind`.

## `TypeDeterminationKind`

`TypeDeterminationKind` has four cases:

* `GetType`
  Returns PHP's raw `gettype()` style.
* `GetTypeDetailed`
  Returns `gettype()` style with details for resources, objects and booleans.
* `TypeHint`
  Returns PHP type-hint style names.
* `TypeHintDetailed`
  Returns type-hint style names with details for resources, objects and booleans.

## Examples

```php
use CodeKandis\Types\TypeDetermination\TypeDeterminationMode;
use CodeKandis\Types\TypeDetermination\TypeDeterminer;

$determiner = new TypeDeterminer();

$determiner->determine( 42, TypeDeterminationMode::GetType );
// integer

$determiner->determine( 42, TypeDeterminationMode::TypeHint );
// int

$determiner->determine( false, TypeDeterminationMode::GetTypeDetailed );
// boolean<false>

$determiner->determine( false, TypeDeterminationMode::TypeHintDetailed );
// bool<false>

$determiner->determine( new stdClass(), TypeDeterminationMode::TypeHintDetailed );
// object<stdClass>
```

## Detailed values

The detailed modes add information where the plain type alone is lossy.

Booleans include the concrete value:

```php
$determiner->determine( true, TypeDeterminationKind::TypeHintDetailed );
// bool<true>
```

Objects include the FQCN:

```php
$determiner->determine( new stdClass(), TypeDeterminationKind::GetTypeDetailed );
// object<stdClass>
```

Resources include their resource type while they are open. Closed resources are represented separately.

## Failure model

The determiner has no application-level failure path. Unknown PHP types are represented by the unknown type value of
the selected type string collection.

That means callers get a string for diagnostics and messages. They do not get a validation decision.

## Source reference

See the complete [source reference][doclink-source-reference].



[doclink-documentation-index]: ./README.md
[doclink-project-readme]: ../README.md
[doclink-source-reference]: ./source-reference.md
