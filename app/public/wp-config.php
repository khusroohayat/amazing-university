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
if (file_exists(dirname(__FILE__) . '/local.php')) {
	// Local database settings
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
} else {
	// Live database settings
	define( 'DB_NAME', 'radixs95_universitydata' );
	define( 'DB_USER', 'radixs95_wp621' );
	define( 'DB_PASSWORD', 'kbt**4kEfxX6' );
	define( 'DB_HOST', 'localhost' );
}


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
define('AUTH_KEY',         'qGoV,`<-S1KY+$f}ii*No&a^BGuoLQh)v4BK<IpT16+mS>*hXBD-0[Xo#s *T}XN');
define('SECURE_AUTH_KEY',  ',fTd$q];+,yCu,l+k cTB7x<u1x6~TUdt,i@*7n<I}*{$64*RTIL8jhytyO0CT!k');
define('LOGGED_IN_KEY',    'L|8+ZK:,[:48*Mj U(_<F%6}iu[w[;(V[nsQgVt2V7GTQ-~n|t2|O9WVs79g8y.~');
define('NONCE_KEY',        '~++s.G7r(%-]_gWKvl2`UHsg&ub-=?]RBup3/_Yil7C:_z|YU.74m&oQH5)sYx&X');
define('AUTH_SALT',        'pf_9XO(.!OfrY/NT))~CL (U%-f=,r*(^3Use]+-0!m!+dSB3tE5y=0y5p(8npt9');
define('SECURE_AUTH_SALT', 'yjF20f1qJ&TLL0+]i06*asQ=S!J7,h&6+R^3%K|NwJ$:`>Z7G+N%,$oF]ST$UD}+');
define('LOGGED_IN_SALT',   'tBBw;ow&O?;yb>85/eL_p]&T>+D@?09cm^Y&O2[68St;zjo,uO%0.R-Oqu!M3IHH');
define('NONCE_SALT',       '(!=>,;/=-x05S6L9`Hz!8R[+w]?RC/tZV@Ue<?}OLK9oeYy~BW/ZeO-_08!~KFLD');

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
