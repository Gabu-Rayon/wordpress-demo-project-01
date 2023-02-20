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
define( 'DB_NAME', 'wordpress_demodb' );

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
define( 'AUTH_KEY',         ']rz%bLmm,v[n>PQ:7;E%L,n|{I?EsPGM9%]vt5Xu+R==r]Hqs;!A<#.A93R@i(kX' );
define( 'SECURE_AUTH_KEY',  '5a.qqW80jS:s1<F&yH!7o@!Ji>l)GfubC6i$!3FBbrJXB}/jE j6IVi{H;Pwh9Ry' );
define( 'LOGGED_IN_KEY',    '-yYk|2PdF7C)uY]|*O@^=u{e3W&?JRkF#)t/UIOQt/6.$nYPb,QoG|[2x:p-t0-q' );
define( 'NONCE_KEY',        '}_l^6oD`O.AS!r4@VR~-. /2T.ql![p~[XZewV>2May=[93&L0l5j!`n%m+yB#r(' );
define( 'AUTH_SALT',        'NkQRL}d[MzsT#a,^`[0I ^:=)::%XRcTN/,`W:4.XHBr^k6X8*6S,8qw/V]UC^|%' );
define( 'SECURE_AUTH_SALT', 'May&ekss65N%6$Uf_r2Y@1&a0@aVo`9-OwYpbL%[_.jJ0t:/miMU:(Av5o8_:Q?4' );
define( 'LOGGED_IN_SALT',   '@4tW5Y;I>xPt;qCAguVG:W1z4h_JgSK*6@,5>p7-$CtzpI>W5w/P(fKTMy(_96nk' );
define( 'NONCE_SALT',       '=WbEv*@}K2-~4S]Aa]$+BlaAs6$$F-sMHus8|GydmgEKIBT{MO(YAw@@@(7g@hPC' );

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
