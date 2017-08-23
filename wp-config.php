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
define('DB_NAME', 'cashmani_ecom1');

/** MySQL database username */
define('DB_USER', 'cashmani_ecom1');

/** MySQL database password */
define('DB_PASSWORD', 'j9ejdj1');

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
define('AUTH_KEY',         '3ob@@3?C7NK?fh}-$yzwsx?5&Y?Wb& qqiE|$^w4X`7An`mZK4qDQvCYhJbG>N}5');
define('SECURE_AUTH_KEY',  'MxEy/qq>.9|k:Sb/ ]F(omXwlgyXox#:Ogg6GKEgw.g%4$3.3YXY0A(66c:ldCKp');
define('LOGGED_IN_KEY',    'hF{/xqJ[|1uq$SJ#9 (O.iRm.0s=_hF %1W abys8hi7?}*lqmA)c&_nO`/CO).#');
define('NONCE_KEY',        'x6T,oSoy`.NV[ke<y^!> Q%$_T]LxWwxpdhC><x}}ABCyX*f3=SCB@219SE|pz~t');
define('AUTH_SALT',        'h7*0j`^JLL<W);m!e@H`WZw}7C( WSB>?7!=/ &f)^->DZVh=KKL0S7U);j8$ug.');
define('SECURE_AUTH_SALT', 'PL4uBYx$;w1ak[ZDI8^+A|qor|>+V:5D%4N.?$^1PbW`/143)o.~Mtf,gMCC494{');
define('LOGGED_IN_SALT',   't+*IJU4zT|6K5aR/o*tZJG 3>_F0e@p)HVM>u9.(}|=  4V0)x`BzJ4BQsu5$_f>');
define('NONCE_SALT',       ';j7eF,4s>^y*jUmY/ UD{F5ep2bd,Mm*)iu>6ELjGxRpEyY.tlw&VTL$cb=jKTV%');

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
