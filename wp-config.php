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
define( 'DB_NAME', 'website1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '!F.~*dowSzUR[{s&kg/c9j{pGiNu+9qu9Eq)Gi*]H 3.owT=#_tZ(B.>|djBo0-.' );
define( 'SECURE_AUTH_KEY',  'DC#/x=.,hlno,:.GqJpo57FBwB@@Wuw}J.gh6S%HMR`z_Q2,gc0{!w@RW^&U2r*e' );
define( 'LOGGED_IN_KEY',    'DZu2G6irxEZfm&&2[Bs{ll..Xk.?xjYdzi^i[RhQ94v*x{C! R70s8zXkB~=!l/$' );
define( 'NONCE_KEY',        '<dNKWA&bXYA5hBu=gz=>5mJZcF=kU7rC)7:ui,xV!q%`}?wYUJ6bT,z?90By+a<#' );
define( 'AUTH_SALT',        'Xe-K.;?}+T(@k)~@Y ,>Jub_! ,Me>z7nOV:ee5aJw(IW_>3eaU&~2BN3 lf)[Jl' );
define( 'SECURE_AUTH_SALT', 'a,PZnK,y|uL5nJG>&CITC&(kHko<;^0nRt&;=2PfSY<cFayuvJno+|ehdB`-vj u' );
define( 'LOGGED_IN_SALT',   'eum+JIGk^f]X7}]Y3?S`{#5RQ( /j<]eJ7a?3kR-t{l3c3%Xr{gCn.o*~)%6aRa$' );
define( 'NONCE_SALT',       'n0g[^e$S7K|-ws`]VGKv%*<!XIK@*>)zPfHd+O.R7iGS#p4-{z^w4EvQ :_;>f&&' );

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
