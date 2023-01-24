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
define( 'DB_NAME', 'uswix' );

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
define( 'AUTH_KEY',         '_]2-rs9fM`x;(46}|P4YE9W>=T2?/HU%nqAJ=wsC !RRcLJD(=0D=1S]Eb8{ga/k' );
define( 'SECURE_AUTH_KEY',  'O=8>r8DGI:+pb1O:Xe0La[j<DJD@[ioM+UW@9t< EYw#Bq(iC-5JQr<,%G1MBRll' );
define( 'LOGGED_IN_KEY',    't]rnx BO:HYW{E`eT{]thdEN-l{_nU66R!%h.+P+mgcu;k4=Ica[MQQO V_mzSfi' );
define( 'NONCE_KEY',        '*rOn?z29%&uNRzu0:RSO,SSj&cMHq%pU@phm$QA8#M8pL1DT:JfW B%UU`-BR_(#' );
define( 'AUTH_SALT',        'PNP&ngI:2RB)g9XrTTa9A;Ji]:c e}5,YW*tfkbClQl!4SytTT}N~wW<a~WPTW5d' );
define( 'SECURE_AUTH_SALT', '-yW`xb0)rn|1XkCW*]8XUy@m{G14n{08Da}H(=.0Qi_3l#heY.&h,w)l:hMaHt8;' );
define( 'LOGGED_IN_SALT',   '#yMx46IpWOm|%81o$zX~u$+t77oBO}:)mt=3quY*+Lsa9IT~6$Is`.Q]j;(+#=>S' );
define( 'NONCE_SALT',       '`1N=kb?qmbcwau,6mmMMxCqm+XoT];7wYxBwhL0}mtn+WbS!PU}`1TsJ)1Lqm,{D' );

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
