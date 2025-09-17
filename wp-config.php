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
define( 'DB_NAME', 'wordpress_ilham' );

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
define( 'AUTH_KEY',         '{;}Dor+CDPBcG$f5xFaN%0Ccl[<y&XkxI#w0$LLqx&E^dLRTlJ~I?[4ct9QU+FM^' );
define( 'SECURE_AUTH_KEY',  '1E(Ig@r }fHbKC&EJ&7ZTT;e8e6ZltAZb)7Wp/$ L[fw ?c(:E%#^rACqvljb)L,' );
define( 'LOGGED_IN_KEY',    'QO(J`+q|T!pdo.(sohl^X 25tbs*yJVNvLPv>Zvzgv.JFZ/b,&O/W1&F6Rho,iCA' );
define( 'NONCE_KEY',        'a>0Tw41JSLlL@eFBcs<4TK/,#.Y=Ol7`rNwCx_WDTv&9:=w*P+|:7 ~E7zN&,w5o' );
define( 'AUTH_SALT',        'OL[n?G;(*.*u+.U/k:3ceST:R%r+F<8hF6Pg3-F?QEK=W{|a,?|(%k}| YK6KlVC' );
define( 'SECURE_AUTH_SALT', '[3;=0NXG$VA.=##r{A6Ne=KiXsu81eFGnhC6!(_Q1cv9np+hrtNyr9*mPLU2a+z:' );
define( 'LOGGED_IN_SALT',   'j])HebB%[/#{w~o#rDd 7:ZsIva Y6(3y5)3@vEzj;]jb+xI2dp<-acNk#ozZW/<' );
define( 'NONCE_SALT',       '!Vo^X.`/Mo.k*s.)<f0P[.nCB=q $C(4N,wO=MP[6 sm8XnXT!{SJydmmq;97Dt/' );

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
