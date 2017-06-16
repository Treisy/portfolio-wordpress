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
define('DB_NAME', 'portfolio-wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'zSe7upWIv_MqfSvzt6L&Pn@kZ:Wsp-(VEi7Q(V(0GOK,_N?RuDXo3|vp[Ms:Py,:');
define('SECURE_AUTH_KEY',  '14L*FMRf*-J}yFRGjjlHD4|m09<xv@JwjWMVGtf=j&([^s,s,H+^Py?f7Q 79]?5');
define('LOGGED_IN_KEY',    '[j)eWnH&,`zLc$#d8LrGEw!5vr1187J$$1Bcd3-hEkn31q3#w/K.bTbi4t$!J^b}');
define('NONCE_KEY',        'cA>($vY07]AA[(4H_.R{0beX%%ykV~xA%wwtG2Z~$YmHzy?{po&fBR@c8[!66WyV');
define('AUTH_SALT',        '>6DWFJkI;HfCV>)D*$xn.|wIL2qFc6J)`^JSQR/;)p5~jLKQlA(56VIe0QX1T9u9');
define('SECURE_AUTH_SALT', 'KQ7u*<>[x(YXq#}!|^8T2L3_8rVxpy9j1G$ErgZ0LgL.(i6^2BoHj%#0}t 1{VrS');
define('LOGGED_IN_SALT',   'bzDbdtb{pP&qv&>arzeS<?:lOSg^XvM {3*i}A~b~0/0enIK)lNG];l@7x-c%ZI2');
define('NONCE_SALT',       '<wugd8/%Y^JF,nS}TY+!opS&{0txNjY-;1rQbu(P!&hd]0lNX`3fF]^W3YvtFarM');

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

//define('FORCE_SSL_ADMIN', true);
////
//define('WP_HOME','http://portfolio-treisy-jimenez-vega.herokuapp.com');
//define('WP_SITEURL','http://portfolio-treisy-jimenez-vega.herokuapp.com');
