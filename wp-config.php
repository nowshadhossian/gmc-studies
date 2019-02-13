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
define('DB_NAME', 'gmc-studies');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'a');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '=:{G|~<i9cdpV=$h8$Uc/m}:ZI*1sDivn%.]ec~)L!;;fa{LLr,x={3lp=Hq1dU!');
define('SECURE_AUTH_KEY',  ')+QC4vYkPWi%1z,XJAU dP|r,h .bt*Y$s;>:>,d44cY`$kW-aIWT=n+Pzsy`.pn');
define('LOGGED_IN_KEY',    'fi(a!D=#`no#{>>#FA*U/~.?W[O4~|)rFJM,hJY=kV+IP6Ug:%>`+U<`r #=`f^v');
define('NONCE_KEY',        '.aU|KHSm`:39/H<L8$rGd7C[,VKJ_xIIm9Rz@C)ug/A3<HhM GH]Pv8k&)*H{&,g');
define('AUTH_SALT',        '3Xv]U7?;w;bE6!Vr<ajYS<Vuq+_QYF?(O=va5H4;*$;KP)_v C/0LE5H8h8sT_dj');
define('SECURE_AUTH_SALT', 'oy)d`Eao5Yy,QSBXxq!2xlAP6HDck6tIqNBx].vK2v#|i?YPQ#WcPd/rK v(L=,|');
define('LOGGED_IN_SALT',   'i&*[$a{: zl*joXsZ&F%Kg/Va`YFW*%FU&-IViIv<k5&a3U36yo7gw0XsJegX]1y');
define('NONCE_SALT',       'P}G4IEKxS5G(pgr1?HYMjRT-qv=tQ <uuF2~h@Yr@&Q^tBEg3^B#e-.rIyN]>t,T');

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
