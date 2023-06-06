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
define( 'AUTH_KEY',         '&BxztwBV/Y;(-oE%^({rU#<R`coQV=O0`?/=ky<jaIaBc@S<]}eA<y+@+xX8UAmk' );
define( 'SECURE_AUTH_KEY',  ';!3:7i(@#YpcBK@-v%3%Q7x#-@r],-`k9tPA0s7h_[t!i*5%tfx,4wzO9xJ9#!zQ' );
define( 'LOGGED_IN_KEY',    'rvn~KF$3Z:#dBu.B1io.W4mr2UI>hcoD00Djt*}+_.5bt8Jr;qXt2u hy>ie[Rp$' );
define( 'NONCE_KEY',        ',.JVeZGH%8%ibYs/>vwNv,u< |-.>Ht>|7<9jbT`i#,7m#+N8NvE-pWLG,1Vfrkk' );
define( 'AUTH_SALT',        'Zv,i=5py<Q)exSk3+L<!R^~W8adC8fgF1itgT4(wHGI,U);+#w#D3+7CvGCgzX(B' );
define( 'SECURE_AUTH_SALT', '/mUBuUbKj}&IFTT<nIdWKjfg~|D?&Ht^ei3Tnrdg1:BkOLU{E2a|YIM%Cn#~w{G6' );
define( 'LOGGED_IN_SALT',   ',y@yJ`+sG4HnYdoS!|(it7| (_0$<q1S[,fyucPw4y)p8vI.2<uEjSSAu3PJ}i.c' );
define( 'NONCE_SALT',       '15RdL)z;Q,J)Y?U{DCU#6_Moo*tlGe-GsY+yEK3Cx5Nw|3s#~}0WdyESjq6_*>14' );

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
