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
define( 'DB_NAME', 'quanghuy' );

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
define( 'AUTH_KEY',         ',$hg-!X%MC;F5oK|=i~r3t[bWK,}/JMk!>3ilhhFOS*1wLO;nUV^w3br+pbl?$Z}' );
define( 'SECURE_AUTH_KEY',  'e;|nf(].WZxTJFnb6%< ,8)C>!4~Gx1SQS^LDIO>r[U=@SDl/Jd8Pz7W3,^g~{`%' );
define( 'LOGGED_IN_KEY',    '+Q~$B`d~rk{DaurqJd61#jBFbYG=k{{_IVCYXipD5]wB9<gQkwU<u>*HGX>12R~6' );
define( 'NONCE_KEY',        'g%IGGQ)H>W1{Rx8JxX`LFUURZ}` 8v]Q7&*6Zoli{Pzwzi7/pXSVgvJ7{>R-sio(' );
define( 'AUTH_SALT',        '1!2eygw.++6K:+dRG<^UP|ZP96km3D0X_C$:KkRUXwaES<ULEHuw-T(fURo?B>J~' );
define( 'SECURE_AUTH_SALT', '5Rfnk_[i#IWE7`d2vt-lh$a9ch|%e@nV.3Ka_TGv OslVRNh2SM,}|`NUWixv!?<' );
define( 'LOGGED_IN_SALT',   '(S7=Qf)(7HJU^y:Z(z/vOo&L:Xy=H&~v>HB*/7D{6{O:3SHt)]u^(ojJA<xONW0,' );
define( 'NONCE_SALT',       'Qa>1 01lR93:l]HtbA.Uv3,w2=Rg^pkhat< qsY<gKHM,< xH^Wq@Q]s/py,(uG!' );

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
