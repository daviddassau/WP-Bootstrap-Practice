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
define('DB_NAME', 'WP-Bootstrap-Practice');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'yXI~2_ERt)YH.xBe*V3FTx;!a@u=m8`&}Cf+?b((a@s@ w5BvQO3XR]x8aHv1 ^j');
define('SECURE_AUTH_KEY',  'Xaw-!V4:^}V^lI?AFSE>y?QBA|hyP]d+(]BpKEWe8aF$6BJ8(JRU6-h%=N}=$?ve');
define('LOGGED_IN_KEY',    '= *ghj|;4cyGq`O1G6R>]yJGVlV8(7x/aUBP&yBEa?J&8/(G{*tJ~;OMFywVT+ui');
define('NONCE_KEY',        't@=M=yVlpUpr)P~!(g/`6QYQ*Gp94Lw^#L)?b0,_p6}sL$D(x[d$t<1frLquNC[T');
define('AUTH_SALT',        'h&aguwH3fBN/vMUPbo79s_W|)B5`xr2ZaE|/S2ye`%UfbDC,8YOqu|tT=n_w++6N');
define('SECURE_AUTH_SALT', 'T V$JN@eTT?m5x3}Ji;19~d%Bmea3cdh|adu-H%XhAf0w(`SboZ5HOz_5CzGC5+/');
define('LOGGED_IN_SALT',   '}lu|}3nP$Wa>q5n=^{QTgXX7Up|Mk+/g>eAz06sd9.F4!jSvi`pM3>,#HBmK15Cn');
define('NONCE_SALT',       '|MqY5aoSm{HSkA6>s)Vvm_epQtXtJA4+f)@Gaw!C^jm`~ GpaZhU`j6Zm/>xymMO');

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
