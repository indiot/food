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
define( 'DB_NAME', 'food' );

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
define( 'AUTH_KEY',         '=FB/nAHpN.p~7$K0!/-CJ|(10j@&M$P{f`eLaTA&rz#COl9(!s{<;>q&:i<!=?Jd' );
define( 'SECURE_AUTH_KEY',  '#Nl3]N{ItnzIN?E?oP!#gVDg`bjcx=cR*-ojA|mX#8C&X]kF2UoSqD;v&U4<ULen' );
define( 'LOGGED_IN_KEY',    'BiB{x,pIGiz6Fzm]Y9g_oXG|=@L?-R[Y|cvQ(.5^0*mj3|YJBd_G>+6r0Ys4C~Jy' );
define( 'NONCE_KEY',        'L[$u,gV3Rw*sMgJyI{65rs}**H,.wOVOFu}U$Cz6SgUy6 lqY=Q/^du>-|~kL1;5' );
define( 'AUTH_SALT',        'KlC Lnzk8.6@M bzFb*H3zY4Bu@xod%!St3>kej}9L*7M+(s^ziM`VvC<iL5Eh G' );
define( 'SECURE_AUTH_SALT', 'M(Jn/4`Kg1`OHZK!RC?R1p,J8(r%QkS5v&uSaHS:ImON[*o;naYv2qFA`(&cUylQ' );
define( 'LOGGED_IN_SALT',   'J#(B64VSx-VMd,Y[Jm2I%dWbI:7iQBc<4XCI!:As ;[DVdD>W=}tRT]XZoZwVn c' );
define( 'NONCE_SALT',       ')[s05M:w#g|)|UNU(=6L?*f6kz$,x 8hsAqYrh&7^Mx>^^@xJAYZLbqLAa_!S.mz' );

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
