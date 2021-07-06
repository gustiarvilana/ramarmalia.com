<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'ram_profile' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[?k/E5BcdB7*UsLxWT4#vHj<}$0Qvhugmm1}&QvZxw]IRR+f<jggiE(8X2gv<p6r' );
define( 'SECURE_AUTH_KEY',  'c]$m/s(Kh4S0VWa2 )BO-^S$C&yI8/+kBN<P+bfzYZ9cHTV>:YlggR YuI<RCBOI' );
define( 'LOGGED_IN_KEY',    '`;?QnI,v]X9!N&$vB;aRo-B.BYE<J}-tGH=e#Z6U(lS]p^Toop^(0{yy#?]rdWU&' );
define( 'NONCE_KEY',        ' J<^M ,Kq!3Ro19|cw}w%NLibKQy]}jLywICi+F0-.gOG!hS-b*LF}[eCtxz!hIy' );
define( 'AUTH_SALT',        'Ab2B `+qf R64n1>xjDeFR@(X~(t*[fAfvj%PF#j}!8S9L94/E/~0XA)emYa+-p/' );
define( 'SECURE_AUTH_SALT', '|~eTE(IRCFD0Xf5W/GU|iZr,- jzfUwRbmgB/E>l|-A}FpHda/IXRj5l</+-O8vb' );
define( 'LOGGED_IN_SALT',   'oLNeSk531o)s!bC!,QSemN.KkU#PR%!=^TvLuU)  BjI-Rhz]4hC}/lPukjP9?cA' );
define( 'NONCE_SALT',       'ml8cH#_txgraM&qWMfxe~hD!p~=@|+vF*B}Gn<rvWeksnkfj}iu)MS4V1u)(,y5x' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
