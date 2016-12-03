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
define('DB_NAME', 'theme_development');

/** MySQL database username */
define('DB_USER', 'sherlock');

/** MySQL database password */
define('DB_PASSWORD', 'sherlock12345');

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
define('AUTH_KEY',         '*Jn`U0POFm<p0Z)G:x(|6l/M4*,03k;ZzS~G*)CEckyKOBOI<r&b++MocEbmGbX=');
define('SECURE_AUTH_KEY',  'Xq]u(m.ZKOx`t)jhl-6iXeS`MHHa:wyA!AhrgTOEY2Ui6{]Txv*J`>=E!c#ctLeM');
define('LOGGED_IN_KEY',    '!SP1>C2tu]4TDkTP]-znTR+r{?7T0/]aDekf]Y;3th.{iu5NPuNp)T5PU46?;J(n');
define('NONCE_KEY',        ':T?9rOzH|E4$W88X6W3eBxaXfJ9+r0H0:d{|]-O0bfQg]ZVd]Ea2uW[`pdJ|V(B8');
define('AUTH_SALT',        'M&%8Y8}>^YrOA|l-ndI!N516TGI*$EcsCE8l~n |lDvKBs{MOgC=-j ]h$={n8uY');
define('SECURE_AUTH_SALT', 'aqB0l#C:[MY93?A/@nVnl{CQ,`fg_,a/llA^k>H0beb[o[ire_0K8c3G7:j)[Z>~');
define('LOGGED_IN_SALT',   '_%+nzTX;WRw[,$+zR/W38#1+nmq{U%t[fjz^,lAKp =h1my ;{rp]-7)zTo|14}G');
define('NONCE_SALT',       '.;&6dYha3S4$ou|8{5q^g26.1I3pZv-;BBIQpZkZ:6,(JaowUv~MJ^=UqWQ$#H4g');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
