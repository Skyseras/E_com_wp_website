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
define( 'DB_NAME', 'db_shop' );

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
define( 'AUTH_KEY',         'd{]%%:l})f7%-Ny>BI1^JkXarIE1;S9!$>ksbkBddNQkeXv5Y-(hZGupKEGt9*43' );
define( 'SECURE_AUTH_KEY',  ')oBXh[jfj=!S0Tp*0-5IryPwbj-&f?v?bX6_U$>hBM& pZbTM^2uMc,aG4(>g6Ee' );
define( 'LOGGED_IN_KEY',    'IUg ?,7gmbpijDs)J5%b@(XK/6D[`(lh.Zw;$m1v*A<HKyP9j?;zd1K~.hU:hz$7' );
define( 'NONCE_KEY',        '5)cc7SGe7H_Iq2N9I_g8}^U1IC w(g.{6n[wRu#>*?Jo`vy/.(N^>h*e5[a 3*PF' );
define( 'AUTH_SALT',        '-jkWON(-Da7a`t#!r!F?74,My~`31ZYe~<<uQIEUpep)h/Lc{xXC:vi+[~@tI)R>' );
define( 'SECURE_AUTH_SALT', 'N)e=fu(m.iNEJq_i(ZZ+o&ai>:+(!ZU4C/&d{PA{~YA%qWW ~,AaJ9(}~1/7]$%R' );
define( 'LOGGED_IN_SALT',   'Ff5kCA;4TDB/zLdr_4;-(L_(^>re~Z[=(+qE:l{q6=9Y3(zc*-]=|0gNH=BY!aF]' );
define( 'NONCE_SALT',       '_N~V97$-g[Q!f/<pO)=n.tLx.KUxv9t^K~{6AhP Ki&+w6.$;)!>f%/hTKM^7_zs' );

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
