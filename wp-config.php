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
define('DB_NAME', 'Stack');

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
define('AUTH_KEY',         '}?`*pdY{8vbo!`l%vm<!^v3s<qLnmxOOA$<jU<Tp2#;[Y=A[leEWVYC&wPX&3hN*');
define('SECURE_AUTH_KEY',  'YqdYxG,xb$|4z1B5[NlA<d.-Z}X:2[j_y7YtkF!:g[XYrqsX~OMd:%<#xNaBm2Y&');
define('LOGGED_IN_KEY',    ',(=REqZ:gKB]er~);XY*6Q$-FB+Fc|vo^4Bl_C|ZKaSV[pZtU;s7i{0#AM@u4`=}');
define('NONCE_KEY',        'fN&K}o<;}/uC 3=ivBzcsOTdn?+qLa8Dao6+V&FwLAc]!!Oj7]pR?yhaLe?%<lX6');
define('AUTH_SALT',        'S7PNcuY[kOyL>@#6EH5gpl= TWuWQmqo:]m?5fX+9q,]eaR*]khz.idP]8H+-6@}');
define('SECURE_AUTH_SALT', '0QM#H[XKnRbl$[t7KiuV=-(`4JE[r[oG5NWpL[WwV3`keYP`=;>^x/<0NUa5ci9g');
define('LOGGED_IN_SALT',   'r`in1=}#`_b_hCu|tNPFS&gzTW-aO5-2#wptYH|BRTs_23%]LWvxv[nC1T`ZP54K');
define('NONCE_SALT',       'j/o79T4Ok7)G{C=<l.fr4N^LL+;Mz6xTw3eS&Vk$*vR6e_K0%zD+Qq;SlO[Bqe^W');

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
