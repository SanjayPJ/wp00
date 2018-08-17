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
define('DB_NAME', 'db2');

/** MySQL database username */
define('DB_USER', 'db00');

/** MySQL database password */
define('DB_PASSWORD', 'uzL2NVEscNaSlcxh');

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
define('AUTH_KEY',         'd-EMHXzkxVfMRyyWuhv@AlP<p8ojE.))*i*rM?`&+iom~]/?b28_]<t5oHMItV8+');
define('SECURE_AUTH_KEY',  ',{I H%cB1qITdmS-d}1R^vd=(wvbN/-{@PrQuvTaXD)-Arr{}8=4@#IQv;B7$( s');
define('LOGGED_IN_KEY',    'Ve5(_|F{v;P:=J.bg4y0E$a{y;28tX9LR8C+T1j|(OnLm_u[Drw{ygwmuP;CJ({o');
define('NONCE_KEY',        'hb_]RQU@^KU+hQn>N!;Po6k5|;k/%H?YF0qi0&p>i#<m1=,t6A2463AT#19Ox4^W');
define('AUTH_SALT',        'op*.vo>HE`4v9jj1W<3>-%LSa-ZS9Fh(ek;ot-&1(eTjqnmjA<kJS-KE>KzZBX(E');
define('SECURE_AUTH_SALT', '8a2(|/`oe-3%]<`)E<o[rA#{8-4,+lsYn>8?qh+7ahhm-^mk:D^&_kFCO54:G46C');
define('LOGGED_IN_SALT',   'LFOgP=sESsluYD=<JL#QLquqO$;%`{(wm$ngNU/48 .Y>.2TR4&H^[|R,;U!ZYSA');
define('NONCE_SALT',       '^~*5fbEked1ShnARdK^ns*mMZ/WaVJDqDGfEBRae;$:~S4~]!uy*q5Ih$s?V3?pk');

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
