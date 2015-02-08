<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'franzomDB');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '}MFM j]J>Gket#}B&+L%!qqx8?YF*~zjfA0KFc8gqb7|2_UYd2$yj }HlR+56=cw');
define('SECURE_AUTH_KEY',  'WK%zemM@RX(%L!=Jyp,DKwZ!OTl|!}Z^+~nP)r,L;`RoxKdU=<hCvF$oWGOLzpX*');
define('LOGGED_IN_KEY',    '+O(}_v<4SoQ_ a/dhQ8~=62Lzd%yg5%^Ho>~yd;+~Q/qH6(t%k]$p>Lkx^9FTt$p');
define('NONCE_KEY',        '~py5y9n-@~9%#U3a@S(~ RcCwrA |3ah$-El!sm:F(?]m|iue1xT<%Ac=[!@,|11');
define('AUTH_SALT',        'zaKGKXYS?><bB[{|!F;/N-rPdBT^d3B!:-Qo$IZQ-O]>n$j`5X=-u@aTtB~o2H4]');
define('SECURE_AUTH_SALT', 'hCzK|Xqo^n8HtpV:XF+1T5@pFsLBTF6;&xeXRVmfDPQZKPxrE(ek(JKN%o@vFl-<');
define('LOGGED_IN_SALT',   'I9[CZDcE@wV!6`+z$fc+(S}yWCh@ S|MF[|W<r_Q<Ryi]&,C/RH{Q3cj+:Y;KZ?(');
define('NONCE_SALT',       '>@P+Jc-B/Mi^t6ClOcUL(*tx+Klb;v&/!<?yG1|w-~ #7yotwFfD9HNu<(|BF3gF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
