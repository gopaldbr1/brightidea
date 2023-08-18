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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Brightidea' );

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
define( 'AUTH_KEY',         'JsOc2]~eXMTsJgKbI`0J q0scvXv%QJN;5=zT3zP&~KS51R;:zwTe$>3iG}Jfru%' );
define( 'SECURE_AUTH_KEY',  'x?O0~?>[T[.>hUytBKiD0{~dVG60x0lsON,kb51R5pS?/z/`+Ck;}_7t?xM=P)]/' );
define( 'LOGGED_IN_KEY',    '40aH+syp[fM-Bk}X8sW;SZ5ST#cY&qq&!)1|*&7+gNV31UhpM.rQO*.$*C|_v169' );
define( 'NONCE_KEY',        ']JK|CLL?~A,+<Rklx#jS:0i~cFV$/j@3c:okCHY<sdMBKhiQOGgI?Kmker`t<2[e' );
define( 'AUTH_SALT',        'g?IEZLXv*bVRU>(?U0?F7/!bTrTRgGinEL]39*XXE;fmy=H_dg/hRzb`JYs)eo&M' );
define( 'SECURE_AUTH_SALT', 'zAb(Y[;,e ?@CombZwirpW/!FotIB:<MW4NhPd5uUSCgTb&<^,3?M=%Oa3qt%!ys' );
define( 'LOGGED_IN_SALT',   ')saJ@(x^A$^Umg-_/VVDalWC*U0CKYWKsCg>{o}5/q3:D,JyKNSedE;10$Z*Op(h' );
define( 'NONCE_SALT',       'JVZ`?pFOA2(rFHPzBd-2A*Tc:oqF#Np(1F/vi>/hhx[a!<gXa2{3.}g0IpF]t5KN' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
