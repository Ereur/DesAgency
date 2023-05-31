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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'aamoussa' );

/** Database password */
define( 'DB_PASSWORD', 'aamoussa510' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Jv#!r`F|!ZZV-YNn,|E8X(F~~X7XouA^36n7Lq.=yjKZO*AE^VdaQ>~gt8[S~3TX' );
define( 'SECURE_AUTH_KEY',   'lg56$Y]A&p9_y  f,l_bdq~{R.^0+oD@5*C>]8j9[+0Wg3ol{uC=?y9Nrn#fVscB' );
define( 'LOGGED_IN_KEY',     'Da~Q$b:+@K^ipB7wX|= q6a!UiZR$Xqk<&pA_o?@ d267Ku^yaG_akYtc,RE.qko' );
define( 'NONCE_KEY',         'x;p38y$oD$&q}]1#>$A|37@PolS!5!t@oDhn9aDjOfgufTZ@RM&XS.n{[2Rlr7[}' );
define( 'AUTH_SALT',         'f1SIQjVAjyu>`Y)qjxvmWUXWHFAdwQftQsM$TO=&40ZvB0a*N N]vEZWvfILSZz4' );
define( 'SECURE_AUTH_SALT',  '2;T4nZ?%Aq+8?^0[fy5~X__++Y7#+o)qC1wS~hi%5Mh[xZ5^X%`,S.|~.E_NcTuJ' );
define( 'LOGGED_IN_SALT',    '[rxD/dQ{^;m}kQ+*rFE:djXU7jgSq?4Do=gGZH,)/Se.w dU+P2cwBZLY:Y<iLy7' );
define( 'NONCE_SALT',        '6nY?rV,XYqxsW#YdLIwrpdfZ9DA&xt(SV$i6Q;us(=)j*L[`+f}Ajvvg0GGw+ pa' );
define( 'WP_CACHE_KEY_SALT', 'PXP:63T0<=16`Zkfj*i:.Av*j1!JsjEh{9*rOokh&[1{Dkms<n*a(g&o )Y[{#:U' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
