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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
	define('AUTH_KEY',         'D[NDP_Ofyn`>SGW:F+(b:`48bm7p9|cu-I~sp`2yQ_O=I1:I;6BL-2Tr$Lm{!lR^');
	define('SECURE_AUTH_KEY',  '!_6LM{PQ,N!%E<nUX d3h;|gYwlG#!LAbA%D:+V@aVY[ZH*]9_g2m8f;M8X4Xmpo');
	define('LOGGED_IN_KEY',    '>L~)yXtLu V9lLun(^<)HK<V@te28+Cq}?C%O+-A7=/q9Rfu[^yYYL6@)^k7cy8)');
	define('NONCE_KEY',        'i]4do?+Q*BllJ[[X2VRC$&)BOB2NK+]xt[X..#-++<({#oIiJ=0gI}q^-uG,YxbU');
	define('AUTH_SALT',        '`q0z?vO?nvGCGX| Ry^rwPdFe(r[{7.-Qe NwLP8!9U?I(#Y,UbW6)@<zaPo!Q2_');
	define('SECURE_AUTH_SALT', 'L~d 5/D$Lq]T.I&m<?IRq2kaX*T`X|sC+S#`6-Ecd-!V3itG.yB7IQ$kjv&t|#4.');
	define('LOGGED_IN_SALT',   'lNZ*#)DE7o,G087&SI^SXp7nB T)+lR7J=`)UEwaOc)&WZ8>-OsD+)5TZ-=5Xf?6');
	define('NONCE_SALT',       'XHm,ywY}u`Z)iHw(e-T4F_;jl+JOnDoYkB?I74jAO#A==ESK}o:n&]4`oYfN(+hi');
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
define( 'DISALLOW_FILE_EDIT', true );
/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
