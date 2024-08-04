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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'J:Q,++}lf[y[yuh%kL{L_:e{YN#sgDyBFoa+]FL8X`(W/Nqs-0!>;ZhM1({L{oBO' );
define( 'SECURE_AUTH_KEY',   '8=wU!{uH#ZWPb^#`k4)/[XQ,5a%=+{3zo}p|mjGVjz-0Z;+I&M.jl |. <*K+N.-' );
define( 'LOGGED_IN_KEY',     'j=@=z?KwxTujTM4,({m>EL252.n6ED[8*]Mn+>hO4,dGU3;UwOefJzE.SnUkt?_k' );
define( 'NONCE_KEY',         'Td[m$A<6:S8zo|GouQc.6-W$nk8rQ/n>D9X!dk>G;rLZ;8bX*k=BDAUEP]|Lup<H' );
define( 'AUTH_SALT',         'c@xWU`qYaU+Jz7-][##J,/22&lfr,UmG/6de#p7GXc_[.C<o#0s;<PTJ~==]AQ}b' );
define( 'SECURE_AUTH_SALT',  '=6J+[~`-8^E[?:vX<1AAQ0E4eUHI,jsJNbY;5p~I}M~pt3-2_p/!2r#2i$B:ZUaA' );
define( 'LOGGED_IN_SALT',    'wK$vz7+++L }R1; <9`yGGA]C^zX~2~%t*t4dZfWv4s0Y#PjY7A}j[&D%Bun9Z06' );
define( 'NONCE_SALT',        '|s85/zpQm[[9@zNap?0a=*H8@^cOM#w,wQ8Md4V%av(}-I3fq>zaxm4NNb(sKeLv' );
define( 'WP_CACHE_KEY_SALT', 'VyxyG*Ts#N&bq4t)jar kL5Q=gkL{WmH3ackjzYVM-aIDwI=UE|m/N0Es$`C#(+W' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
