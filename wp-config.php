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
define('DB_NAME', 'snippets');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1');

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
define('AUTH_KEY',         'QuXd9#KJ|=]H{)4o@6!:[)P_opXN!+%_YRr:Ud|wZcO4t2n?KInMmizl@<.IYc=~');
define('SECURE_AUTH_KEY',  'frO<6D0FzXm}OYT{ioXb<C<cd*hE%Kyf+ezX_{r: aLd6d4_UPT#6itrg(uPL`;<');
define('LOGGED_IN_KEY',    ')98.S*w%H)tCDO%#4pR4b#:7a(Q {Z0LA_@+dj2l,y-]Mjk^l!)FLItvrM}[p2(c');
define('NONCE_KEY',        'vOVS6IHVK%{=p,M:Y[R?(Mp*)0UqP^{2yo)7Iv .nzBM[7$Wc&-TBsx<I+Y1GMT~');
define('AUTH_SALT',        '6Sy}f=;>Ng]zStvTH&zC39%uG8zc%`4-#-Oe+;aQ6{G07!xIw^vyP.1bU889&A4d');
define('SECURE_AUTH_SALT', '}I%49*54Wt`-gOtB{>(]UE$th}u?W5*^~Li`-Gv~h2:ed:iOt`0u=(<ArCiQxy+S');
define('LOGGED_IN_SALT',   '-e+RCecYFry<&X&Upr^7QJg.OT#fZX[UQ17 Wq2WMwS^l:_sjE*6:v}{MxY`sVRW');
define('NONCE_SALT',       ';@J5?4EYRF6-aJ.PYT-6*qxulhWav>Z.3=|r|2|nL&al[|Uc#N,tIN:<uUO[!>`!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'snippets_';

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
