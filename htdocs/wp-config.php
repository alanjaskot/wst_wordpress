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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wst' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'C@xxtO]3Cr=F(zS]}||H`NlrwI9LTrX<l@!rm~?xw#CHVB7Gbpyck1b/b5lXAmz[' );
define( 'SECURE_AUTH_KEY',  'w,LY{{>2!n:Uio],gPlhw l;7Zz7 Iiu-/BWdiqm#s*HQ~-Vb<JLQak{Y2RY]b,}' );
define( 'LOGGED_IN_KEY',    '0gNUvgyK}r#v58<CbH>b$x[bb]7Pmlz1:VEGHlSo<Tfc?(lNvz),nx5S7e{;Rvy6' );
define( 'NONCE_KEY',        '+z9Jv!lKireZ:%XjbSnZE:@kOicKuk9L6>38}p5gHHTTRVSqvJ(l~<{Vg@qi =yK' );
define( 'AUTH_SALT',        '`[QHwTe&*#q]dQ#b9!a^X+vwThaV8ix&5EgI[pO+[.(hvgh*uL;r#s+;J9g@^DA_' );
define( 'SECURE_AUTH_SALT', 'Mqh4ZWl9;&J_tR[SWk*F/bC6T9?UUW1JS{EL5|B{jw=1(/F&|{h|XGsi!VgPrwRU' );
define( 'LOGGED_IN_SALT',   '}#y4=W^Dhi1p{<;d$ho-e5AVQ.R>ie1tyu.w690jm3}6u3s_QZU3-!82U1FT[-H_' );
define( 'NONCE_SALT',       '21eFyI^X{G-`zeIV|5~i- l]jl3C z.M[Uo@;(WPD1VX7yvOd][QTCKvwMYzu -.' );

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
