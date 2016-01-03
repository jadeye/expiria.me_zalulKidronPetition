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
define('DB_NAME', 'expiria.netdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'xxx');

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
define('AUTH_KEY',         'NT63~|;)cma2;XV:KRiK^EXb=R>#lUF*|$.<wqXd1O*T}}AhW;9kZD5x.r>7[h.^');
define('SECURE_AUTH_KEY',  '(%ca{G8{lI{3p>E@MykV-f<DU+WT{,fRT08hF}A6j%m|~a^B<ptw%Gxv{KMgo!5B');
define('LOGGED_IN_KEY',    'D]3>iIjz7yqtzC_2^3#g;^k66:&12bbjcs)h3Ed1S%eC#6=xlEv&.p6@;Dk^UA9s');
define('NONCE_KEY',        '#[{eH}T4#t)~ZgcovzojE@j50jMP4=y[_S-Wb0Bz]Q16|h|kbISU+SPkyG&sW*jx');
define('AUTH_SALT',        ':]R|fs]T|/+]Ov0n6E0pUgt0$VLwx/Jna-[qx_jf|P%ct !a[sl&vjSwRX8n<fy9');
define('SECURE_AUTH_SALT', 'xLfq-W=8GLk4zi+T(ju&]l><8l|_ZycI:Q8S!w_<yWXAXB%{/Xs&jTaQ!8+O|D@I');
define('LOGGED_IN_SALT',   '76QE^jB*k(W]A|26H1-4;/rm?;+U_H7Z`byg2gG8r<sNJ6@k3c!;ys-}BcbH$$;R');
define('NONCE_SALT',       'g+(`dn<Y.CS+hOaN!idV=;0}kuxt b.rh=h++Yk%:.DkLsWV2pEVOH$@q}c7O0n;');

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

define ('WPLANG', 'he_IL');
