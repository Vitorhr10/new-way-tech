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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newwaytech' );

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
define( 'AUTH_KEY',         'I|D|iAc* b:)i@*K[bguIP=+#n3rZ5b2~I~C_n5=gEPH`ixJp6C-2zRk.RJ;ie3#' );
define( 'SECURE_AUTH_KEY',  '7.iOaKw3?Rx#R-RkugY,n@MRHvQM*[,6W$z(_P%M Qc|rc{X+UIA~^bV|a}9wn4Y' );
define( 'LOGGED_IN_KEY',    '-0XTcjP8RD3H#s2bH!ueiDuaW;0J9-KV:q-Q:Fk<gDoOdyOjCp3#B^bwKNL^D+ji' );
define( 'NONCE_KEY',        'm-Y5h4x|sfXgdDTA03lN9D$PM7ok26;(0$^[5d+66p^6g~6D/>;AMkF6#AMcG1U@' );
define( 'AUTH_SALT',        '[=u1l|NgkZCehU=g ^/zLUE,Q4e StLQZ}6}:G:ro42e})U>#RK,ERBVT9ThJG *' );
define( 'SECURE_AUTH_SALT', '_gi3=L{*U@Y<hgR!!$4zwIrZHRX.tdl~s`iaIgXUTiV ZSO)I>(+!3NyjmY#!nFH' );
define( 'LOGGED_IN_SALT',   'a:kw@U;pD~Vsbjbosh&dIx]]1uO-R2OJ?WCu_^:|OuQRjgj/5.)/w>HI^gQ^[{d>' );
define( 'NONCE_SALT',       '+P|0jWsD{70Zz`g2~l4U.1P{nNYd/0h<BSNto.D#A1lIyh$zv9O#St,(9A1qhMB~' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nwt_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
