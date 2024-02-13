# codekandis/types

[![Version][xtlink-version-badge]][srclink-changelog]
[![License][xtlink-license-badge]][srclink-license]
[![Minimum PHP Version][xtlink-php-version-badge]][xtlink-php-net]
![Code Coverage][xtlink-code-coverage-badge]

`codekandis/types` is a library providing base types, interfaces, classes and exceptions.

## Index

* [Installation](#installation)
* [Testing](#testing)
  * [Known coverage issues](#known-coverage-issues)
* [How to use](#how-to-use)

## Installation

Install the latest version with

```bash
$ composer require codekandis/types
```

## Testing

Test the code with

```bash
$ composer run-script test
```

### Known coverage issues

This library is 99.17% covered by tests. But it can be assumed as 100% tested.

Currently, there is no known type to cause a type check resolving to `unknown`.

## How to use

[See the documentation][doclink] for further information about all available interfaces and classes.



[xtlink-version-badge]: https://img.shields.io/badge/version-development-blue.svg
[xtlink-license-badge]: https://img.shields.io/badge/license-MIT-yellow.svg
[xtlink-php-version-badge]: https://img.shields.io/badge/php-%3E%3D%208.4-8892BF.svg
[xtlink-code-coverage-badge]: https://img.shields.io/badge/coverage-99.17%25-green.svg
[xtlink-php-net]: https://php.net

[srclink-changelog]: ./CHANGELOG.md
[srclink-license]: ./LICENSE

[doclink]: ./docs/README.md
