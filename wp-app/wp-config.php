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


define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'myuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',          'S>w6.Nu`B,Ln3DIHLW/~k|I/$#@ROqRG5G^vYA=qHl:iRi&3E3ytWn2H{Kw0B(D_' );
define( 'SECURE_AUTH_KEY',   ';j6.{:B)C:h6T9G:vr8$mPh.=]:tN}L%Mqms[Ct^liznNkoKFLw*Y.fmNj-VMVBx' );
define( 'LOGGED_IN_KEY',     '5aGZQ!=2nGaZ{*;NJUWVcef)+Sn[:oP@RY( 9%wt!D<K;IQB>~_zf,6b[R{?sy=O' );
define( 'NONCE_KEY',         '.dAr{j;6e4_:P^z$Zi}1SICZvomh$%TYIx=m=Lqw9t[ wL-_.CxoKsuNnBaWk,^e' );
define( 'AUTH_SALT',         'wDr_#f[|3Eh:m!Wlf@&&{!G}v3TlB5,|mc0y_Z8)3d2>V}s[x:y&WgRy]kaWTK7j' );
define( 'SECURE_AUTH_SALT',  '%{0BN7j!4T5k,:jb/=lf,k<<_/Jr.SUdy6uLsdy)z0%]UleJzXbL>5zTq;sIlTIz' );
define( 'LOGGED_IN_SALT',    '~96R(_J{9&Co-eTmJB0)(G&n`x?iUgDk|BKk!*7$W@hcgi&2a06VFiU{mbG987,;' );
define( 'NONCE_SALT',        '-[#DyeC?/f$$H4Qid#3)rfx.}F4*v5t)u2>ewjHA*z~P8`~QSvQ7YhnBr6N?~]P/' );
define( 'WP_CACHE_KEY_SALT', '+$0zI(186k;vcYS=SQ^Py~XaYOZFQY_ByOZe }~Z#yM8Nqw[G6WZ(+YxG.qmc>%-' );


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
