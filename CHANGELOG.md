# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com), and this project adheres to [Semantic Versioning](https://semver.org).

## Unreleased

## [v2.0.0] - 2021-05-10

### Changed
- Update namespace to `OwenVoke` and package name to `owenvoke/yts` ([62708e9](https://github.com/owenvoke/yts/commit/62708e9870a0e4ef5716bac337d41fc81e4f390b))
- Update to use GitHub Actions ([#4](https://github.com/owenvoke/yts/pull/4))
- Update to use Pest for testing ([#5](https://github.com/owenvoke/yts/pull/5))
- Update to require a minimum of PHP 7.3 ([#5](https://github.com/owenvoke/yts/pull/5))
- Update to use `illuminate/collections` instead of `tightenco/collect` ([6a9fb0d](https://github.com/owenvoke/yts/commit/6a9fb0d9f9f3d4ac1d3a264b4ac876d78118d7d9))
- Add support for PHP 8 ([a681cf1](https://github.com/owenvoke/yts/commit/a681cf180b9fffe3a2030720bb749cd881c9c731))
- Update to test against PHPStan ([#6](https://github.com/owenvoke/yts/pull/6))

## [v1.2.0] - 2019-03-08

### Added
- Add support for PHPUnit 8 ([#1](https://github.com/owenvoke/yts/pull/1))
- Add missing return types ([9e6765e8](https://github.com/owenvoke/yts/commit/9e6765e8d80a5409b7153e12fe4bfc5a0dfada8e))

### Changed
- Update the dot files in the root ([d34f2eb8](https://github.com/owenvoke/yts/commit/d34f2eb8e81d09a30325a8327459c053397c6d5f))

## [v1.1.0] - 2018-01-15

### Fixed
- Updated the domain TLD to `.am` ([Blog post](https://yts.am/blog/yts-am-new-domain-name-for-yts-yify-website))

## [v1.0.2] - 2017-12-06

### Fixed
- Corrected legal name in license

## [v1.0.1] - 2017-11-20

### Fixed
- Corrected the format of the license file

## v1.0.0 - 2017-11-14

### Added
- `Movies::list()` method for accessing a collection of movies from the API.
- `Movies::details()` method for accessing a single `Movie` instance.
- `Movies::suggestions()` method for accessing a collection of suggested movie instances.

[Unreleased]: https://github.com/owenvoke/yts/compare/master...develop
[v1.2.0]: https://github.com/owenvoke/yts/compare/v1.1.0...v1.2.0
[v1.1.0]: https://github.com/owenvoke/yts/compare/v1.0.2...v1.1.0
[v1.0.2]: https://github.com/owenvoke/yts/compare/v1.0.1...v1.0.2
[v1.0.1]: https://github.com/owenvoke/yts/compare/v1.0.0...v1.0.1
