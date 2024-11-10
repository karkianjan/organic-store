<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'organicstore' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'G:Y/7!<yftq%W7,a)BURhNb6B-(,FczvUhct2d:`Tag,<)TQrS(FyyG!JwVwq~W[' );
define( 'SECURE_AUTH_KEY',  '0b+{9<aV.kR0O<5{]YQ1JP=1}F*4sh~vTTzkDhKQ(joyz6vl; #7eKS,7TsJ5&x!' );
define( 'LOGGED_IN_KEY',    '7*HxI>6#ktY5S?>)?9@iwWLjOdna&YAt`T*b]Xzv=14&Bx-vL$u!y@wFBWgU[Tfz' );
define( 'NONCE_KEY',        'n#+}sVGyTcS0Gqj+sg%e4e{8*b@At,].]V1Z#+aZF:.S^ _5#+i-6uRQZQL<2ARD' );
define( 'AUTH_SALT',        'H)a2[ C-ZQ<=8oC16/FdRK,ObrOGwc.>rRFnT7]1!R>F#Pe%_3?7aCW^NuP^H1)2' );
define( 'SECURE_AUTH_SALT', '-n(-_2I;rJX*Lv> Q<RkQb20kQQQv%%Epd:;0wj<A2YA>-6H{::{d;o r>DFLKs;' );
define( 'LOGGED_IN_SALT',   'Rg<G<GN^b_?*_amq$~>e},gU7lE:a.E8fze3A4]>dg&ka}7BRJzRDqq<UEb.TdQf' );
define( 'NONCE_SALT',       'WiLgP$T:*I3G#?a|{be^xQ<I94(gNSs)~zx)hT^WRkhfp B^A9P?TREAmq)-:O-.' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
