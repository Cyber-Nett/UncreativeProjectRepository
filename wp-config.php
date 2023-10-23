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
define( 'DB_NAME', 'cybernett_db' );

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
define( 'AUTH_KEY',         '-C3pNO,%m]aV.JBwQ<@!h#Yb-@<8usa0`{]3d6iy!}cV/I7ZreAGgYQ-Xg{~f?)0' );
define( 'SECURE_AUTH_KEY',  '?.hobXy .dpYr-$d8bVaU<5Jk*[q=<_t/4u5w,1?[.d_v.Z8)rM2LFC5 fZw;t}o' );
define( 'LOGGED_IN_KEY',    'M81HD/vl`sS*16/YJF~,Jy0 :ozCH^dI$4B_`W&wtO{^,[^e=#@WSw{K?f+0u-B%' );
define( 'NONCE_KEY',        'l2|U~GpShFQtGfkhxE/7Kd`z1<2o#B6E^]y>F>3$df=K,bdN(Sve$o4`_BL_E`YO' );
define( 'AUTH_SALT',        ')oltM`IX*8SM<4ad_c{jaRkb>.0FbaE13$:zI_LWu^OcmJ(0JPq{^z2b3Pv1J67]' );
define( 'SECURE_AUTH_SALT', 'jm(,F}g7PeKZXIGn~0*!!b]:5>gjNxqa$CW!t.fq3H?mcg5ixW|3$^oDe~&pA<%T' );
define( 'LOGGED_IN_SALT',   ']i.%FB~+2!eq#b2Kq]zBn/wU!EIR4G!=4$qAHTxlQ DWuf|IhD(wBDR<&5F2Cg+8' );
define( 'NONCE_SALT',       'GVv8v^Hn^V0vUc[bm?6o_9|[c~~8D6n&u.CnC}@XlibynKITP(f],5(Qw~[Hxqy$' );

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
