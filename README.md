# codekandis/json-codec

[![Version][xtlink-version-badge]][srclink-changelog]
[![License][xtlink-license-badge]][srclink-license]
[![Minimum PHP Version][xtlink-php-version-badge]][xtlink-php-net]
![Code Coverage][xtlink-code-coverage-badge]

`codekandis/types` is a library providing base types, interfaces and classes.

## Index

* [Installation](#installation)
* [How to use](#how-to-use)
  * [Type determination](#type-determination)

## Installation

Install the latest version with

```bash
$ composer require codekandis/types
```

## How to use

### Type determination

The following examples show how to determine the type of a value with the [`TypeDeterminator`][srclink-type-determinator].  The parameter `$native` specifies if the determined type has to be as PHP's wrapped function [`gettype()`][xtlink-php-net-gettype] returns it or if it has to be as strict as type hints.

```php
$value = false;

( new TypeDeterminator() )
  ->determine( $value );
/**
 * boolean
 */

( new TypeDeterminator() )
  ->determine( $value, true );
/**
 * boolean
 */

( new TypeDeterminator() )
  ->determine( $value, false );
/**
 * bool
 */

$value = 42.42;

( new TypeDeterminator() )
  ->determine( $value );
/**
 * double
 */

( new TypeDeterminator() )
  ->determine( $value, true );
/**
 * double
 */

( new TypeDeterminator() )
  ->determine( $value, false );
/**
 * float
 */
```



[xtlink-version-badge]: https://img.shields.io/badge/version-development-blue.svg
[xtlink-license-badge]: https://img.shields.io/badge/license-MIT-yellow.svg
[xtlink-php-version-badge]: https://img.shields.io/badge/php-%3E%3D%208.3-8892BF.svg
[xtlink-code-coverage-badge]: https://img.shields.io/badge/coverage-100%25-green.svg
[xtlink-php-net]: https://php.net
[xtlink-php-net-gettype]: https://www.php.net/manual/en/function.gettype.php

[srclink-changelog]: ./CHANGELOG.md
[srclink-license]: ./LICENSE
[srclink-type-determinator]: ./src/TypeDeterminator.php
