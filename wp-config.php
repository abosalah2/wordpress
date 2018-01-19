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
define('DB_NAME', 'myDataBase');

/** MySQL database username */
define('DB_USER', 'abosalah');

/** MySQL database password */
define('DB_PASSWORD', 'Abosalah0');

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
define('AUTH_KEY',         ';TbypJE$vb<:wI}9S2*GT<N}~Y8O//-/6pALa[wXXmE?/(=Kc{Pv6<&hj(Q$oF/_');
define('SECURE_AUTH_KEY',  '<ZNKvCT81;siie%Hy XYSmqbybIl#9`oqQC-(,ZS!;7Lyr+`];pX[$Dw_k?=CwNG');
define('LOGGED_IN_KEY',    'yHj]4m^8<..j?#W[rJzi3%!JV.wk+fSc|^0qdMDt+=o[C~y@bxQ9@Yt`( +9,0JA');
define('NONCE_KEY',        'bvV3SY1Dz]$Uwi5~n|)6*?r<==>hY^CN)D`[U/|;5Ne~Hm]b(Y]`T=[?h;$=c-u:');
define('AUTH_SALT',        'LnZ!M> -mDZ%bp+%4&2zfH:TWL7i&sr1C%R~aOI0,_e`twG`ufJT#sXvBhsm@geD');
define('SECURE_AUTH_SALT', 'J6eP-HZa0p(8&p0xDU%^lKRbx@&dXNz`wbg<OHZJmX}04bL|Tfm@s%^rrf:Q$mq:');
define('LOGGED_IN_SALT',   'j;8A1US:Ivgxd@i0/G-*?7-,V-g$)B8uty%G(mBuqO4#x=s2~N(dP5BkVpjt_N*&');
define('NONCE_SALT',       '2a[/}SFL1a$}#fg<DgO> :KgH`07Gp_Q@kILEy]OUFBZnEY^H4ea(XIA@&Ku>?8#');

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
