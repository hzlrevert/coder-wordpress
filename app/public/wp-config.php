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
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'C&uzC`KV_RZzm4gAw7^YJF_h!Aih6f~8cuY)Atw2X<]LxJ]Ky*3UD=z~M_2/Uj5i' );
define( 'SECURE_AUTH_KEY',   '7f+;Fn?F*mN6UVnSDR?V%t((fkX|1W}M;uyD#=~=k&&DYpM zhZ26Ok_`^ APc!?' );
define( 'LOGGED_IN_KEY',     '+QV!m$z)>q3M>24l)[2ab65EHd?!E4XK!L6[U$hT7N-^hzetjDuQH7p]j~<9A=f9' );
define( 'NONCE_KEY',         'PCGX<V.WOft_h(a1O:{MNU*hVy,J.TDr=jq2%.DG%X;rQ)>j;Qjj)IFPH4[Q6qSk' );
define( 'AUTH_SALT',         '[N?gs_yb;d<5PlSEM$eC30q:ZGkP$.z/}(kWq6mzwv*BPI]EtIm@<D-_,eu$dY /' );
define( 'SECURE_AUTH_SALT',  '~j^fM</vj/`A7.b4-xU9hTkKSPI+]m}+x68M5D%~_t%7XlAJGK4GgE:)JX04M_.L' );
define( 'LOGGED_IN_SALT',    '0$)n,>8uXDn:DymJK qt2#Y72G%`s@dnrID|M22UdYWWo..;}P4}p7jz[ Ju/>]v' );
define( 'NONCE_SALT',        'X]QJ)$B h*F)BVIxL4_U)cMf!#dY0DFSH5dhQ0E%XwqKLzZ#H_j}ozA!i:v`#)> ' );
define( 'WP_CACHE_KEY_SALT', '{=:hMpiR4@x,!;_><>x/EH$19^mo.a7rcG 0.G*kit0YN=53XvSU?h:~7U8Dx1zx' );


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
