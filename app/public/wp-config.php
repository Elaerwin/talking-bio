<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '+QAkVxfe9wr7wxut/r/EWqc0kOpl843oM++JV+OXHQt6ZGRqTcRZvbTduXTf2DKjzDd1wONvmdKBjG4t7N/LcQ==');
define('SECURE_AUTH_KEY',  '4yvajVZwomfrK8V3TRj2eIAwOFFzl2kmtf9L/EQWkXN+vwxlyYg7/S6G/cBolkvxzIkq9k9/p4AVeU1cQT7M8Q==');
define('LOGGED_IN_KEY',    'PULCJlE22Oh+cvDd/1VNb2q4UWyx8FNWBquKugUUCSnJIPVttEEbH2dfzzWW21DAG3ypoK47ktI6CO3c3dzVGQ==');
define('NONCE_KEY',        '/6ImPoLGUEVW7W8MGMvzLoBjRiAl27hdKDStCSMTQB2iIL7ib6ywL52Ejs1uNLQMLUc/tRUgCjDVxHwgrInUFA==');
define('AUTH_SALT',        'iu/FX533HNe3FbTKiGYm+OiuN162qJN/7Ios/BnABMLQFYsRYu7fy3xVBxMPv+NP/FKwv/+baQsfsaZ85MCQTg==');
define('SECURE_AUTH_SALT', 'hkkgX1t271xWjLLirxoD+VfYc6hNNaBUNzdBJ9FqXFk14fiVghaM5GzSpsesWQpQIPsFFeTHyP5gPCfmNY1Z8g==');
define('LOGGED_IN_SALT',   'xKH9jda7zdBCQ4lhJm1Dmyy2y0UTplcLPpbMMj/bEnGc8MHDT4tSMj3ficITQNzG2eJbohHF+fnugjNhiAJGxA==');
define('NONCE_SALT',       'AmR3sypRD0LUMYdfjBeIoe5oz9JDa1fRjQ6gLDujVuZpxQNENAUICRZ8VOU47E9D5WM+A1GldSXhVqrio3VeUQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
