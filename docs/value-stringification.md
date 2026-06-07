# Value Stringification

[Back to documentation index][doclink-documentation-index] | [Back to project README][doclink-project-readme]

## Index

* [Purpose](#purpose)
* [`StringifyValueTrait`](#stringifyvaluetrait)
* [Scalar values](#scalar-values)
* [Non-scalar values](#non-scalar-values)
* [Intended use](#intended-use)
* [Source reference](#source-reference)

## Purpose

Value stringification converts arbitrary values into human-readable message fragments.

It exists for exceptions. Exception messages should describe the relevant value without forcing every caller to repeat
the same conversion logic.

## `StringifyValueTrait`

`StringifyValueTrait` provides protected stringification for classes that need readable values in messages.

The trait uses `TypeDeterminer` internally for values that are better described as types than as literal values.

## Scalar values

Scalar values and `null` are represented as readable literal values.

| Value kind | Example string |
|------------|----------------|
| `null`     | `null`         |
| `false`    | `false`        |
| `true`     | `true`         |
| `int`      | `42`           |
| `float`    | `42.42`        |
| `string`   | `foobar`       |

## Non-scalar values

Non-scalar values are represented as marked type strings.

| Value kind      | Example string        |
|-----------------|-----------------------|
| `array`         | `<array>`             |
| `object`        | `<object<FQCN>>`      |
| resource        | `<resource<stream>>`  |
| closed resource | `<closed-resource>`   |

This is intentional. Dumping arrays or objects into exception messages would create noisy and unstable messages.

## Intended use

Use value stringification for diagnostics and exception messages.

Do not use it as serialization. The output is designed for humans and tests of human-readable messages, not for data
roundtrips.

Do not use it as validation. The trait describes a value. It does not decide whether that value is valid.

## Source reference

See the complete [source reference][doclink-source-reference].



[doclink-documentation-index]: ./README.md
[doclink-project-readme]: ../README.md
[doclink-source-reference]: ./source-reference.md
