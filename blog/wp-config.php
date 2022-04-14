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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog' );

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
define( 'AUTH_KEY',         '`N.aI9lfHsVNQ2BWw;Bbv>gQ@`lf]m^a>H4}|yDZSt^L ;k{>2#O) K(w}Vq~KPj' );
define( 'SECURE_AUTH_KEY',  'JF^W0KIZqEy<p$!j*(u@A>CB+Zc;/MB,6XvJlD7gdVC3(GfX?Hw{q|-!O$7e}+Le' );
define( 'LOGGED_IN_KEY',    'yiI:I*DBz%EfXdF@aw*IR;H>6>0slS/ZQAc$3gB]JGE5bYP,^zio<[YsV=[$5AUo' );
define( 'NONCE_KEY',        'Dxl3GvlEJn={tzALr`C!h[=f#Q[Q9U!GzunIvuYt+K2I$vxSW2Zy@PCaNm,;B!Ib' );
define( 'AUTH_SALT',        'OWEM(j|&mI/PjRC%b$-^xqWLq~B]J1DB.{Hk3H=ZPWNy9h&p&a)V``P74g1IF6[p' );
define( 'SECURE_AUTH_SALT', 'O_(nXfI59WhOP@_kVjl]v03(tI_Wrsu6=T<;%!:TF2!c;Va~@=}xmps&axM0Vhes' );
define( 'LOGGED_IN_SALT',   '7s2qga;X=FPXpnoR9sJ+%;r;,-{>8aY{T aUKj f^Zd>+)}W__.MOYh+t/%6eATe' );
define( 'NONCE_SALT',       'g-bcu|pe2!5u$h;Q-.g`>32EW*y%>Y)+D{!o?u~bt|O{@bUcM1/7SA7`1oX9OG?=' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
