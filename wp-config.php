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
define('DB_NAME', 'jdkDB93nti');

/** MySQL database username */
define('DB_USER', 'jdkDB93nti');

/** MySQL database password */
define('DB_PASSWORD', '4fTI6znAzo');

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
define('AUTH_KEY',         '<SVd[k||:d4ksszo!CBJ#;a5itp+-_O]KKd~Z#:15q.PXXeiq6xDLLTSa#i;5n^v');
define('SECURE_AUTH_KEY',  '7:DhWhZ~s1:ONV!g:4x**ATHPPW.e]259DHxS~#7jEv$$,yEMMTTb<i66E![V4co');
define('LOGGED_IN_KEY',    '-:VOshsk[!C4Z*A2XPa*x6]PHxp]_Hj,,{b7jrq{m6AAIIP*b<Rsk[!F8cUzr@rB3');
define('NONCE_KEY',        'sfX$qq6EELLT*a<22A@,R}YNU^c}33BBIvQr,yEGs--_wCKKVRd|k088Z4goLTS');
define('AUTH_SALT',        'x#;Hn@F>7NgJYn@Ujz}>7MFUjQfuybq,38hwdsw[s5K:CVZCRg-cs!@}CR4Jcs26');
define('SECURE_AUTH_SALT', 'Z{2LbET+et<6*;DH]9PeHWm*+]9#5Lav,3I{FUjfy>qu,3$ET6MbqTi{u.2MRVk-');
define('LOGGED_IN_SALT',   'Z-w[9O1GVlCRhwZo~1-[8N0Go;EXeHTu.mx#62+]9L9PapSOap]t~;D9~:Oefvr$}');
define('NONCE_SALT',       'QMbq$fuq^{*APM{AbqPebm+e*;A6co@}!0FRN0BRgUkv,!jz>3$7JYU7IYzYnjy,');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
