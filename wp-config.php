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
define('DB_NAME', 'fit3157');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ')$o0IZXaCel4j^Ho749JX>@kT{l|~4rWl{H[>{8T5|scoT<I$IY]p|k,q=@5Bl0J');
define('SECURE_AUTH_KEY',  '75ZG9(d@*?+RVj>GagWsE;TO9gaw-`=C_o/%MI@L#`]spVb=n9KSyEvhSEw.[(&,');
define('LOGGED_IN_KEY',    'pLP|dXW1SOZ0e-t8S{>bcyG<+@}]v9)62u.A >#zb4PUanjv2Nc1cSIM%J2TR,W@');
define('NONCE_KEY',        '?{%%K4_A=/n|Og3iidIrqUGL .poyq|Y*8ue/S=j.bX39r+KyeAz#p{,I{+1bQqc');
define('AUTH_SALT',        'Tr.k`tRUe%J=b:gZ{|0]-6eyuq5N<O-rq[i;^Dyk|ydC)P$h4FIaVh|#bB_lwU?W');
define('SECURE_AUTH_SALT', '/CrZjx_ch`B],4%2%wf*guC+9{qZ3Cd&b`f{D|]%.dq!qx6(nGDp6D}0 ,!Oq_i-');
define('LOGGED_IN_SALT',   '={A~:;j1{u~IsYU3?PIn!qaw*aSB585~hDaVw%CD,k0Zt-MTvVl 3]+Di{<CB#bt');
define('NONCE_SALT',       'LL&,`d$_4p!0wZQ3HeNPHMA;zo&eNtINQuwN(09{:@5H$MRJV,T cCdPR+fNQt^`');

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
