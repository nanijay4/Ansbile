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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         '|<PTk4go~CX;|)3|n3)/{q#2,.~$MBIGoGK&u{^#/K#{z~aMArZmZ4BYNv0]mN4<');
define('SECURE_AUTH_KEY',  '1z9Vt1&7I{RE)57NS8%GFt7hDJ@BL*@J845%4{KMFh=z?OJa^$P|i0!p:+)ug -)');
define('LOGGED_IN_KEY',    'VucNN|)05/ZR:&[i FciYyB-n>E-d PM>q>!vfZ$5$s]p,GhPCnG`5tc4!v+!)AN');
define('NONCE_KEY',        '%D,lew]W v|yh;cs{]+c-1~T*t,QFlhI]1E~1?7`UNIF5_~&d1vWRJxcG`cJm(lP');
define('AUTH_SALT',        'WLRt.N^{ 96*EJL_FdtK::u3SP.^$q{s%:5=}#_!foh J2$BB72F<yj-J?^(5}hV');
define('SECURE_AUTH_SALT', 'x/W61,=8EC]1kaNf=+n=}+E%xI,m~1+Q7_^E)H&T(ZzwDYvv*xj%6DSd_T65q1b4');
define('LOGGED_IN_SALT',   'B.RoY{/t}W==+|SIDPwu5I_q<:{7#~#C,`$VNpfTQ5<f;i>) -k!26epD0UL^4m(');
define('NONCE_SALT',       '23<yt pHh<nZ{?!h.ow*i##:Y^C@QjOzR<.bis&)}X&#N<VYi~()(<um(6`E+$]N');

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
