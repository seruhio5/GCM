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
define('AUTH_KEY',         '55?thgvXjf^1>eY,&8Ilg},U$SH]dCICGyy]bGfI4=M%6&> 6S]Pe?HAX57WZxe9');
define('SECURE_AUTH_KEY',  '0ww:0QkWg1Ki:JLP?M=5tKk3B5$nYw6o0Qu`A~o9`*@!v)Jux(KKiNt~vrrFeAhD');
define('LOGGED_IN_KEY',    '1f4StLb]:e~}1Ai(^kg2-][be[8B8qE@Zi8UM{-#bFPE*S7Koa8a~&grnz=n;HKa');
define('NONCE_KEY',        'NBMqaorW6lpfH/(7p,&ZLl ;x@6cIA$r0C.U:VmKpvaKLro2*DpqB0w6vB6glH4r');
define('AUTH_SALT',        ',A<D^dk1t*[g%BK2+N@=t7)`MHs.;P*6mEa^5;YG<4B~#V~@Q.].#?6r8OADiHOQ');
define('SECURE_AUTH_SALT', 'x@oKBW#WE7KpAex /*JDzTe(;A;~~FT>[dh)andyud%S2#3vv)8H3szOP,n#p+E-');
define('LOGGED_IN_SALT',   '16E !Xh]giS?XxH)oi~zC_&agh.ioZG;J^)tvuwkFiR{i}IL5!Ta?eO4=y`)Rxux');
define('NONCE_SALT',       '37.j!cIyzV8{@>LC-k4Ie^U:mDcZk_0)4I#p2+lh^m*l4FE55M9f|@p{IAR>n`p`');

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
