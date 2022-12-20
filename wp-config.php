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
define( 'DB_NAME', 'wpcob' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Admin1234%' );

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
define( 'AUTH_KEY',         'Ov7yQEL_fGuJnQ6-M:,kduI*8rp%C~*(i;5UCTx]i81*dK69EhcuRt`f%#Xnw-VM' );
define( 'SECURE_AUTH_KEY',  ')&@A}ugRv59^Wt- $&!+<5{gLwBP!h[,/Iw(WSE*oL[5~#yZy39<2 @#HYW-7ov*' );
define( 'LOGGED_IN_KEY',    'FsT>mm!.MG67?sm>=U3#^nMXM-EY%Uq@@|B3i[/s]42#}R7}Fhj&eZVcie_b]v t' );
define( 'NONCE_KEY',        '?~`Z%1[[c,CiqiGtN7Ey1luz6l~=CS:odGx<k9nJ#W)Ox/~GD.  Q5So?1!4kk,p' );
define( 'AUTH_SALT',        'ZE!Qz^M$:h%L2RD&jKEXU6)?H^<0B+l/v~_5Om!@>nkt=j[V6C^X`]pf:<Hn>>}!' );
define( 'SECURE_AUTH_SALT', '13*o+BLpba+bz!Awd.d~rNAzN[qIp[w.qLlA^}WHv!W%`6PHYG2awNO.M2#>4.nA' );
define( 'LOGGED_IN_SALT',   'mq~gD@1t)D/uTsa^i9G}Kk`@QIh6q9b&Y8h<6N`)|fjp_,XPJ2:@>VP8G`X5 *;A' );
define( 'NONCE_SALT',       '%FUDjd`qi)Z%}XMh*(&l1*lm-L`u4MiSr,jp]TE4e+rV2Ev@%D/M^o#69ZJ}O,!v' );

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
