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
define('DB_NAME', 'wp_composer');

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
define('AUTH_KEY',         '9g$6:~<6O<5n0b/*du@K8Xx2E!SC70hIp-_|6b@(#h-,?P C.ZTl8mtY|^.YP+%{');
define('SECURE_AUTH_KEY',  ',b@6]<A4`9+Z9svvLo6bdHHE`w7qmVJ.Rc{:QwZ|o=T &U7G|qxS}$_4+,^YIH`:');
define('LOGGED_IN_KEY',    'M^ar>}^8Eph+}AdA_G59:MTP=iBk[=KD{t*E5:~jc|^$W9H*L|9hSwH)NYzP$sg?');
define('NONCE_KEY',        '/$,@/0hu`5H<T?bO~TDPAw&+u?!IDQz22X0JgdM4G(EizXH={K ayE/|K+#-+cx ');
define('AUTH_SALT',        'C-L$P->*=$XC$!(?TvIeXVJB|-UAf%^jMH(7iMYX[6;gmZQgWdocS=v);%db[AGP');
define('SECURE_AUTH_SALT', 'ALB#Ux& %C`9qkl{P54%q41/n3clj|Bzg}8#zl/L-+dbk+ Uz,hOk{][}UcJ*&jD');
define('LOGGED_IN_SALT',   'VpMR)^xIH|od);4:S&%o9u)NxD[#s50QJ2(9Bzgz-%ue3G|9HEx8?RVN(C*0Y+;9');
define('NONCE_SALT',       '<V,aiGsos~bR9dX3nsHBXB^u`&;56hz$_$AW{4Gi1Wf.9|uQ*-DS^9T4qQI(0AV9');

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

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
// define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/blog/wp-content/plugins' );
// define( 'PLUGINDIR', dirname(__FILE__) . '/blog/wp-content/plugins' );
// define( 'WP_PLUGIN_URL', 'http://example/blog/wp-content/plugins' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
