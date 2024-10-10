# Changelog

All notable changes to this project will be documented in this file.

## [1.0.2] - 2024-10-10

### Changed
- Refactored index file: Removed direct imports for controllers and models to be loaded by autoload, retained middleware import, and streamlined application initialization.

## [1.0.1] - 2024-10-07

### Fixed
- Adjusted database configuration loading in console commands to ensure proper connection to the database.

## [1.0.0] - Initial Release

### Added
- Initial release of the Lithe framework.
- Packagist configuration to enable `composer create-project` support.
- Basic configuration files including `composer.json` and `.env.example`.
