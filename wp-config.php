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
define( 'DB_NAME', 'bd_salama' );

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
define( 'AUTH_KEY',         '7)4-y%)V+P]Rl!}g0,le;hiZ,)!_um$GnoH&64II=8T|_Jy0iB4zzhzA4eP-bf``' );
define( 'SECURE_AUTH_KEY',  '@Rs3jfm$2ZGD: !@2gQ:et=q1#GP_]%v,bWX&&|0I]7?Z9Ym!QcI}>cSYeX_Ez`A' );
define( 'LOGGED_IN_KEY',    'qqvs|2%R.XwCrM<_B%b4i>fO=$3SrxcvU.Y$l7vm|;7:xn!^4Uzbf,#uW]Rv>39n' );
define( 'NONCE_KEY',        '>x.bG]vxf}jWbI~C|R0|_`B!eNf0Q`AFB*r.pMdClG>x@HsK cl.~$^[[xZX_@|S' );
define( 'AUTH_SALT',        'X/f+5V).Qg;53Zcz^@jXIGoF6n`ccr$#{RhL@3<:EI~H.l+H^w1Q#N||C0zJ8j)@' );
define( 'SECURE_AUTH_SALT', '%XsHgBBG,49}lW<FNO;!TF>UyIyJZ%4*]d1x72m;<YvaQSI{SN}6$}>JSMqHsvQM' );
define( 'LOGGED_IN_SALT',   'We.Lis<lwboR6je2*QNa=_JHpMGYd!2yrjkLO-Ket91BBv_o#:aS@DX5#K>m;_af' );
define( 'NONCE_SALT',       '2Dv8CL]%<V&@9/z}r7K0W*wnkre/1vri^*Xp|{(o(2<TyIr=276v-?8Hor$Ac:S9' );

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
