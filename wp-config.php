<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u391521512_5KtIQ' );

/** Database username */
define( 'DB_USER', 'u391521512_IUnpD' );

/** Database password */
define( 'DB_PASSWORD', 'NhLrV7j2Nc' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'D-Wr&D[9g3KS-9.s>9JP7u3g=FN;xsLHdf*RhprmI~9o!&5Jc.3kgf^)T&6mr9&]' );
define( 'SECURE_AUTH_KEY',   '|c+H]}>hg($Q!:4[KnRk HHL|1V^35M1tibr!.;FYaTxFXj30q qHY`*$oUZfXp&' );
define( 'LOGGED_IN_KEY',     'C@%3]4U=QQ$E1!{6v}5wO*QoUDl_[RZ3h=1Da7e/P]DK;/(=,H?}^{Etb%@j<*ml' );
define( 'NONCE_KEY',         'VD4@cxd6EiKO_q kFYJ1hb8Y[,i Ul=9`n2Ab|!@@!j?qGr|`K/Nx(|8]/<vuT6_' );
define( 'AUTH_SALT',         'UjL}Gro$h)1/9A,x1W}[SD>~Sqa;%+1^m+^K(IzoUS?|k*jPXiw67&AOi=+%J3rt' );
define( 'SECURE_AUTH_SALT',  '}9e%nE_^!}DhJ4qK#gD10E1tWjq]K&<XI,kY;19OchD9W&bLlKmk^kUn-G3U~LCw' );
define( 'LOGGED_IN_SALT',    'I^oBGq{UU3V*V~5v1P>1MTY7k2An*eV8fXzS$B;s+MAjG!YgH3@X|7_+Wab{H>)/' );
define( 'NONCE_SALT',        'PNz{3mSj|f6^Y6mXPH3KT7@Pr:-UbRIWl?Rh,#:Mej2s+;^H]KW}f<zXO,@(Vxiu' );
define( 'WP_CACHE_KEY_SALT', 'L_:Pq.+C*%k#2(*BU<QKtm5J]cI|)~Mg;j_I,%1!OC#?vk2)hI0GITTjb,D4w3:o' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', true );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
