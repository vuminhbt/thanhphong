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
define('DB_NAME', 'thanhphong');

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
define('AUTH_KEY',         't$sbAvC+z~9$:4.CuMjp._I0DwKi&rZ7dbp:Lngx++K^Gq^=),;G@~lIs.=2Fv(U');
define('SECURE_AUTH_KEY',  '&TzkP=~y0<d)lj$]SnCUvkl06^lvr`o H[^i~7x4~~VD:(x:kx!j7,y1FZPPn4/0');
define('LOGGED_IN_KEY',    '$UZ!TQ4LA%zTWnPI-6be,2@&5Hc1na3|PZ5D[A+j?/6rya?EwaswC8h$U<i(Q5@Q');
define('NONCE_KEY',        '@{THUOvOh[J[fsB@.nvvJ0}UpYF$`t/>X<Pu5:>vc*g(.Ya71}=Y)&.cBwW! zK[');
define('AUTH_SALT',        '$VL>n=0%1x~,tmV4*PD^cb$AcRM>ibixy]]PWnT=UW9a%DgRN;vR%xWS-}4k<Oq8');
define('SECURE_AUTH_SALT', '~%IV{;RmkJdwq{FI3XTX./(IKv)tvYW!+,t33owL%)#_$jrQv;)5y<unY1O+mqDK');
define('LOGGED_IN_SALT',   '_hcmg5I2$.E=aYp6^`uDCsrz8#2.5V#f=]Cgu^`=UxFi.s^6XBhieBd<)!{.F+9/');
define('NONCE_SALT',       '?.@EkHnY1cW4y<,0.dq}UgWMix>H A7>sOxQC4(zE!swdcp3|&c8Ck/BZN5X>14T');

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
