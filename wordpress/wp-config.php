<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'gcm');

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
define('AUTH_KEY',         'R#x[UO8!9fe70M.J>vC^SIh8leG~1b(5X4z)JM&p~d}]1&6II4{wy2PGK,GAo+;e');
define('SECURE_AUTH_KEY',  'w>6j_YtfGyl9@o7INfIzG*_N?T(c>X;Jh6byvaw:9@Hp]1d.wj/q3}:+?fMaD(l<');
define('LOGGED_IN_KEY',    ',bjMS6C;?YkSSjU)uF!k!k#*:>tp@*~xY!F1bt4eJNz7L^uCU#f=W3lvWumwTobn');
define('NONCE_KEY',        'q}+IKCk) =}x-Ll;xS:RhdPD5G248R}~^X&gpaVp}S-8[M[GVKXrHR7h#RjyHNB.');
define('AUTH_SALT',        'i?R&^.etsWF}X3lm33S07[(Dp,a^(ZA9EK2OY2)i_UcWf6J@M?N9szK$;8Xt,Aq>');
define('SECURE_AUTH_SALT', 'SNJ#3XyjZr/3Jy9j)`roub@D)M-O!,X)*Jiv[CcGzJsy*XY[eE&cWL5986za#2C-');
define('LOGGED_IN_SALT',   'hFSjqT.&ajs6!k+OT(>dH=#2r%lBd%i$$1( 3]?;zd6zC!qB h+>MnEusko3.;nK');
define('NONCE_SALT',       '?2F].l.nb96:>5$m61sn22&l<lHX5qQf`(gRj2+B;]3.R)J.yKO5XEvo?HM.B,vS');

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
