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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'XDv2FLZ=~nN>A>z exBi3T <(o29/)s:yuBNHA!hHB[vz0Inv$vykZ%;/4i1Sq7K' );
define( 'SECURE_AUTH_KEY',  '{/N^eP3wV]CN?r(e]lv~FujdRz~Pk/VOZb*W5if@X[6 yCMe2R5dC21Nhcir2)5k' );
define( 'LOGGED_IN_KEY',    ',U(WSaCTZ}lP8X;Jz}pE;F>rGD5F$M@T8W`;1>}l[K _s4J2=$]L:DG?*L/ 1$|-' );
define( 'NONCE_KEY',        'lRfDpBNpE,vdFD(:Rb2SYC5&f6GU-Dsl&8~=B6cHcDjhtjMJQyMZ(yb[nx^Ky5;r' );
define( 'AUTH_SALT',        'W b__>O.X0}:ndUQSI$!mP}3qnNR00@`*M$m[LkXlK#KryS:sOH.<E,y/kpivoK>' );
define( 'SECURE_AUTH_SALT', 'zd1kptmV2?>cT(n:k)gqH*[=?cm6)Eke$pcLH7jrM-7x1kak;u<vEtWHulmC5f5w' );
define( 'LOGGED_IN_SALT',   ']3u19t$@lYQL m/~C!4+&#^.leGlKlH9YtcOJ]K9@U#A-X+8g(cF/Z@<E{WXhK+%' );
define( 'NONCE_SALT',       'Cy.uRiJa.to4Z^/`x;n8B-Nk[K|!9Qu((XI -nUkU[Fhqq=oB` k*#vxcHlQ{a+I' );

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
