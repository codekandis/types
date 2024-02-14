# Changelog

All notable changes to this project will be documented in this file.

The format is based on [keep a changelog 1.1.0][xtlink-keep-a-changelog]
and this project adheres to [Semantic Versioning 2.0.0][xtlink-semantic-versioning].

## [1.0.0] - 2024-08-04

### Added

* composer packages
  * require
    * `php` [>=8.3]
  * require-dev
    * `roave/security-advisories` [dev-master]
    * `codekandis/phpunit` [^5.0.0]
    * `rector/rector` [^1.2.2]
  * autoload-dev
    * psr-4
      * `CodeKandis\Types\Build\`
        * `build/`
      * `CodeKandis\Types\Tests\`
        * `tests/`
  * autoload
    * psr-4
      * `CodeKandis\Types\`
        * `src/`
  * scripts
    * `test`
* PHPUnit tests
  * configuration
  * externalized data providers
  * tests
* rector
  * configuration script
  * shell script
* GitHub workflows
  * `run-tests`
* `Type` representing a class providing type information about an object
* `BaseObject` representing a base object
* base interfaces
* type enumerations
  * `GetTypeTypes` representing an enumeration of types like PHP's `gettype()` function
  * `MaskedGetTypeTypes` representing an enumeration of masked types like PHP's `gettype()` function
  * `TypeHintTypes` representing an enumeration of types like PHP's type hints
  * `MaskedTypeHintTypes` representing an enumeration of masked types like PHP's type hints
* `TypeDetermination\TypeDeterminator` representing a type determinator
* various exceptions
* documentation
* `CHANGELOG.md`
* `CODE_OF_CONDUCT.md`
* `LICENSE`
* `README.md`
* `.gitattributes` to ignore dev-assets

[1.0.0]: https://github.com/codekandis/types/tree/1.0.0



[xtlink-keep-a-changelog]: http://keepachangelog.com/en/1.1.0/
[xtlink-semantic-versioning]: http://semver.org/spec/v2.0.0.html
