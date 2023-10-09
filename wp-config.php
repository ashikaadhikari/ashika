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
define( 'DB_NAME', 'Aashika' );

/** Database username */
define( 'DB_USER', 'Aashika' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         '/+B-D2}EBn5~.<!B$;jF8T?Y&|AAWZ17BfL0}r97.xnB-q}RpjHcuM3s%3N`D)p}' );
define( 'SECURE_AUTH_KEY',  'n;21um[^=uOMqLM9&S:Y_:/]B@Glh$?/12;ZRXpbK-<lmLJd;zQrl!4!BUodR,}l' );
define( 'LOGGED_IN_KEY',    '+DAC`$<gwVZS/C:rtmO.,AImLhl7X{jWt-?@d#7)kpg0g0{I( [R|qMF.a`DS2U1' );
define( 'NONCE_KEY',        '-gwXzzB T!a>/l[]b/5X*4;?M:)rSg`--Ge{`v[[[{Q=cmjd)5OL+h+/fs_az,%g' );
define( 'AUTH_SALT',        'WCh@P:6pgw~4FTS*2}?,O0RUr!#zgI=}K>wVE?c`PQ5Q 2(oCK{DYCG*d=/b_[`!' );
define( 'SECURE_AUTH_SALT', 's:NZ76t=n%Ea-b=B5k@iM#Ry]m+mbSUy-s7,/0^,quXx_<4C>,5P_Udz9_v8f1@.' );
define( 'LOGGED_IN_SALT',   '/x4#OnJ+izMG)cu$n|PR>.p)ZFkBl]}tV?A^ih)1M]sS-#2],]&-+~B`YKCi8,v#' );
define( 'NONCE_SALT',       'Dme3ZNB+J^dTb)|I `DCPrPlz}[=7`q(sy@`j!!5^~jw]>N>*:LC<iX,a-b|8x8d' );

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
