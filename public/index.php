<?php

use Lithe\Support\import;

// Define the project's root directory
define('PROJECT_ROOT', __DIR__ . '/../src');

// Autoload Composer dependencies
require __DIR__ . '/../vendor/autoload.php';

// Load environment variables
\Lithe\Support\Env::load(__DIR__ . '/..');

// Load the database configuration
define('DB_CONNECTION', require PROJECT_ROOT . '/database/config/database.php');

// Import all models, middleware, and controllers
import::dir(PROJECT_ROOT . '/models')->get();
import::dir(PROJECT_ROOT . '/Http/Middleware')->get();
import::dir(PROJECT_ROOT . '/Http/Controllers')->get();

// Start the application
require PROJECT_ROOT . '/App.php';