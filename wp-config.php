<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'adva-wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'vJ%&(u-7>g9 $1ik L7n/e U6+=S{t;c6MJX9S0= i<>N.ftvk,DW}s1Z};|hf|Y');
define('SECURE_AUTH_KEY',  'uWxCP,%_&&joY55D2]fO!-F2b`8P|,{|ah^B&9ax=Lx!2=?O=wum;CF Z GV-h3W');
define('LOGGED_IN_KEY',    '>nS1rh&jz2Ok=8UAA{Mu<2Wj=2%yo*]chUsI|~6a`|)$M0uYp^y+b~8i;Wd@?) ?');
define('NONCE_KEY',        'qehO>1k0t4|hFtHN)o]-sZAXzxYq6YrFkF1V.^^#oyZ~jIykz[A`Tu)EKH)5$c>?');
define('AUTH_SALT',        'oI*=%C)@1g+`Jp[uys-+][2UEemgvK2-A)+rhfNm+r;BLPjq{6b]%apxbK=w]|vA');
define('SECURE_AUTH_SALT', 'h>3dN!@n>0x`bN_7[Lp?tcF~o~-90oOQ|6X}K1.Mw3|ijL/|_-AnGs|-=.I.qau1');
define('LOGGED_IN_SALT',   '950#(+[9rvr-Q|gR+vz(dmu6|6.#Jo-m#f4arn8%!SHCXhGH/4}|aS(99f~BQZv-');
define('NONCE_SALT',       ')X~@d`w8+-:&{.-SsXhmDsZYI:^+oczy[CIfWa3`LR3cZ;)GVts-Vp{;@~9<19Fl');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
