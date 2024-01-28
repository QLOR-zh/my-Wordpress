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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hoteel' );

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
define( 'AUTH_KEY',         'NbM^lVDg0edz NV(Frwf#}y@}To,18rW({&:)N*Azn8`3iI=uhYTm|wjA32r%C`v' );
define( 'SECURE_AUTH_KEY',  'j,Til_]IX;ds,+pIM+yDNfQHOW/A#L]R0e<}a+o01w:gZ2mPEEzu[3qR@H:UTarz' );
define( 'LOGGED_IN_KEY',    'I4b8.r$@F*2>nRXj<mM9By$l`Jbu~pt3oj(C#C>0oe87OKA5Q}vWi>MehifFIx2X' );
define( 'NONCE_KEY',        'SlIK5gLybrcC<b^)O8gE&`kgVi5bn0GPei#zpi,FBpv!2CJLOU@f7@,YIf5+bJz/' );
define( 'AUTH_SALT',        '? fVjAN/H<5.!J2?~tL&4,lz?n<RkJIk<6NKQSkxqlH:|`_6W,?cO-!{cZ={Sk5e' );
define( 'SECURE_AUTH_SALT', '7q-9!e9)pB={f`874,8xbs}fAcYN,53hO1lVQ~:^^Zz(G#<;QQ:%%]v6s]t9yX|U' );
define( 'LOGGED_IN_SALT',   'A/16slE.@{bEqq?1B> omY8.0t];JNbvwn@AJCj5lWc#[-B(qGB~31(1%b-o[sl^' );
define( 'NONCE_SALT',       '~8@/([g`=&1;R5a Ywi+/$X@(*~V:*A9<>#z^,MP|UjAZYQm&>T9;~c&:3hA$c@2' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
