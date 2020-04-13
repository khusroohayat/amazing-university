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
define('AUTH_KEY',         'TLDLQvuYJCVThnhyTal43sG+crgLXChM3y4Ye3KYhUJviFP8CD1s04XIwWrTPunkP6v/U/a0shQu/zB/od1q3Q==');
define('SECURE_AUTH_KEY',  'A61T8HO58l99IzzONTFlY985ZBfcJIRw0BR19ctax6a9/wyJCuzrgMQL053d5+QGb4kGaidFlJWH4BRKkaYjHA==');
define('LOGGED_IN_KEY',    'RG3gvDkg+bylvtOI2SVxquJuaOdqelQ/dqLVIzanA8rHNVxLazJqtpoGgH/MGqJrHFFlOD0tzQYeG0SJhm/N5g==');
define('NONCE_KEY',        'zBvRjupMfRyz18Xm29ZUfg1al+d8XTX/7LDbEPoO4wD+zVSbNcoMWAkt18Q8H0wYch4vsA/wwlhQqOvmZuqGew==');
define('AUTH_SALT',        'SDk70Y/JIAufYm2kyuC4ZRUnO/XAlWnvoRkRrdIVh0wpzMsAI1PeYjeNzxKNHJDzqyAAqr4F4+yxpH0hsuX6Rw==');
define('SECURE_AUTH_SALT', 'gyIDGyfjwN5il/K8pty7MZkY8IyfVYn9LF6kyNj+vARjvjINY6NtSz8dIUYi0U0BDiAofUT5o90G1E0m02IblQ==');
define('LOGGED_IN_SALT',   '3o6wUOUIKBtMX74Bh2y4hnVTg1E2O8Ownb8FsLzK3QRWH7wbkhIGSsg9r0cqjKl5kgXvl5Fg7/SFCXAbuSw5Xw==');
define('NONCE_SALT',       'Wi9sp0wcRYb+xh+xSBF2O6kO7S1bCtizYdORkakdLZR7Z5I6Qorrj2oMaOimK26+kd4OS+6Ibku0brTVVHdq2w==');

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
