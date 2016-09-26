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
define('DB_NAME', 'wp_ylailma');

/** MySQL database username */
define('DB_USER', 'wp_ylailma');

/** MySQL database password */
define('DB_PASSWORD', 'yotuzdnnkwl5cbcpsydvi');

/** MySQL hostname */
define('DB_HOST', 'mysql5013.dollarwp.com');

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
define('AUTH_KEY',         '(5s;_A$eLk,4Yt&-YG}FnyVBE~oQII_BDSLk+fkh,!rrM5[b2_Sp%*ehJzsbNqFH');
define('SECURE_AUTH_KEY',  '[/Sm{kad^SssGm)UMG=5,{0snN$qV/#]UhX,DZ5yTeTmM]@OwH:S7P3c@ICe,WC$');
define('LOGGED_IN_KEY',    'inyO:wYJAB/[YWZ;IF Xu(stO?Q<?Lb^FR/5>/fWb<kW*ir3|v3wM_VCXEwb]!+I');
define('NONCE_KEY',        'b>n;SNj4d]{/ROzQ%]B(.Yyb/p3q;jkjw1!H]V;*?q=d;{.Gi=!^)[,f{_-k>5T[');
define('AUTH_SALT',        '!?#85@ln*W}:-bMjjIrvM)O5gT.%wDyU<S+S9[nq%hb >AwB2zXhdTt#s:8{RJ#7');
define('SECURE_AUTH_SALT', 'qE~U=okWClHA++*/y+H(sY[aFlGBGh@_l.|2?j5}8I%^vE4DrUx52{IvR9-6MU0M');
define('LOGGED_IN_SALT',   '4+OJT%WR$^$e.j7WqT_n[0am}{eKbjO-zmbF4*UwqB-l(a)uF[#ik!ST|B7j|#qY');
define('NONCE_SALT',       'UkQiZiL,t_o`zYS;x0~qb5`;J9~0m@}+9Mff=+Z2iyAY%8|2*Uyky3(^!JO0mQea');

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
