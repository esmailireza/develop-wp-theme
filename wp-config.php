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
define( 'DB_NAME', 'wordpress.exp' );

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
define( 'AUTH_KEY',         'HxQxe}IC[`m>XBhbUX /<mcUAN1ywIW9^h&kLEw0OsS2;,:0id[x8[M2%qOz0Jov' );
define( 'SECURE_AUTH_KEY',  'z;U3Xt%r)8!R ]6V1s599)WF0[[s<mvhE%b1]O`LyA(de}&}!$QEnv:<4hwg3:fI' );
define( 'LOGGED_IN_KEY',    'm4xp>f^`$v.vU/A6+77B@5}2B^=~N|qT?VVrfgWYKs_/Gt :3urrq8~[$gw&I5vG' );
define( 'NONCE_KEY',        '$m!oAsDB|8Q^Th5%6xqjTwkTBgJe@Cj+%ja]z-7?<@cCe Q<0qXbCgIQVcxn||Ws' );
define( 'AUTH_SALT',        '&Z_l&? T@]-oAhKW:R ihyk7^<r6Oc#tnnv!%5%3SSnq5] pvDrnV)KYf_]^0@R*' );
define( 'SECURE_AUTH_SALT', 'Bt!%(;2|Jvn4CpA$pg!gAIW!1l{.b;3,KSlWc@:V}QJ$pf{;.SI=P]Jy{bj dM*Z' );
define( 'LOGGED_IN_SALT',   '+b%%W7[HN38y{.StLU26we+eLoXA*(4,X)0$II)tXoqn4, vz+MY/>tj9L9RjQ!z' );
define( 'NONCE_SALT',       '/pV 4-M64%DZ!7IIMS}p<N!#7s7>w.qp[EKUW?x@B?{y^r57-N)@7bym%ikgl|Nm' );

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
