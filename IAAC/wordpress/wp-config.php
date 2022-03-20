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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'admin@123' );

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
define( 'AUTH_KEY',         '0n+}i*n94J0bP-res P|D->A:^}hw*}zPz$]$j;/3%Kn|[RKX``+!6|K`e*Kao%s' );
define( 'SECURE_AUTH_KEY',  '<zbA_!6T=e#jdt4[unhpK^e=NZ4yLX-C!4={N+W9}^YH.UK){A;GB9uXUmZ_frE0' );
define( 'LOGGED_IN_KEY',    'Z4A`,kK|;41p-IH5O;^Zh6H0.ke@Vv5hk==*O_0npg2Qe~iwyM3~Z-^&]I+/%Thp' );
define( 'NONCE_KEY',        'gu&OOYRTYat^>N%7k<`O04-e&!neJ)~|+@?MA1qo#TV(p-WiX4]7J>P3]7drFs8#' );
define( 'AUTH_SALT',        'cI#OX~rS}1L6[.3LVyt[?RH= 9ZVLTr5axv+u]ewY*2Sdrx*-l17${>prW8~Wv(m' );
define( 'SECURE_AUTH_SALT', 'aApPQfI# OZ}LEvMo) skJ&qA+j(hZ0]4nl|[l_<46Q~q)ndLV+$xgG@$V<e8%.]' );
define( 'LOGGED_IN_SALT',   'Wf(M*VaS0{4WDUp(RgfMiJ)}$)>TIh_wMIIF g~(_(nwQyNps%WzPx >hKf^kK)C' );
define( 'NONCE_SALT',       'hq4$w<f;?V<D$S}}[Vu(=>(8ekA]sj:9XE%rCGTgZ]uA8_eai&wY@DCwc:O>;wf(' );

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
