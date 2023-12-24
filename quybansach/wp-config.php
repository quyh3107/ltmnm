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
define( 'DB_NAME', 'quybansach' );

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
define( 'AUTH_KEY',         '8l~~:VmGW4zWa~7nq 9}nJDnp>ADq2:{bna=@KIxR%327K[Y w34cm*R%={@c;?B' );
define( 'SECURE_AUTH_KEY',  '-4~ U& 2yn;e`+_` b2Xon$8/)~fx#GBuK_xyGiFpJ66X@%r|;123z,VzBKubM{@' );
define( 'LOGGED_IN_KEY',    '1jTnrELAxUEVo/<yJy$cBfVp/H?M_eY2&72hUso4d+IP<:bu84MORy&U,^#M f+g' );
define( 'NONCE_KEY',        'A=ro:.dhh0+*^Z=SpWa ?{h}|3JI9+!>O [%%t[$&+c1OkbPsjuav@ _]6sBbI~X' );
define( 'AUTH_SALT',        ')Ih[a3fSFyk=]J~;3?)R>i8 >IGl=}Hnq.Q!DiI0$0p^`b/Clo;-A+v3([3Oe,[t' );
define( 'SECURE_AUTH_SALT', 'r2sKHCU8bRn73W*v49AmytZfBnNt^Y!b${.8s&x(KwF]&!rsmo$S=<3QM+(Qp{S#' );
define( 'LOGGED_IN_SALT',   '}kx44|W;=g![z4KjdT}-LaU-Wc^0*.b%I<IAskgz[3w#G6)>Gnke)]x@g4&mzI`1' );
define( 'NONCE_SALT',       'WG67lNZK>2eRC,<.Z=wqCce`llt6^#ys2}t4wOSw9P/_VEUw#-^,Jgzz=G9[P5HD' );

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
