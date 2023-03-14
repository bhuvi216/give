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
define( 'DB_NAME', 'rubbish' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'Password@password' );

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
define( 'AUTH_KEY',         'kKqOVl:k|w/QZM*-SK?ctRV3Mpz@q<_kkSY{U+Dv:N%n$fsW5!`bbN_JCm`aII[a' );
define( 'SECURE_AUTH_KEY',  ']+ NEdP=qJyK_/T1%DJyFxF/zuz9-QiO=lFlb.Rai#3L@8?2X9)/^osRJn>J*dZF' );
define( 'LOGGED_IN_KEY',    'reaPV[`V-dBJ5}ii~l;]78O/ZaYiy&2zrh@U[X$}^mC{.q-lO)^OBX| z@95X#(p' );
define( 'NONCE_KEY',        'b^T-D7wf_EJAQKAG,qtti~82332MHH!Q<ooc+i/.!,kh{nKh6SQIR Tk3w%JilXd' );
define( 'AUTH_SALT',        '(uv$)gI})sRJ/!XZ[Tk_F>s%8B^?m/ F)Pp$B}zY9oH}sKBkj4.y03`0):y2^+U]' );
define( 'SECURE_AUTH_SALT', 'SLtrfT{)r<]LD=LUz;pU/tJ1Cezr NZ} 9|wjazezeW|Q~uO;XdHYe{iRPfPj^o#' );
define( 'LOGGED_IN_SALT',   '%{6<ZkO=E(W%#.P2ZW4!yuOtb4:#%}Wi)@b7mu%(RD{n2av|Fkf<,7Xze&D}O_gj' );
define( 'NONCE_SALT',       '#dFH,g:V}T!K;w.yS2vlFUvjp5oQk/.[goIb252+5QbX3|otOy=I%AOO.L]_GwoC' );

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
define( 'WP_DEBUG_LOG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
