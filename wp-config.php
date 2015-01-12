<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test01');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Q]OZi&C~yI8KKf> hk^-S6YvlYz$WNq8Y`|8z<2=-x`]P85geJLTpL__EE~rgM+e');
define('SECURE_AUTH_KEY',  '.+pu[4,QZRT#%W}(J_/}!9{m|A1p(<_-QSaVXRG8 J8<kZwK##X7,fwy8v^r~L[9');
define('LOGGED_IN_KEY',    '2]lhYz%Safr2@G,|*+MsZSB&(o:w7$h~;)lZ>i`5uBpayhMv`PkV},9##/d=4|#B');
define('NONCE_KEY',        '5{AG&<-3fc9N@3>6^QKxF#.{[h-[hskwEo 5HGvM-$)z}N=`H;dUL*Qs Rxx-Y+K');
define('AUTH_SALT',        '~B$PJ:D7)SsGJz;OcAA~#j,-L+/&C+t.6uR.:P^J@n]A1}.oKLY] ?>=EY#XMQUJ');
define('SECURE_AUTH_SALT', '0C@(ff?X#lb7!|pta~pQF_TXRxHb 9|.R+F$U:I(TRdF{1ps.R>8A -F^&aZthku');
define('LOGGED_IN_SALT',   'EbDg~&|y-d,T72<TxP7HX{P=!]j|Eh/}nyq0F.ec`&:-Jex-/C6egx;YI(%X&mY5');
define('NONCE_SALT',       '@E+P-:*~^O0JreFl=qbTD1sOv{2<Fx!e~/zfd3L%]Wi-V$3Qj}O|*H0>Gio+TKN2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
