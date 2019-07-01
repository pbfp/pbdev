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
define( 'DB_NAME', 'pbdev' );

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
define( 'AUTH_KEY',         'wPPjAtAS^klOKQ.-kE+5bh<>ZJ|CA(&WC*_h,U s3:-c5K6`g{P,IX!-loWtAwQ2' );
define( 'SECURE_AUTH_KEY',  'f1gT9) L%3?<*%X[v>(b.6m06N`n8L[d6uFu.T/*:>twyivE|aqYk,*+q=Si4,dP' );
define( 'LOGGED_IN_KEY',    'dIFXeiy>FefpK)R9#dMJ<xcb8&wV6,mM0J- ER<n.YqN(AE;%@5`pkX<-w;.F&}n' );
define( 'NONCE_KEY',        'IbEp&pY~N5Tuy~Bt]B9Vc_;A)?i^$@)o9O~L%%N9u=P/NPh_|W~.j <Bg6*j;$Fc' );
define( 'AUTH_SALT',        'JxxUzui);gp~o=NW&7Q`+?Q(RZ nu(MlIDPv1fn/heN-sB^>:+cqyf6US?.}^KkA' );
define( 'SECURE_AUTH_SALT', 'w7v8Pd6ez+N%}+#a5#5+<V@:SN|c,(.xxQZnRkqq>;BV5.RxJ+5z)sUfZs5`v->Z' );
define( 'LOGGED_IN_SALT',   'nj!rg.yT.N,L[f^b7&(67({-c N:}a6WV1BgW3mnPBe.S}S[4l$WIO)JpYfGq,;r' );
define( 'NONCE_SALT',       '!TRN7KdZD{?x,Gx8g;40 +7%!=M>li71;&GxVU+}m8Y8^pb&|bDaKBt?^/~zgp1f' );

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
