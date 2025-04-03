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
define( 'DB_NAME', 'site_4' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'c*+N${GXAm@u|1CE!p+^2 eZ0A9JuJo}-]6ETAA@> qhyBNif>Pp|-kM(aSp~VX&' );
define( 'SECURE_AUTH_KEY',   'w,la$J_PZxbaQ%Zx[#VvVHb~Ges#(1<1^c:VUt3;269e(r|J.!I(+R<N=`&BKfp3' );
define( 'LOGGED_IN_KEY',     'glItE.}[ploL>lm.3S2v;0GLuVD.VK]?*_S*U_TmBJ<Y^~mkM#xmi:yVOu S:(/M' );
define( 'NONCE_KEY',         '>[V6`5#oqOPKf}SCUsEGyw+Wf6oGJ m`;$fjF70<(v {-9{%p:Yz I=R#x]oVZ_q' );
define( 'AUTH_SALT',         '5NurZ$q1qlc.0mCtA(~#`F}-poXvZ8?A BMp#DatdkmvIv*Ion]L0m~2F.E~I6tT' );
define( 'SECURE_AUTH_SALT',  'lJ;kIJ%#LHixeh+@7<4C`{tSbi4P{q>e1<-Xkrul];wfFeS&!S4&uAW-|yfZj1*w' );
define( 'LOGGED_IN_SALT',    '$oz;|)@4u+U8!]CL8q#n5J!|finYEbjsSqf6*?SHz%.l!;?22<!:):e52C,],JL>' );
define( 'NONCE_SALT',        '$GeaHBT}N^[Qaz:%`J/)_wfW%,:n1^}jGa60/}|}la*%F0*eE821*%-zBnM7AC4i' );
define( 'WP_CACHE_KEY_SALT', '(Tpefl1b4M`R=vn|5yK4[4!7dtGtw)(0:@aP#ah)wbpa>w/XX]yw^]0?:IqwQh2v' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
