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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '9I bd1$!+?|b?.LS6hIk,%P-P9R1#J@#t)(/a}._xYPAjXz`FlmtCpdCSRVx1q;<' );
define( 'SECURE_AUTH_KEY',  'xrJjp!KFrx??]P2ypp>NJ~mV&*J/DCjrbS%_U|)%yk-$>h%.k8<pMpj3>:$J8> H' );
define( 'LOGGED_IN_KEY',    'albc*Y@hckuJkcCc7UEEwl|!<UvI9SJe]T]sah3KrhMu@1%kj=E0%BzQMj^^G)-;' );
define( 'NONCE_KEY',        'ZNf.`ee9zrwTK5a?X vk*r,UX)ieVBk&8g6bG+roAOHGx.{Ix*QHPGu,T&<f{x=Y' );
define( 'AUTH_SALT',        ';wvFJ-WKawF&5Y;1mT@}0=244P3/iPfhpUwSu#dcT.DCiy F7>+>L<0X_y*m~Pq7' );
define( 'SECURE_AUTH_SALT', '`%hTiRX(A?Yql~U$%QO_Gy,`K>@X[+%nxoiB3pvTZk>azB$+jdc7^N+4@Ao~x;D_' );
define( 'LOGGED_IN_SALT',   'Tl0+o rrnvg+=tcX^[[-%#=L.`0xX%-Y~/[Ndn%*s`xwl00NwckZvMTHMV,7|A1V' );
define( 'NONCE_SALT',       '+b8Zin}h=dbVPbr903cqQjEI(=vf?&A:~]i<zZVsWfahGb#]9nvF1 lI6A&+tC7#' );

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
