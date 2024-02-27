<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '[x!fV9TK!=I)ua7Zg.gvzZ6j*qqHL}$15f/Q% |EXp5$8~riv4fHoUk/_S4, r/h' );
define( 'SECURE_AUTH_KEY',   ',h$}1W=LO+ S D.C)PI5#yAYgIw:f)6p-H<aW;=uf9]jmndQfbGl#IYoHY:O(`d@' );
define( 'LOGGED_IN_KEY',     'K0s0l#%v2nGx2@.65V;%X.Dfo6u/&pt8TCok<d7G>sOy5.{vxvW(frixG@-bYt-I' );
define( 'NONCE_KEY',         'YCF;DsA+K_kYMg!!YRx.)mbS,_weG:fTqP>9M+:?WCoqP?,;!}CI[7h:*Mbl-%p!' );
define( 'AUTH_SALT',         '~:(6VZUgK1(#{,f>]u^K<Z/dNNostxUcsc]HaLFwdWjFbtY6fVpbX(/Q]_Y}|9JD' );
define( 'SECURE_AUTH_SALT',  'n3{o1G0y_SQ;V!:QFluJ:4k&l%Bc[=xtKUEWhdMTfv5l>d$UR2`e=jp>{G1kxS]l' );
define( 'LOGGED_IN_SALT',    ',aW@vcjO8s5A>nyEHa8IAWS6jFb ?0hn-Z+8!U!Lf3K5Y&P}0*M[P$rUEvf$>w]<' );
define( 'NONCE_SALT',        'T6$f&zl2>B~e<0(q(D#%hB{A_32S7E/z4%Xbn%7nTAXO0LOyI&`Wk|*cWun~7zB:' );
define( 'WP_CACHE_KEY_SALT', 'pAVF+mnDY3JsK5n.AY(}jt!)c@(i2TyF]Tm1afO]N,/si?XrgxtrfeAe-6QO}$k`' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
