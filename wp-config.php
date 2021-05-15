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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'iaminvitedyou_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4KxiI0WcAXH^r:P!e0f=4W3Xi4sGGp#tT77hFp}186SLeJ#a6O,d{8I7,T)JD7+T' );
define( 'SECURE_AUTH_KEY',  '59~WFX?l`;.o%9iwClk7&!>jH:k5iAx$<AB}[,f$KQbXf3O>d&drqoyTp|QF>L`N' );
define( 'LOGGED_IN_KEY',    '$p5./y74DB|!PlPkOXEZ{67!),5lN{/l?,c.b}`B *5It?yRFd&L8eBn+C0tESdM' );
define( 'NONCE_KEY',        'e]V3#oy6j|u&bBozKV2GALi<<^ 4g%_J37*Rh$Aw>2m}TCj/e.*K`*A7q(VFIW2i' );
define( 'AUTH_SALT',        '@a#V7GfhF2WAayMUTPl8kQaFUvBpu:^y8@ml.2ID{Zm9od[`~#(#);>1D_ydtv+o' );
define( 'SECURE_AUTH_SALT', ',n~grW6kH/j|YUUelu{jg~l]55@n4elhnD:Fh!R@@aRHt:):Av@IlZ?Bcj&(iC#^' );
define( 'LOGGED_IN_SALT',   'DUt#?YWF{7${8ifze?Y7/HZVRx>`Y#^`@gr-UUi?=.,/Cx8Tk0wGmk#l_k,0~$9l' );
define( 'NONCE_SALT',       'kqS =WL%p5MpJ4^k7mc[sjkF8]k W6n(OPH!^c^w}Ntv:X^30C0?Snwa1M/ze,*F' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
