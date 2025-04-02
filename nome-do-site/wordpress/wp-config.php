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
define( 'DB_NAME', 'site' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '`fr:1o!bwgQUL,bS[s9bG%8+%QX>Psly1Wy!aX!o>gkO5}iC[FgH9*SVtw4;4WJw' );
define( 'SECURE_AUTH_KEY',  'SB,j(qa4?<_Ygpwp=KLSzXd>wc/qq/9?Oe(yU-3F;t9FWz1bL;U!MXeDCNWs{i1U' );
define( 'LOGGED_IN_KEY',    'gDZ=MG2T*Aji@L=?$M]k)%SjF9[ptWHdZ`E 7OJ(#^z`I!~>,u-#rsr<Gfd)_cdY' );
define( 'NONCE_KEY',        'VnS8K@G $9vjY6$9X4ub$c[pO1efOJQ5d5zF%QW+FaCI~CHUin; T%x=  .7OblR' );
define( 'AUTH_SALT',        'lB/?VRe*.DJ{FQ`;wh@Y }gw_ord=3lP#osfP@Boh;L0OA>q%,Y%2_m0o[_+{VXk' );
define( 'SECURE_AUTH_SALT', 'Z+IoPw{(ne*5h$+i[|^h({Oeyz45=>#.=QboWO-#Uj&4sh&,wp}mfGwjD!:b7wN]' );
define( 'LOGGED_IN_SALT',   'Xs4]JvhnR|.&|1dbj`gV~u};<Cc*-GnDmmPzA/%sh@Lgqf,[IZy#cO6t;EoIhZ&9' );
define( 'NONCE_SALT',       'bkPl8Ojr%YYlkGq<g }lqIvz,k>!Iu11c@BN><;Dm<RT8cyz@pLBXMBkegXY[oQ#' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
