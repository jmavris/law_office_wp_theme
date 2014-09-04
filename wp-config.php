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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'jmavris');

/** MySQL database password */
define('DB_PASSWORD', 'Ramones1977');

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
define('AUTH_KEY',         'Ldz|8.S&CSo +OclAL6wPf50|)!xlQkC}BI*#*ZCqz=,8J}2+HLg(I$,idl|HH8G');
define('SECURE_AUTH_KEY',  'J[&M&])ACJXT6{P0|B1(pZkHU?E [{o,/;~P`-fYR:Kx&(4:$g*sXCg;M,y3hY<_');
define('LOGGED_IN_KEY',    '/;v+cnc+v:$m hH:=/ba9%JPpV-+zs8Y?_e+_;6~K/Wtc/X|1v*J9)D+uo*V<!C(');
define('NONCE_KEY',        'ei,mDW<ouW!tJA$*.ejDZtoJ_T;x8H*`WxP|z~  *;/4~*1Q^gU.]Ehd<dGXdV/A');
define('AUTH_SALT',        '-R R`NgOrm~@/kg07/TK$%GXDKJso66] {9r_~IXlbl?^nNV-eY|N3A2$V/=rK!R');
define('SECURE_AUTH_SALT', ':z+W/&A?+H]5Qn_e]V;GSlh{uWWS%U=5L/H*3H-xR$*8Gb6v`K%JXohV4KoOQ*{D');
define('LOGGED_IN_SALT',   ';6 J*te8O{<_6IM`EZ-M]QnXav]0iSC|KIiA]yFI~w+$B--njn(Bn%{W`1-ivT)T');
define('NONCE_SALT',       'Y+zvnU3~.=3J}k[b+7z]?i7%uI0k4neA|-k`nM+Q{N<o],)GR9f0(^2x6Cn,vk20');

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
