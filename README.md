# codekandis/types

[![Version][xtlink-version-badge]][srclink-changelog]
[![License][xtlink-license-badge]][srclink-license]
[![Minimum PHP Version][xtlink-php-version-badge]][xtlink-php-net]
![Code Coverage][xtlink-code-coverage-badge]

`codekandis/types` provides object type metadata, type string determination and reusable exception types for PHP.

## Index

* [Requirements](#requirements)
* [Installation](#installation)
* [How to use](#how-to-use)
* [Static code analysis](#static-code-analysis)
* [Testing](#testing)
* [Documentation](#documentation)

## Requirements

* PHP `^8.5`
* Composer

## Installation

Install the latest version with

```bash
$ composer require codekandis/types
```

## How to use

`codekandis/types` provides reusable building blocks for object metadata, type string determination and exception
hierarchies.

The package provides:

* [object contracts and object type metadata][doclink-objects]
* [`gettype()` and type-hint string collections][doclink-type-strings]
* [detailed type determination for runtime values][doclink-type-determination]
* [value stringification for human-readable messages][doclink-value-stringification]
* [reusable exception categories with named constructors][doclink-exceptions]

## Static code analysis

Run static analysis with

```bash
$ composer run-script analyse
```

## Testing

Run the tests with

```bash
$ composer run-script test
```

Run the tests and retrieve line coverage with

```bash
$ composer run-script test-coverage
```

Run the tests and retrieve path coverage with

```bash
$ composer run-script test-coverage-paths
```

## Documentation

[See the documentation][doclink] for further information about all available interfaces, classes and exceptions.



[xtlink-version-badge]: https://img.shields.io/badge/version-development-blue.svg
[xtlink-license-badge]: https://img.shields.io/badge/license-MIT-yellow.svg
[xtlink-php-version-badge]: https://img.shields.io/badge/php-%5E8.5-8892BF.svg
[xtlink-code-coverage-badge]: https://img.shields.io/badge/coverage-100%25-green.svg
[xtlink-php-net]: https://php.net

[srclink-changelog]: ./CHANGELOG.md
[srclink-license]: ./LICENSE

[doclink]: ./docs/README.md
[doclink-exceptions]: ./docs/exceptions.md
[doclink-objects]: ./docs/objects.md
[doclink-type-determination]: ./docs/type-determination.md
[doclink-type-strings]: ./docs/type-strings.md
[doclink-value-stringification]: ./docs/value-stringification.md
