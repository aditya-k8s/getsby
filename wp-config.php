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
define( 'DB_NAME', 'getsby-latest' );

/** Database username */
define( 'DB_USER', 'kbs' );

/** Database password */
define( 'DB_PASSWORD', 'bfv52qzUuZ7xbLNy' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');


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
define( 'AUTH_KEY',         'z4t5afWQ`X|,D^Ij%4v%x,gfD%C1G?,?d8HDsjVx_L[ok3BeLl:>7l>0X%`/_+Sp' );
define( 'SECURE_AUTH_KEY',  '<Mw?j1Iw02(|sl;+}5LJ,3yFXq}rw/u4r0a+8YmP]2#`Osor={3r}UE{[1y{*}=<' );
define( 'LOGGED_IN_KEY',    'M=~2Ve}]$gu1<@Q+/:uZ.1>?1zmCNa>7:T>)J=7jST:akJj.2> dk}{k.!w%_lKM' );
define( 'NONCE_KEY',        'Hbl 3>>v ;%# Pzy4RFz+XFbDMP]#,%<PZ%vISRb5BQ.J];`akX%E8!~(hSNmz6B' );
define( 'AUTH_SALT',        '?U_.o1<iIiQH$I>!G|DDAYC{n>bg$GxYX*$_<B.xEuI>WEb/}kIEt8~jv90ACgy$' );
define( 'SECURE_AUTH_SALT', '5wGW/e3k5V(Ac8+i7NR$(,)[}P[Y2AU=zvgC.G/do/[3Dg*tba=HUJeAvK;(8t5]' );
define( 'LOGGED_IN_SALT',   'W|9^h*RPWb0A<`{#a*(A&!u45i,AWeb|}6J3p_~:*{>2Q=Kw0uD05}v7Lzf8^ap+' );
define( 'NONCE_SALT',       'ojv0{HKSJRDkG<>6P,LDmCS`RRMQxnyvl%mR%dO~f-.:nlrF8&A/R,gm|k,gh+SM' );

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
