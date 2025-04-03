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
define( 'DB_NAME', 'site_5' );

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
define( 'AUTH_KEY',          '8y5F>.s~[IHP1??8JdPh$1]ACd$]lK;YcT#!kOg!$=wg-%j QurJ;N/4j{4!a<NK' );
define( 'SECURE_AUTH_KEY',   'uv._=,v>&l) &.a)~.#kz(6NJ[@?G|v=&x70r&m0B2j_v5_&e`M73[FmKeKg{j^^' );
define( 'LOGGED_IN_KEY',     'TKVbR@wZLoHPhe}bQl0hkjV?b,g`:-<J.Q5#[N;Fy0$d3J?IPr n]tytgJv_.A6k' );
define( 'NONCE_KEY',         'wTEhh.l(QTzms u)EWs/^(=fd%qgkp)I!b:Ofde9Ia4<<.I1M{-A,:qr7Vpj[vym' );
define( 'AUTH_SALT',         '3DE,l-A[~qHn`{_Hmx!=v%Y:TVel#G.$f:^1sL<3o_jCf&h!eIGbDIAe%$Q;*2Dp' );
define( 'SECURE_AUTH_SALT',  '&30iMcEp#wY:eMo/]54+_B@@E+87dRqFdFg:+z[juxugMH<h>C<jB)<>;Zm<B>h>' );
define( 'LOGGED_IN_SALT',    'XwgpId%]xnj+P-Q =9>$ZXJH<:pP`J4P7b4[]V>k4R_8mFE<<jze^i_aqA&Ox-i0' );
define( 'NONCE_SALT',        'U*Hhec)y`@4.y$8![evY4L e`E0H*87%|~-k+Nm0+aq]0Fzb5Mmxxt9eC@}9DvjM' );
define( 'WP_CACHE_KEY_SALT', 'UJ}BH=Ot8fQ(zrn)wTn8R$HM|(Kr#VM&rh4SkU[4TMr/D`49fQi#aWw2@^s$RLc-' );


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
