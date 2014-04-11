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
define('DB_NAME', 'dailygrind');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'pEryW=n 80+=0ywe.U3b|gm9WPE6@P.9y<N_vYRBWtq7JK4L7=,Qy=^wc?O$+:p/');
define('SECURE_AUTH_KEY',  's6R &j_|So_4Kov_t*N^TWERIkuvm+KshKUrkm|xpdw_,VQdLh.6P;__dK8;Kn94');
define('LOGGED_IN_KEY',    'ByL(*z!c6^:vZE5Q+2zz/FR/=+1i,93g/-~T6yBV@4;M-|[6D+Pl},G}7qgg)Nb~');
define('NONCE_KEY',        'N.a`,>[MKvt%{W9|R?]xbN|w~HosX|x.h1NWicX1R$<kit1PX&,-3H8sdT9] 1%:');
define('AUTH_SALT',        'nW]p!DYUbE5=H,W1h`,jvs|gGn1Lhk*jxc1|8&OqVj|}drRawK0V0!ZP;cn=-9I#');
define('SECURE_AUTH_SALT', 'XN^RwfO-!euCUK-4E}qo^Fl(-spWI|nT@O?e=$!dRk0$w[!7*c9|Vk!K?tHHz}WP');
define('LOGGED_IN_SALT',   '|@Z_8V5+bYu|iR(<XM@Si]Zu=pOyuZflqn/Yb:u[(Nb:#}W6=,`vvm|J~k Aymt?');
define('NONCE_SALT',       'RPml/*5=Ft+(5~/(xiU&eVo/hYLRY!:yDt,D)][$v9)8GX ~.~q%e@+DAc;<Jn[v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
