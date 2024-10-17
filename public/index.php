<?php

use Lithe\Support\import;

// Define the project's root directory
define('PROJECT_ROOT', __DIR__ . '/../src');

// Autoload Composer dependencies
require __DIR__ . '/../vendor/autoload.php';

// Load environment variables
\Lithe\Support\Env::load(__DIR__ . '/..');

// Load the database configuration
require PROJECT_ROOT . '/database/config/database.php';

// Import all middleware
import::dir(PROJECT_ROOT . '/Http/Middleware')->get();

// Start the application
require PROJECT_ROOT . '/App.php';