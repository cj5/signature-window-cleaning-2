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
define('DB_NAME', 'signature');

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
define('AUTH_KEY',         '5~$-_rhuuX|h2o,ZK3eoWlK5i@,KDQaVlJP#Z;?914c0%R&vD9#tR]itD6av-iv)');
define('SECURE_AUTH_KEY',  'X(KT+lO._;@0MdLN(gG#>X[|R)9jU9 .XLkPt`Ct*]oItIHx?k6NfniMf/&Ni8+V');
define('LOGGED_IN_KEY',    'D{3(^!P4}ldH6Z>&{#Es-r:^T|yy2AeVbq|szv{i91Af`,biuN&M8!EsVKT1Tg[}');
define('NONCE_KEY',        '{G&9q$XT:*V[BUEf!gN3J ,pbU*g_6[q1;Enss-Orj<cZa:wFLy1lFI}eUG@<z.9');
define('AUTH_SALT',        '2gugK[Z~yzg;n9fd0/AtOX]rkO=R7Y;Fc!@N<f&yKG$HC{_9;Rq<^H4!E:~%U[pN');
define('SECURE_AUTH_SALT', 'z$&7s%Jk;KC{)|K-dl[REd[BwbM9J]S4K@?qgbmGgn1IKi{WW&:q)idNV(Sj+9L[');
define('LOGGED_IN_SALT',   '8!P16HFBji7qfrO/b,}iNH40Pw(E$8hWoGT6Z%!N^=/1/l#j5q}#=PFTxn_9Llf}');
define('NONCE_SALT',       'frFsR}BW i6(OCnW|IQh^|v1IKNY XgHpmFt=lWgQV$$q3N^CNh-MmyR:u31+~$$');

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
