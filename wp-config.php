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
define( 'DB_NAME', 'ecom' );

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
define( 'AUTH_KEY',         ']K=P7SgL9.--##a0CsF+82V2%U3Z}LSKtt^bQME}Dv9~G~u[+-,eAl-Zp^=s^zhP' );
define( 'SECURE_AUTH_KEY',  '3Hi c-/u0}(dtYh^l=#>+6-y7K*iSDlx*B3qHTG?,g(~E<49@=/|r=xh*w2T+[7s' );
define( 'LOGGED_IN_KEY',    'x<_?ixGBD;A_RXfGSX8BoPUFqZ_]Wr!:wy%5m8YxO77*WiZx`m5DJvh~{(B}8vVN' );
define( 'NONCE_KEY',        '1Dmd5*Jq*sw;#3eByD8w0cb;1N$yeKvid_x4bJMhxM>5SjU.S:?:591ih}JEM>K<' );
define( 'AUTH_SALT',        'OZWmb6Sj0/e:%8+`g;XqhKR|:&n2!)0*_}*YLGx8.w!E>`e]hB;p{u.2TR8Tn7D)' );
define( 'SECURE_AUTH_SALT', 'p$dLGK#x4>rgT# kst^<#=#Wo%xr%#hr=5^f0r{le8,HM+|,;5N8C=q<9 __^2~u' );
define( 'LOGGED_IN_SALT',   'ox9frgj587_nO1~WHUD$SL.wx(Jo?791+,crl#Wv_D2kxA`s,$J.1a`wFwhQzri!' );
define( 'NONCE_SALT',       'vB/#l4l!o:hDcfcL#F}0g)1RryTJzO]]!0gL5O$|N0|=hB9B$t+SodxrshH~*8a)' );

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
