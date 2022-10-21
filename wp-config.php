<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'FS_METHOD', 'direct' );

define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

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
define( 'AUTH_KEY',         '0f~z*4YiW;hD4gD[uAQ#D/T?CJsmCve;WX&S9jNva63+F5(u,?DrtDsJ2X0#gaDC' );
define( 'SECURE_AUTH_KEY',  ' /OT2Pqo96wPdinHfh_pZa.-;SPdz|!yEcjrqe.(ZYwtU.:q|<&MF#-_pE4{&qN0' );
define( 'LOGGED_IN_KEY',    'x^ukV!ftH!e8[3GJGM}^}jLsBhHv94h)te-w>*C=Za$~K_%+duhJE q4n4xKV[oy' );
define( 'NONCE_KEY',        '4>Hlq`~|2({:*XZ}vE7b($hI>{47Eccq+@|rhKj9{0:ruU/pUqSBFJFz*/x#HQ8p' );
define( 'AUTH_SALT',        '.gV7b8j!rkU8@4opZJu ^X/[cI:#Y@$[J:yHy2W+e6Ys^/Tj[=Wu^~;W0%Nyy1@~' );
define( 'SECURE_AUTH_SALT', 'eYh%3jdj*_Zd%9~,I^qA`eTu`yCBw[Ga3Y9-(*A)C]G9#dbc`H>ytqOKL>]kQliP' );
define( 'LOGGED_IN_SALT',   '<d5[D}IdJ;m5lbdGe<-#>lXnCx_P!(O?+9:N14/1$J_3Wb%#*j13&C@[,m@VlB1X' );
define( 'NONCE_SALT',       'IzTGHJJiIOY$%,i~Ai1 .W~[SkQmYCI2|efF.7>+U}TUgFFp6JWHO#:-_zbQD9#^' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
