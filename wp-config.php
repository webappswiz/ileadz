<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'webappsw_ileadz');

/** MySQL database username */
define('DB_USER', 'webappsw_ileadz');

/** MySQL database password */
define('DB_PASSWORD', 'cLD7Gb.nhr4a');

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
define('AUTH_KEY',         ';^hPTUBMda{z8%GJ5j8WK /G0!NqmM lO <P;+*9<PB7gWyyCG.|O(;qAPKVXUwu');
define('SECURE_AUTH_KEY',  '4nmi:8|d@a5{(`g^UOaiGD>8&|Tt@QzmVl4X[ ^[!=7NcZ!M]Af4;-,U]OZx+2 7');
define('LOGGED_IN_KEY',    'tI%qzP80H4+/tO-[Il v%5t3]3D<_B|OXqkHY2u=INvB`_+fv}Fy_:4s;~4=p?x~');
define('NONCE_KEY',        'a}9*->+HWC>yj[(3ktp+5]p+Y+haq-D4vG4zT/*?eRFX@ ;26WmBZk-C}NZ$udzC');
define('AUTH_SALT',        'j*fkMyG#lP<2Ano-bn[)eMKs4`6RR/&}pHbtFq-vfYD.eD#>^Va3{}}Ei %8w|;H');
define('SECURE_AUTH_SALT', 'U2,.oU ts2<?lZW:=btOXZ:Xo~L_L{L4xj=d1GF_AVK{glG|y?Nx}4R(8aJ2vPON');
define('LOGGED_IN_SALT',   'o3Vhje%_^h7[,Jsd9sdzS*FDUjzbqR-ry@}`M~x+41W9F-}dp|X+:z6m|I1xYcgc');
define('NONCE_SALT',       '@-fG|>?u|9uh]~?wWl6EVUm-q _4f|I$3VU751l$-cbX3lq1z5?t`&S+GMQsR+>?');

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
