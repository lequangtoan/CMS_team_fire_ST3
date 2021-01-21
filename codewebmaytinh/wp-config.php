<?php
define('WP_HOME','http://localhost/codewebmaytinh');
define('WP_SITEURL','http://localhost/codewebmaytinh');
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
define('DB_NAME', 'csdl_maytinh');

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
define('AUTH_KEY',         '^hcxQdB+dD|i5I.[2yptPlMeUv=s, ,,]Zf hHE;4NI:*v@&|Vlpf4a_G=+>BOOi');
define('SECURE_AUTH_KEY',  '$4AiM]X,{c,;b,9|N1$SM8Qwwcj*aj?-ZIQoWs`E4[)pn^XS%,vkcUtO1:~($)QN');
define('LOGGED_IN_KEY',    'rPP5>CH;?xxEj[iN+.%4J?gmJk?X7:cK$Y (9]+vSA&V9#o0`$K:j,<-L#!>X4vp');
define('NONCE_KEY',        '^HuhvI05Kb0i~5D.JLO:vjaeXgj;#E4!b,#d=3v.fV^W4-*MwZ.6yv.[EQ-5qx9[');
define('AUTH_SALT',        'fm%`:A7:v5&k!(W1Y3lRJH#RNdTvTZ[i.k}E$gAu#l g?sWcu^OJKBdcD_Ja=zJZ');
define('SECURE_AUTH_SALT', 'R|Y<>Jr<ve${uGpJMwY44B8=<kS7G%O}qkg{JrxKt^=l8J>Lq|6AiSY2K7km9P4;');
define('LOGGED_IN_SALT',   'N~nhP/3;*nmAMREGxc^~mmz5.7F_@p:qKjMLf6`RAAAT-Gu<^uIV39>dT5U)<baD');
define('NONCE_SALT',       '}q.Lm~aCk3`_XJY8q5~2hJ,iPH3I,Au[ETQS8lp3zWT.be7ph`6^&M]Dw$U1A:Xw');

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
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
// const JETPACK_DEV_DEBUG = TRUE;
define('WP_POST_REVISIONS', 3);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

