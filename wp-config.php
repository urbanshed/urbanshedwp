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
define('AUTH_KEY',         '-n^~N6EqQP.;N,6[Q/pYC43MZ2,IPyNj*~9B#r&`^oM1ZisLJC0F+O5+x41z*#7Z');
define('SECURE_AUTH_KEY',  'X|Gvn^mp&S]gB-^k@e98qq)vqk,fbY(TSSYM&Ak$$E0:$N90 50jz`(XC6ggsYl9');
define('LOGGED_IN_KEY',    ']2;0Vyk>-fPO/(28{XS.=Mha@l%aZT~s~W/p8K*F^(L4B@ZUC3fd0:eL`&zRk v8');
define('NONCE_KEY',        'M0s}pXC;c`N@OD!$%NNx>Zn%;ySl5^OoSW_Po08,_cKD$L7O1Xoz+2vJzZ+YTV`5');
define('AUTH_SALT',        ']6w/(|Tik:~5Kuu69Nk&}h8>:jS]H]NmzCOC$T:+[#ngUM8nOnEJNME~}?+pq$0G');
define('SECURE_AUTH_SALT', '~7|Oa7VSHKZx8APme4XpwBQlC/C;r_(yx_.9=)^fMNy7WZ(z`+ckUw>^%A0PcWOt');
define('LOGGED_IN_SALT',   'bKi1coBQLW-3n8G55zS6<(pr~IiJCMD!5Cs[ hpEwtEz!@LiU?=F46MJ6; :R5G~');
define('NONCE_SALT',       'tw!x?9u+*Ir/r<@nqW(Y2hLXTSqPQSQR%zU[ALC4ev+Qs#5 w&#CrFfy%]@Ne6?8');

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
