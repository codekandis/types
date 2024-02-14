# Changelog

All notable changes to this project will be documented in this file.

The format is based on [keep a changelog 1.1.0][xtlink-keep-a-changelog]
and this project adheres to [Semantic Versioning 2.0.0][xtlink-semantic-versioning].

## [1.0.0] - 2024-05-23

### Added

* composer packages
  * require
    * `php` [>=8.3]
  * require-dev
    * `roave/security-advisories` [dev-master]
    * `codekandis/phpunit` [^5.0.0]
    * `rector/rector` [^1.0.5]
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
* PHPUnit tests
  * configuration
  * externalized data providers
  * tests
* rector
  * configuration script
  * shell script
* `NativeTypes` representing PHP's native types
* `StraightTypes` representing straight types
* `TypeDeterminator` representing a type determinator
* `CODE_OF_CONDUCT.md`
* `README.md`
  * documentation
* `CHANGELOG.md`

[1.0.0]: https://github.com/codekandis/types/tree/1.0.0



[xtlink-keep-a-changelog]: http://keepachangelog.com/en/1.1.0/
[xtlink-semantic-versioning]: http://semver.org/spec/v2.0.0.html
