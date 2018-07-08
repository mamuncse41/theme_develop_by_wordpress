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
define('DB_NAME', 'themeDevelop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '7#T{zr)J`AX6}5,PVhZ`OBJ:-i%)TRtz^M.4p5uuN:45+f?Nk#3sGlYT]JYOoN^X');
define('SECURE_AUTH_KEY',  '^3ji}J=-$mr[M-HN .iY2e90%5~o3Ij&pRH?(tC3WK%}vv;e^(Q4B {KW-gfd),%');
define('LOGGED_IN_KEY',    'C:F+hWOO!^1qxI5V9EPM3niDy kl(|;)/wJ5ZmBGJwMFso&;]>#o}m1h:+=1E ~=');
define('NONCE_KEY',        '|7{*-PI/G~ieDg5OFw?#Kz=(/=@8p;- Dj>oFu:VVyFO!nn6fLbD/0Hl~QnBrHct');
define('AUTH_SALT',        '%x`JU~saE>@|9>~X-1M>ZBNl!qj6^F1N5!GxXmhJP#UIYNBQEGq^F,7V8a(5U9^$');
define('SECURE_AUTH_SALT', 'K 8l(:+Ga~#ekaI*T^T:sIMXCsnLt-|=sO@qDF96t|%<jiPm#Ls7uFN|$m@@fh&j');
define('LOGGED_IN_SALT',   '@9m,D09M^V#WTo,0#)=7RMut G_]/^D4{hn,qx=OS#3xQt9J$kSp}M90YE<.7m?s');
define('NONCE_SALT',       'wmcpFdSZOw<2t.$/!dI>9[)4~57UPC-)VRk&4WUojrMm4{!9~q8zh5qP} CkMf4}');

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
define(‘WP_MEMORY_LIMIT’, ‘256M’);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
