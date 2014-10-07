<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         's-*3.Y._Bbt@rv3!BFRPy1jz*|xs{x=Oa]8y5_T%W7| 7aS(@~vU=+.^-X,zV}R=');
define('SECURE_AUTH_KEY',  'ei0A#jahw{^pA79b_/xNOK2d8;z~I0u3 /<=YY; }Fq^GEeT9q|yU=(JzR|jQ*ih');
define('LOGGED_IN_KEY',    '4#H)x`Er@v.cK:#S[`z5}!}`oVHc/Xt:7o+7DVUPFd%QR|W1GLTK2k]X0MuZ-Vtv');
define('NONCE_KEY',        '{l(ewUs8H!Qx:j2q7]N_$t!i4a!3;/!B%xWB-:v_r=fA;pL+d;%.Uh|WH5YH$-Xb');
define('AUTH_SALT',        'A|#->5;v3HX1-;TzG&sR$l@%eok@fzmz3>~+r;2<cxnQ3EBPE[{`r3@D-Z}*$}R]');
define('SECURE_AUTH_SALT', 'ruYtpJ?3U(R#>bT]1qA!5efWr,|#^L3{lS,IO8#SF3|@3eiU!g,QLi*4XQUT0|3<');
define('LOGGED_IN_SALT',   '{/cof#plN;dQiGsgj}V|i{rXjQao.)>WZ6sq>_P:hq}(0n|n<(vX#K~N7tv%:{V6');
define('NONCE_SALT',       'z+xO%3Q.E%-+.Dc)3pl]#gCsnIz]/tG{1aLP0pqK_{)JzU.iYfP+lRY?m?$Byv)t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
