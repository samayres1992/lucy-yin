<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '03sayre1');

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
define('AUTH_KEY',         '1gprzsXj@Zx%^s+] UO0?Rk|@X1-PU$VKEq,]PkI#CZ$/wJh2z=an6t#E~tX.0`S');
define('SECURE_AUTH_KEY',  '-I3)Ev(9.a48?wwvCCz.3v9*Ld,6Y>>T3BpCUR+K>1FrY7|X6c~gl.=uY3!1Di_B');
define('LOGGED_IN_KEY',    'T6w4 !Rn[VV-edhWB>e||GznTg0H+/IYQbi2+{oi@yjsL+8MS~rkNg|cG+JsV~SB');
define('NONCE_KEY',        'rDw|!(briuJ67#}N G;{dv|(<k).N(H7bFz^V]QzLD/f-}#7BN9JB-NcG)kdv|+B');
define('AUTH_SALT',        '~EecKCA#&/u|qV1>3,jq[Bj066+@w||.vJ+fL[3S:<q`M?uZ%9 6&NFJXvR,vq5[');
define('SECURE_AUTH_SALT', '^qy`eR9]m|Mh^B^ZSC|Y@;~Hn}A[8n|tk6^vX2,oX+&Ut~aBqU{O)EPmI rh`y4G');
define('LOGGED_IN_SALT',   '7bA]:0U.&w:|,&t>)[!u6E0NXc~UR/kQ=]/({.MT/}[z(9O1+#o@0a*2`SQ%%dIG');
define('NONCE_SALT',       'D,M&if+lA;x;CXmVe15pZ.cNM8R|3r<ApAg-+QCrH$>K%{>2f{cXzm@S7,>~]s-k');

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
