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
define('DB_NAME', 'websfr');

/** MySQL database username */
define('DB_USER', 'chunbi');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'aRE{^IT`SMJywa<@4<fHf-&6|!R Yi^uX+%2pJ.,^~fWo}<X(0SO*W2S+jyhom4=');
define('SECURE_AUTH_KEY',  '%o<(Y/iD{/G95BqI;pG,gS0HNM@z(w3JQ~e~xQnLG:(1tt)g;_t!YV# fxJwX/=N');
define('LOGGED_IN_KEY',    'A>pIT$1,=mx.?chipaQ#DR!>uy:%LX^B^<)5@Bof/[OJ6~0CL!]jGMs%|Rw8cV@*');
define('NONCE_KEY',        'F!Mhz7?37pIyB>o+7]_70mM_N{!f*8iK[0md)ll5$]?+vo4({V2VzMzkJ^LCCiMz');
define('AUTH_SALT',        'WoVSKg:a+zMt!?Tu)u=A$uf|_T!5.Z<llSM8Nb}Ju zN!J*kbnm-jdPkac3q9w0M');
define('SECURE_AUTH_SALT', '50T?rgQ[4N,@VO3yC~YU* }-HZMig[GWGwD#HkgkG{Bau2F}yR(t8SuQV$YS+S,+');
define('LOGGED_IN_SALT',   'MC}@#Sn0P#Pe0#H7px>=yY<xZis6z&Rkt`NoTUMz%H?jhO^o!S7XSY.i~|*mup/h');
define('NONCE_SALT',       '>!BW+U&2@G[Xg]xK9G/$C]y/TXsjlMbIF(qfXEVfC^C;o<7bF!Q(qZ! |Q)1nB(G');

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
