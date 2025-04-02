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
define( 'DB_NAME', 'site_1' );

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
define( 'AUTH_KEY',          ']BTc1=@Klc^p_N?Xe=7TaS.lXT$CrgX|*H_8K8lcN5jgZ^5Ce^F2*F$R]ek(^n%=' );
define( 'SECURE_AUTH_KEY',   'O>(m!22<#*<=R13xd?Jx<y>SmtVfukk_AljKu!uLK6>E@5c@,Ml;TXp?Gs%Be4ap' );
define( 'LOGGED_IN_KEY',     '-!R4kwV0$-xwB:UP|`lf|=+U% /1@K`S}g~?zVrp0x|%Qhw5?=u81q}<wW!HE>)*' );
define( 'NONCE_KEY',         '#jw8 *=wBY6%in`ov#>2ATJN<_4hRG 8WL9XY5r-G5K -Cbk1GP~)1 I%fmd4,@$' );
define( 'AUTH_SALT',         'NXp;YwH(BHl!x#Wx.oe*}nLGYU&kE3+~TwhBp&u[Ec<l!i];^[Rg$2C&er9}<IbQ' );
define( 'SECURE_AUTH_SALT',  'lM%+d6w<Bqe;Ez;a0|Wc/*T}9v{+#!tfr@gwMdjzBMlo[UBBH)93ma2Ruq;QTUiH' );
define( 'LOGGED_IN_SALT',    'G:2(w#gFa`&y#w>k[Zv0qbsb!?ca`?at&.v*K77wm!7G4*8gz=93sqMC@!V25gqf' );
define( 'NONCE_SALT',        'Q<@M15a31J^.1srbv ^H;eaH)/Yg~MlN<|x!dcKCGncJYx% <v/<!%hZ]#NoG671' );
define( 'WP_CACHE_KEY_SALT', '(-7us1ld=/O|oyri_(^PI`MkS(@8i}>qGk3/r#hljqN=y.qWT(:XfzQ_0+u<C<ys' );


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
