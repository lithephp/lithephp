# Changelog

All notable changes to this project will be documented in this file.

## [1.2.0] - 2024-10-28

### Modified
- **Remove explicit import of middlewares to allow automatic loading by Composer**: The explicit import of middlewares has been removed to enable automatic loading by Composer.
- **Update composer.json to include the App\Http\Middleware directory and require version 1.2 of lithephp/framework**: The `composer.json` has been updated to include the `App\Http\Middleware` directory and require version 1.2 of `lithephp/framework`.

## [1.1.0] - 2024-10-17

### changed

- **Description**: Updates the Skeleton to utilize version 1.1 of the Lithe Framework, incorporating all improvements and new features available in this version.
- **Changes**:
  - Improvements to routing system and overall performance.
  - Enhancements in route management and simplification of App class.
  - Removed direct access to DB_CONNECTION; now accessible via Manager's connection() method.
  - Ensured database initialization regardless of DB_SHOULD_INITIATE environment variable.

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
