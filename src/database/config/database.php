<?php

/**
 * Initialize and return the configured database connection.
 *
 * This script initializes the database connection by invoking the `initialize` method
 * from the `\Lithe\Database\Manager` class. The method sets up the connection based on the 
 * environment configuration and returns the configured database connection.
 *
 * @return mixed The configured database connection.
 * @throws \RuntimeException If there is an error setting up the connection.
 * @throws \Exception If the specified database configuration is not found.
 */

use Lithe\Database\Manager as DB;

// DATABASE
return DB::initialize();