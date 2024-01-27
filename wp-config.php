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
define( 'DB_NAME', 'wptest' );

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
define( 'AUTH_KEY',         '.DgF/X2gbs^-u6)[D(/=yFZ1q6)+;_<u1h&$p9)=S-.wc4$47L/gC1ExKO-9I#B3' );
define( 'SECURE_AUTH_KEY',  'RqLoE~Sse5P{3p_{a@,mG?Q*s6qeTc3l4)%,{FKk#xYRl!d?L1l*h3*{XNCtdGTV' );
define( 'LOGGED_IN_KEY',    'DaRD+(e3^:G:isKLC<5u/!n!B;UN:MTKE#nMopqaG}85u}/imjW^,G9,-PLGi:wb' );
define( 'NONCE_KEY',        'v:yF6HPdBXjUrTcO;QhT21Ils[=6`bW3Ro>1?#DbNke{8(pWAnC)D^bewK8(w;*a' );
define( 'AUTH_SALT',        '}z3T+CimN%XP&L5g:G163fK0Tk6NZzMwGw7cemLP/OK-Piy)-y^Zun!yUO5r]hnZ' );
define( 'SECURE_AUTH_SALT', 'yCw3RpV7$o%zMg*12?y:Xo@{}:mP  h.NhVFTyf.Zg>2|J~eboy#I+_1zNp5:U8Z' );
define( 'LOGGED_IN_SALT',   'ec&1mMy3ekPVZsr0%ndlEt?V^_L[[p1sapbgNQ&vHIj^V;+a^04B~gPXdjQyDGL3' );
define( 'NONCE_SALT',       'o#L}~rZ%$%SRL1C(Ky![d819inX)kvxIj(mFTF%+]Lt}%%ML/2_!c`v )[^o$e))' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
