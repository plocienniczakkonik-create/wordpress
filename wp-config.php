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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '%b[2eNd795fu#>Rj^GW#U[QY]{J-jTOwuI0C|&{54iR<zwrStY 5Tr/<Kf~6HVZf' );
define( 'SECURE_AUTH_KEY',  ']LqbvibHJQ8/RR[~u7=ajuOTbPlP<P2:YzL%]2Z>9^z2+IT-7i,2Kha}TL&T>ns$' );
define( 'LOGGED_IN_KEY',    'a~UnSls?#D:fmeU{QdRexo(O>MGq;<1Ystt/T&Ha81!Z<:uz0BGr;8N<QT)mUyB)' );
define( 'NONCE_KEY',        '4CW-.^3<<q*UrQuPr=8L6N[Nc|4~K-r`#C8eRP=&qlG$Tdn4t3a2in<q]w44(My]' );
define( 'AUTH_SALT',        'L|&xC?Aday2x56hBl&yW$pm{LC@;0s}Je$.;owWiJhlj)n+f8LU wzfE~6HW]Ug<' );
define( 'SECURE_AUTH_SALT', ':R>A|WmAN(*nF/+0u|BU20,eTxf;~Ar;PZl, 52@7ae`%<>nNBrS#%akfs!u~@$j' );
define( 'LOGGED_IN_SALT',   'aatDNT!JJI}czCO]K:dSo&_x2jNGK5!=n@@@U,MjfZpb)2$S`TcB51UX5i[!Qe`I' );
define( 'NONCE_SALT',       'xZPp7_|1ck9oD)`)~!v,0kK;2Z/xkJn6A2Fm{3ZzekBj$Go(2{1=4ACvl7Xbkwp|' );

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
