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

if(strstr($_SERVER['SERVER_NAME'],'fictional-university.local')){
	/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );
}
else{

		/** The name of the database for WordPress */
define( 'DB_NAME', 'u592968621_universitydb' );

/** Database username */
define( 'DB_USER', 'u592968621_admin' );

/** Database password */
define( 'DB_PASSWORD', '@hmedQureshi$1' );

/** Database hostname */
define( 'DB_HOST', 'localhost');
}
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
define( 'AUTH_KEY',          'n_/h3|o4d,k86)@;lV!8s*5pu}^<O%WXSmo!DnFl){TVxF9LM^JH@gkVc_Q!gCyS' );
define( 'SECURE_AUTH_KEY',   '5Xsg0>p<y`ZN]obEl(]0XO8y2I,(;9X>i:2b_N]iQiK5`bUUENC!LBG.A#XB|2pv' );
define( 'LOGGED_IN_KEY',     'w:~doP$m4:A7<;1F?+*nF_j.A>&wF&8h0PD[C@!(V@;v1V5-=zO/0v;qZ2<%4,nD' );
define( 'NONCE_KEY',         'a!,KLP3<*ZTq6#>EesEFpshA*JBvmj<&S[!Oy*hv?*wc%0]ZX^h47&7C7fUwP^/1' );
define( 'AUTH_SALT',         'ppTIK]e3:XZs_5baj4f%#;8^vAj%L/$S5L+:}t&A]j~mJphm1B2h6!:L&5Y,Iv#T' );
define( 'SECURE_AUTH_SALT',  'Y4DuS[B39E~yJ5e8Y2sk+GPsQN*{v]i~W>`l~n@z.~P$|OGgYKV:WujDmFT|N-3C' );
define( 'LOGGED_IN_SALT',    '0gi|_&xXSb(FRdwk<WsHNMftOn1MlYHhL{Ie<KQ V-36)N`xt1rnRe{}pQ.YfNF?' );
define( 'NONCE_SALT',        'PR(*sYXd9/Foa8wl5$*@4(0KQgj>*RRj_u+pTu9]$,QFjCc<-(*EJQk<s)Z&P3=6' );
define( 'WP_CACHE_KEY_SALT', 'vuD:Db%f5>n;/>kui;knR,.W.E^1,,^LrmPY{bAT/&_vMZ{D5SE-M##d&dCXd>a=' );


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
