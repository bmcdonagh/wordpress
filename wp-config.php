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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'rqSy<g4(&b 0quruTaZHm:EsXD.g8$6ZRJP--xM/kDI6_hdqB 5e Zo#x17wZ=q(');
define('SECURE_AUTH_KEY',  'C_*`*hPUW(WPs*gc^TK:.ca||c{~]2i=YNnsq(8%AzbJae1ii,=j$L5%[WK{^e:G');
define('LOGGED_IN_KEY',    '?8)u!j,Z4t=HTA GIQTx7`b%rT;qc<]B44+p45VAH7rI=9}t2,q2kRAV1R A}^U,');
define('NONCE_KEY',        'u<q?pF]u6}bf@0m;*}<h)wM[;#?A|-=<})OO7L[G_:>LaGEs^05/6Fds7I_s}|RD');
define('AUTH_SALT',        'g)tO,0-|}{RH+KF8cy*)TI8H>`#68f~t.#tU/Pe?l{x_/UlC9dP)d$vnWSWU{.cF');
define('SECURE_AUTH_SALT', '}ZXgdW5oN<0^HrH,;_a#hC=<~ie:g[*F3fO4Px6BN#oPXdr~_dn`S{x8gxh[ykte');
define('LOGGED_IN_SALT',   '5M|,yU;H<ulBE5Z94ewD*[[(}a[Z,<@ko{b.I;um#m|I6[qjq0tYa}E1%dBEyDoX');
define('NONCE_SALT',       'Ds7YsPnjDZ]2l[a1Vn%=[3J&kfen9Wh%-t^wDlYf@z5Ls/B#]D4YA]%D7R^e~R$.');

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
