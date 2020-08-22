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
define( 'DB_NAME', 'wonderland' );

/** MySQL database username */
define( 'DB_USER', 'erin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cre0000' );

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
define( 'AUTH_KEY',         '?_^]>C/c1$G-#f9CoF0}bLx|/l$z95YLw7b@=dEx&il9V$,jSnq<]Lg%7c~/]b)v' );
define( 'SECURE_AUTH_KEY',  'U/|`==Z+,?k5o&dZX4pdBHB~b!R<,%FJEVwGOt5%XedC)76Opg|1@F`REEQJ D|6' );
define( 'LOGGED_IN_KEY',    '4SH?3Oo(<c^B,Wg&JSdH{+zW (Hpd&f?OLz8?7sYe<MDG_>2!i:seK2%Tz/IMTy5' );
define( 'NONCE_KEY',        'SzJQzN0(b[a&EP_Cn+0=:R}4,+?%PGeqR %M+ove<)pSK>=-Ex^Df^~;,{=I(<NL' );
define( 'AUTH_SALT',        ')<&`,#IXo8>#%;|{sG-uel2o$.I`Ep)$x` U+AbvOZla/y)~=$?,wS751h7g_pxu' );
define( 'SECURE_AUTH_SALT', 'kdO@W9r6ILh>j`[kr/pY?/SrtFvi(t;~e*_:]t+t}QkQ+uLVoMKCFj53dOaf%`}x' );
define( 'LOGGED_IN_SALT',   '*:Q9`wF{T41o)S);rdt+uIxJ{%l%1vP;hQeWLh1vu]U`c=K$KSR$)@YV5p8~pFJo' );
define( 'NONCE_SALT',       'B_NJ$8WY|K5q`E`t];:9{W0:|/W9FD[MYtD)~&;b$+3cGzWqK}eY<V>uzG1Z.ee^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wonderland_';

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
