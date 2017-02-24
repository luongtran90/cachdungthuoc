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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cachdungt_data');

/** MySQL database username */
define('DB_USER', 'cachdungt_hieu');

/** MySQL database password */
define('DB_PASSWORD', 'Xuanhieu1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd3v#J:B:b+q%bo;G9pxjSvsDhS_o=(/i?q~Xkk7Ex8BadJAvdK(MWt2;rrF Ehoh');
define('SECURE_AUTH_KEY',  '#JAWyALYo1 5NTbp/+K<.x.+?xcCYc`$:eH=0nfCo6+lAJm..qc#9jVJ4gTv3UzN');
define('LOGGED_IN_KEY',    'nmcLl3#1w>;D^d2Hk8F`7Z_n(  h*=8B7_7}4ybp.:|p6JWxpu,>-gf1t|^4W1Le');
define('NONCE_KEY',        'c&v:}hDk]cR*OQ1x*#F^-|/v=9fw.2Wq*L V/x:& N?~>%br-h>[1btUlnJ+1%8L');
define('AUTH_SALT',        '_R`Txz/6)}-2Jy:$n+;Ae(^2W27eBK/%Y$,kYbc?>=Af)ndEtzb%(pw=Z7_{}z(X');
define('SECURE_AUTH_SALT', '_1Ft![Aumbc%fyiBc)v+++0n8du-1p_%ccGFn)?8X?$?7~G2&AK/g*>#T?$t^@G-');
define('LOGGED_IN_SALT',   ':01WhcCJoeJCzt3D&mklzrjs#Y`CU%2u00|6H@*!tQ~_!t[>$<{XL4Mip<i[H:k)');
define('NONCE_SALT',       '>I<$` ;6kY>*+&<<NG#cdKsDm>%-F*B2 _pj2CJV#Bq[$|,ab#6Np01f`VY,2Y0y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
