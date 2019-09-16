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
define( 'DB_NAME', 'cms' );

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
define( 'AUTH_KEY',         '7&rB+2|4GOnL{jcG/nU/{m :b`^-V<unJG_M]Noknq5]<Z_ }@3P N$u-uK*H9%l' );
define( 'SECURE_AUTH_KEY',  'p)Fgsh!/}XFs}ck@S]S,5#c/Qr|XJ*RSQ$r[x~4w|^b{]4)TuS48u*Rc=7|b.yDw' );
define( 'LOGGED_IN_KEY',    ':LN_.eOKq:sgU>d)gd(feK>l%U[?63TP[edA<p-[wXPN5b]^%E(1guaXrYNKLWn`' );
define( 'NONCE_KEY',        'A)AfW%jHlc~yp6H}Mdzd<V9=)j+%&a_z)[Ew)pVK6J`vOk,MOXvQf|1(KxImz/`>' );
define( 'AUTH_SALT',        '#:IP$t#5n/bAi );)=-pMYV.v*fNb8o7_}I!>FeA_mjns1UQo1Mdr^.xaK]pbL<c' );
define( 'SECURE_AUTH_SALT', 'L<-%4R9]e-9u|46,3; <RsM?>_7mO8H:BNfEc9b,SQpE0#(w0.1@T9aZU,*CHT|~' );
define( 'LOGGED_IN_SALT',   'b+ydfGb1kSu~QpK1J$15/MHA2s|5szI8<$xHTx^gN}41iri9)o-,n6(sqgbdMw0y' );
define( 'NONCE_SALT',       '1,JkLteLhy{t_LD?3>vmFjdScCh,>*C+3B}aRUH9n}[}|t8Fi}`.12cR/JkAYCc4' );

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
