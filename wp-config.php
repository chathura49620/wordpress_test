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
define( 'DB_NAME', 'wpdb' );

/** MySQL database username */
define( 'DB_USER', 'wpadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'StrongP@33#' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'z~pjv-,DU^*hY(G@NWfDNgoHk#L3pZsww1,;`SO.)JkvL.}[PQHh!I>5eX+no~u}');
define('SECURE_AUTH_KEY',  'Jm9kOf29-xqr6+=gf|tBHW!A!$*5hd@_X`P-:qrOy0!,`|p8P A+b- OcA cJxE6');
define('LOGGED_IN_KEY',    '}uJy|$7|;cJ(XgK3p3H;u$*A,P/X8_-e)=k1INxs1K5k-GSq_l/Eny-vWlz]!X,Q');
define('NONCE_KEY',        '|.QM+}h]T)5DV80$L$}FHR6B^aK`1MmfX;HvC)wq_lc1VCnk?*o+wELP6WU1%fZ-');
define('AUTH_SALT',        'moDHnd%_Q2=_8d[.2g97AQHfgn249+agbv8mnSLHAc_#|,5Dx7 DwEJ9MDi`g:%-');
define('SECURE_AUTH_SALT', '98f9K4}^P@XHo?|;|ik?dx!ZHOYsI=E{g~=RyW-[@iIZD]on4TeC#PYQ<vD0bK5=');
define('LOGGED_IN_SALT',   '73FI0P+O-(i1%4tN~YUI:B!]X]4`E}e0SnB|BzvYG k$pxct0EPP)Q=RZ7;)qewB');
define('NONCE_SALT',       'RYq=nyG[&G|Cp*Nj]CMtjOkU)<Fq<A[a1PsTBs=RbC8NLxU+B2GTHg6#+=J<LsFp');

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'WP_DEBUG_LOG', true );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
