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
define( 'DB_NAME', 'dbsubummportal' );
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
define( 'AUTH_KEY',         'D8d=KhvWsaV18i`_Ruh*dCmz2b#KiM((yUu#i5~r@CwSv~.nFn9Hw9@|`!n[YauC' );
define( 'SECURE_AUTH_KEY',  '%{`$?Y&Wu08cU/W?}6ojX!N_B.3&+fsjRSc8@B5{p}[]s8h(&[ODi=R|G>S9R4C:' );
define( 'LOGGED_IN_KEY',    '9Icd&-Q]S~ipH<#0<g+pN`a?.iH*aPQfX!SE%pr~X(Ey?;9]JO|rf*WV_zB.-p~|' );
define( 'NONCE_KEY',        '(F:#`z)aGu_gm=ai=TMPXk#B_|F9UOfk4<tC`lQ`q bb;4E##Jibo&~H]U`+ ojY' );
define( 'AUTH_SALT',        '*9R<GM#`.{zAoFp+c@phTR((PtcJp0/EGrj0iWTb&p5TV2c*=( a.wAoTnu]}<Ao' );
define( 'SECURE_AUTH_SALT', 'D&H>[|oJ^S<A3]@uvvJ{hW>H;0`MKsx4C_TeLD%WSBIG+pF)3(lPS1mO?m)LM+!E' );
define( 'LOGGED_IN_SALT',   'R[[#X#*ZBS %99#|MTb}s;}llyA8Bc^E_oz4W2BNSDbBRQaeK2l2 d=a#%fd4Azq' );
define( 'NONCE_SALT',       'j#[?-ssM=D4!{/?V:+JQjx~[ut{!HZChP4_/|a$I1:,BQ-k&Rxjl[5kV.(Lm#?cl' );
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpumm_';
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