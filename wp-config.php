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
define( 'DB_NAME', 'fruniturewp' );

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
define( 'AUTH_KEY',         '~6S4Zqp:J<AdQ16a!r6iDu:8y;:mB51e}s[//#[92T%K|`54L33<+S[Q]OJ@nJ/[' );
define( 'SECURE_AUTH_KEY',  '_Ab,K&jRBD82{]*n={nC,iaV0 E%E;= y*qO#2/}  k.K3@rY;zkZZ~:yyw3PMh$' );
define( 'LOGGED_IN_KEY',    'L--|t>7PfdoY_[>3TG2unY%?s$j!S(I7?l5rT[2Z$~s.-40&wmju&jmG(*g<=I/^' );
define( 'NONCE_KEY',        'n8sfK/k]51PB&jjA1*VR]Z pEo?~@n93lt){]Vyh@4](~T<l)!C&fMfCnesN42so' );
define( 'AUTH_SALT',        'm8fCPB@SW(.!J;0|M$UyasOL,x|K^|:WM6(p]`#uGP}pbU0xwxdoc4-UlngK1I-W' );
define( 'SECURE_AUTH_SALT', '/A^*)^k_l9tWG~>:qtq)h80bBBOZ.peHBa.,nL(@mEZ;p.SUEi>pWMLC7G-3-#Bi' );
define( 'LOGGED_IN_SALT',   '@~f^{828|SdjkclH(Pn:PWu[pOgo`@SP ~t*A,zR>-R+uHJpnRD+gHm[?=$FzKzp' );
define( 'NONCE_SALT',       'i%!MU^4U./~,wS!BW&F_Fo`,.s3s[M~Dh8I= JJPt-dLBJT[,pxVYn$*W=uChXt?' );

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
