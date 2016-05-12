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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         ':LYdD1&sxh`vcaWwM(<$$<j@Z}kkUys@@AW6uK*c }O8`%dmK#}6(6R.9*ahOe)Q');
define('SECURE_AUTH_KEY',  'Y5`90Mzzzkvl|X2R1]v|`N&o~=u~IZxA41R*D$lo{p9T7;I){/uSpA|Pt0u/VREx');
define('LOGGED_IN_KEY',    'BvB{+yk3NROHD>%R)L?mur(Ll|V;C0@7A;0Fct%9yuq3MEz%x+}BxJd:j$ZRn1N.');
define('NONCE_KEY',        'Tk6}83jmza5uW+`,b{|a_*/UI4#a]YwcCa%_YAcqr!Tb5HCoz14rA2/B7~.5+mEu');
define('AUTH_SALT',        't/~o<Ih[fG$Cp3].cPFIt0pe6{x}^<3jb_UUw?DcXKxRInmJwj(.}1mElKxj,u6x');
define('SECURE_AUTH_SALT', 'vfZrPefk-@(]+h5|uH6<kyOUY[c;4ZZ4uRb#0G/!/YSi)sX>:l);guXYE*D$svte');
define('LOGGED_IN_SALT',   'JJ/U@j}/wDxwNTQ?R0`<L.$4m{enVWnFBVh<xCBw28P86CHh&I=Kio>-,.C}|.f$');
define('NONCE_SALT',       't*_}Xm:,|:6G#)+*!)mDdYQ*EY#_yV7B`02T?c<&1t}:JESb3dOo90QW]]<tY>pf');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1_';

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
