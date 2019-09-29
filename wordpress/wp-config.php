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
define( 'AUTH_KEY',         ']q5vYy{~=1J{ p[##)0`,4/ud7T<SjxX1WQk$$x?c#M{<Yc9mY zFa`+vVf4,UZ?' );
define( 'SECURE_AUTH_KEY',  'XGzt&dG5Dv&JTU:_RGm(0X>VN[#Ahx>B{@NUe>6dw4zQEIERabNNCqXH~=@Nzg*$' );
define( 'LOGGED_IN_KEY',    'Vt<fZDp#5p<i2g=zB<aR5/FMgb8@M8KG@DrYQW 8aB5(&keN@9d*ISxjPuoIC)3f' );
define( 'NONCE_KEY',        ' SP U^Nkg4&Rs5-SuTqKJvLqv=DJ;rHF|xPUA=1[v`37bQ*9-|p`H@/>:Dk)DN8t' );
define( 'AUTH_SALT',        'Z]*;mhX>x0+hJSl%^LwHFAZMO!u`C*Fg3PO[Ti^]PEzCGu(J`1fFJ)+xBva%{UUj' );
define( 'SECURE_AUTH_SALT', '{?EI}T4jhEA{N<W/9G =mkQY>H@(gW`9.&1>}s^5uU*2#}({k=6i<K1D*`HV}KdW' );
define( 'LOGGED_IN_SALT',   'NnfI}l~n?V$LK}6}#R*}!tg@vCtaXc?SVh/Wa?N8+Hu@Y)Sd2);LF3k;]Kq3?RUR' );
define( 'NONCE_SALT',       'q0u]a=i@,3v5PTDz+=5}GxrtE!Kd|7l>a#!bO5CO-;+!vC49@He$T7=h`m[ZJq t' );

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
