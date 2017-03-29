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
define('DB_NAME', 'grabjet');

/** MySQL database username */
define('DB_USER', 'dbuser');

/** MySQL database password */
define('DB_PASSWORD', '123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!#c*L^H63ksvqf0pzrh@pyOp)mlGJP=9s/DK,D1s]UX#XY15g(!$w6orJ|#Z-{8a');
define('SECURE_AUTH_KEY',  '= SRhL-_{MX[4nl}^%8eAt<6ajM4X8tA2~fB#o5o}f/d>]t:5!@<uTN)e27,~TqG');
define('LOGGED_IN_KEY',    'L.D[i+ibsy?rF?U3rUX?PJEM67 oZfM>z6(b$FvQ>[adMv6{#`:+5Qn&o;E?ut.v');
define('NONCE_KEY',        'TX/(zG}jiYzsfrn(r5H;t|3T?4=e5Y0lNmx!iz4pX}.8T0LxhwAvct@7.F+yIoS|');
define('AUTH_SALT',        ']SazYk$O?,K&%%qn[;0>`|&FSC+Z!?62#;EX~;{Jx cgo~getlhR8}eF[#PQ/!MW');
define('SECURE_AUTH_SALT', 'S!;kN1>ar~w{fMG}},~{B)3i:B4?(n~R[vx`^WCF[Sut,LqRifY7#{.;XV~B+O)f');
define('LOGGED_IN_SALT',   'elvR`/nEVA+)UvOLvy:mBM>@>]Ie}{|a5Eh^gA? j{YF,e7Kr+PaO{94xh=?+cF:');
define('NONCE_SALT',       'u-F!$e_P(Nx]RM3Bv*e>11g{1WUBvE9*d(/qM!0gC(P1O)*J@aENc</QHN~4K^]L');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
