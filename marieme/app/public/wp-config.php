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
define( 'AUTH_KEY',          '6>bLwKl[ j#_?Y5N=|BzNEQr|ZQr[PBZ1dHMHg$$cl]^/)+:y&[px_BMVVvXA%7v' );
define( 'SECURE_AUTH_KEY',   '?a9u$~<N0p(9K,02dTi2pL4)%mH7_qY4,P_{B8.L3KG[8JoHU@{mN^Gy]|51}@Vy' );
define( 'LOGGED_IN_KEY',     '7lxFg0PdL+_Tg Ro~da*a}Y*risv8r9Za~.*@G%qeT@zeW;WW^b2(:^2WH~acfr0' );
define( 'NONCE_KEY',         '0-=MHTd+=HBA`e|eY</NY8I+.3zXW*%E;^p+%*@J,(rP~e8ZS>^MrX8LV5vR~gal' );
define( 'AUTH_SALT',         'RBU}`9jbl.?8v[_?BY=rRsFzg(kqofV7{qe#(OO.cCBQaOi|Lv9g&+PD+Z2[qW}$' );
define( 'SECURE_AUTH_SALT',  'X!MNT_5c0`JP<]uL(C**m6tJ|LSd:yNVQ=Mc4$g-2e86>AX#L.J-fOOt;_F4{ucS' );
define( 'LOGGED_IN_SALT',    '.#G<PU|v-81 dz)~W)QdZ;ND2k;7D,yQq%`iXmTYP96hSy@3X%9|[^C5RTc&EDJu' );
define( 'NONCE_SALT',        'qtj_XkXRk.vE>r~fZavYmYX-gpv];R{Ch=EJPL14S.dj5j3_w+}Y}I_1xD#HaH#2' );
define( 'WP_CACHE_KEY_SALT', 'A4_B.&5}>I2&l{-$uO{m>4ex%@/`jwyR H|hS{8|8:!im%k8ORq*K(zw|>|b9!~_' );


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
