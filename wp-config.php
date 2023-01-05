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
define( 'DB_NAME', 'oc-devwp-p6' );

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
define( 'AUTH_KEY',         'kHm,b5q@;4V8>{Z-Z5f2J+vf`D=3wN{GrG6*&_vJ0HH$A>Y:Qeut)hh$z?Ry|{|S' );
define( 'SECURE_AUTH_KEY',  '6W?}stG`cIRX$w)0ldNlOuqc7J_va,zis(A1Eg)o}4{+~*i4V>t#v_p/85h~X^.l' );
define( 'LOGGED_IN_KEY',    'zT[M)(TR:JsjC*L24MTB.6VyH@,(Hb%kYM4xg=r[*|{W&Nge00n5K+ry89R3oq)b' );
define( 'NONCE_KEY',        'Gvp:rwsdwMsMtmj0(?$-F,Kw,Q{9w+YOVZ][?u]>BNcp&)R|NplFUPY0DYWS|bk#' );
define( 'AUTH_SALT',        '}|[YHimm!{xVnu~G xw,+&H)7>U|j@9sLm]ZZ&La:.@W&Pr+MgM2BbtONHIf6eY-' );
define( 'SECURE_AUTH_SALT', 'M3.DiWOd.Jb<UFcvGkd#bJKR#NMgz49&mjL8P8^m/dhR%BEq=u!Z90ZOCh}TBXie' );
define( 'LOGGED_IN_SALT',   'XMr=h{%-=2K#@0+`Vp2J9]O|d/5)Y$+fQf#/h%L=lr9%SR|G$?:fz*.|;-+7b.TM' );
define( 'NONCE_SALT',       'X,vyckn)QsYAq&h!Ss}`bwuP/tmG!Q_Z,a:@rk?LJ9vi `!v%1L6V]X}8S/BGL_i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'oc_devwp_p6_';

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
