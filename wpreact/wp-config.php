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
define( 'DB_NAME', 'wpreact' );

/** Database username */
define( 'DB_USER', 'portfolioAws' );

/** Database password */
define( 'DB_PASSWORD', 'iP@wdAws08' );

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
define( 'AUTH_KEY',         '8TSuLPhM FbX^h{`4NPb*F$B[DE@HFXF<tpkb=rGWK(<~co^)){L,P| m~]U>_kx' );
define( 'SECURE_AUTH_KEY',  '>46vwmG+,+r3KOiOW__oT-sfdJX^Xw[*H5mTh}Iqe2502rMm1NdH>#flze^W&)6v' );
define( 'LOGGED_IN_KEY',    '.5k+,MY9.B5Bst&Zu<-_c{=T0ouA>F,c*yFItcTvKA-YsB3j~l?)IV:JAY;?m9:~' );
define( 'NONCE_KEY',        '7/=*Q4=;f6@3iE2boG{@cL9h#rekuG/8IMaV4kb;K%B,(N_;wBhYWM>*Ag4tS0rL' );
define( 'AUTH_SALT',        '4F]9ZFQy1T[tEdrR(x%I7!riOg<{Ul?kVP{_=1/OZIo^/bW>Ul6>P9/{i*(q!ZaD' );
define( 'SECURE_AUTH_SALT', 'I#mv=bBMXLVmzV]M8f!<6 GO}cyY{o>L6?sFQzWaS/lb3qW{3aM-:#)u.h8g,mx>' );
define( 'LOGGED_IN_SALT',   'ln7b>Q^H?:,Uv/>K+{Se#NNRUZ_B34Z(Hh.q-dD^dPS)8 $Wc/e/u`!q-y`eNWma' );
define( 'NONCE_SALT',       'd1>BtLh_Xol}iinCy!|uTGG`EVSDc(Pwg{UALODgO;+OYbgQ%-jPwb)R09{Glohs' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
