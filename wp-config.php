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
define('DB_NAME', 'rvs');

/** MySQL database username */
define('DB_USER', 'rvs');

/** MySQL database password */
define('DB_PASSWORD', 'rvs');

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
define('AUTH_KEY',         'kU>iZ(^M%M!)kGXS,{J:RZ80c.`rRn{zDK>s(PcrC^i+^YIe+YRzek$r28:U-JJN');
define('SECURE_AUTH_KEY',  '[y0&-Pq%T#Xetuv(*j(2Z/T#?QHL/TUy^R;*??Z>7KQ|*MjZ/IW-H|$oC75Rr:F$');
define('LOGGED_IN_KEY',    'i3;:(a`q[>n~i@fc#dY`GsM=cxn3Q0[4R!bI^gXknhV~Q$O{D(_^zEW3_LWcarff');
define('NONCE_KEY',        'r&kfgs!/ACqs@CGe!(/vAQ$]JBLZnpf9xJ|os3fRl2p/=u_&}p 8;R+QcAQb|;/2');
define('AUTH_SALT',        '14c2U[Q5<jAWT9NsVJn]jdw|YwGpKJ;n_hcQLB+t=Bn?5cVX|sv|^B33@ZI*g0Dt');
define('SECURE_AUTH_SALT', '=z)2LA5H}8JsT1VOq@]es~48x%s5S+14.=*)wKHQSdF<A?1RU%J~jSmsP}2@Bt1n');
define('LOGGED_IN_SALT',   ' 3:I1/(XdYA,#q:X.X9cwt>EwzhGg?`(Kw?WBj>0nZ@8ZVdo>[rzX5vj/HvU*>jC');
define('NONCE_SALT',       ';[aDh1)`fB.3?v@k:^xMtIdu:5_!%+NM(#zEUBTH=+],K=H`vmY9<%0a9#:Pg$8B');

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
