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
define( 'DB_NAME', 'innovation' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Adob31d123@' );

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
define( 'AUTH_KEY',         'A!c-7:oP;egmY)@3C F;1F6$8, &6Dtwp@^vW}%XGo# /tZnc@QMi~7Y=G/PX295' );
define( 'SECURE_AUTH_KEY',  'a;X4Ct%x}@bKA~;+ym%q7PU=sQa[jb#c)#*)r(V~J=4fy:P- ^=B]Jyt(pM-eVIH' );
define( 'LOGGED_IN_KEY',    'qsj({#c>1f]nd6.Fu*gQY|v:XM8HGv|JtcVGD@ECUejuD;T _Dha `7gD[7OV52{' );
define( 'NONCE_KEY',        'C@Nj0BT45*{^#Hv{h4`P`(aYc^azj$QKne.E*{&Qb}Q[Zu>eR?n<J$(kCBQav28r' );
define( 'AUTH_SALT',        'y?a[-dmth9a%.{L1>elL6feR-hSMC-1A*BbW3Oh^f`U80h=rK}VR.y~FPC=nxLw;' );
define( 'SECURE_AUTH_SALT', 'lkqn^qq@%lYs Rga3#cUU/lmDA0Eb$~6N2P)rva(hEx=9^i,1}^[j2~?d>O/<U0R' );
define( 'LOGGED_IN_SALT',   'TfloeGmq_aUwEu;T4dkI:ln.=*n/U74CXK?nI&KS*}3?07y}(gUx|7cwkJPR!}/D' );
define( 'NONCE_SALT',       'a(I;pl^UJ}hG.`m;7PPCf;)w7H,=*@vo<-<a.OB!D~<V`Z8D(Ye;D0F*;DLdmzU,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'innovationindesign.org');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

