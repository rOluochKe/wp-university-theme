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
if (file_exists(dirname(__FILE__) . '/local.php' )) {
	// Development Database settings
	define( 'DB_NAME', 'finctional_univerity' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
} else {
	// Production Database Settings
	define( 'DB_NAME', 'Finctional_Uni' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
}

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
define( 'AUTH_KEY',         '3eoN!iIPnG#XTP%4c/H|o)iqQ{Q);L9*9Wu+a;M*SPa~eGbM>T8JwjqH;<T<yj81' );
define( 'SECURE_AUTH_KEY',  '7]Mhtn$V<$:d!z>MI8h=Bq(#k:)#-GetB%hMBW]G=-d_3#lD2Ot+2%!U9vgX2PCC' );
define( 'LOGGED_IN_KEY',    '^aOnkpxLgB<>4]*_T2c wT@,iZ5Z?.pifNKfj5v MtO<::IP(z*RQjG-Ws.AODhA' );
define( 'NONCE_KEY',        'T6bWKNPz~FEV9F(r6,S]r@Cjs2+[Q?z4hxdl/XpjFJ`+z=>d?O@s(03f[uU-dv{n' );
define( 'AUTH_SALT',        '/eWQ)32sF~e6G= $U5taYw9b,8m>C^YCC|&n<l}*SRCAKcXXd*wcOeXB&BY+_K96' );
define( 'SECURE_AUTH_SALT', ']*hOWn<ZJ`74)RjqRDd4NGdzP,Z<Y`[kO.:F|N_{kX1yn]GTf/1f{4jty>`gih?E' );
define( 'LOGGED_IN_SALT',   'FO9JN?Gvkj+F@&5rlJpA<9qrbHqedogF``VfLJ_e=A[V{j8K+T]Y}x=Wc e)W~O&' );
define( 'NONCE_SALT',       ']xvwZ.7_9ysFqH@M_&;Ewe:akHExBtu~X+<2$4+F;FW/T[+LC)Mf@EH!olhJ.T[1' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fiu_';

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
