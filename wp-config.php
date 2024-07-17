<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'D#d<z_Tu1v.`8Fi2IqE}[&2gB;*]5oRB<I{.^nD7ORXiw{c/A^b&YThpEBlN|.{J' );
define( 'SECURE_AUTH_KEY',  '8!KTuj8w]u=L#:7=i@>YX! ? 3|[rQQ3QRJ8/ZM#F~`As]P7g;:W%4_i5`3?i[T%' );
define( 'LOGGED_IN_KEY',    'cUG`?;M+&Di}B!{gV:kxD5 ?o`Y8^M1VI9IF}<ZLwuCp1278]D<G<5&~|j+Jh0a;' );
define( 'NONCE_KEY',        'bX9/%;[T6#@ `9vzD,<615P7GoT$c86l$J7onX?)C7L(~Mg`Fj+bP.t/2G_>.EvL' );
define( 'AUTH_SALT',        'C6)TDt-feFfVPf8/&/QD.KX.pRm1D+Y>#yH,5W3o$@=gX[Q$.,fIzfj >g],-WrF' );
define( 'SECURE_AUTH_SALT', '1M;u-@.IuxGn!Z0>D^8AtnojVr%Sm=eyZ0A]Q.|Rha}IXvK!eNC;~Ocn*W  Ch&]' );
define( 'LOGGED_IN_SALT',   'pN/UpQR34xp@V*#i*n{!9t|}/F.4(&GTa]-|cLKy[a7;usu;~iexgR4QuhaL<- j' );
define( 'NONCE_SALT',       '+M<8_f[3D12(|9C ]*Oz#]6!m:f[,F-u/Y5.gl2cXEceXs2pZ^;] qrh[/e!G.(4' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
