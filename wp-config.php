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
define('DB_NAME', 'kebbel');

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
define('AUTH_KEY',         'ScaO(2}D[A>-h5HsJ-q 3Y8%Hg3C&,W,9*?4+S*klQ)|^zk4ZNHZGJ8t&;B`Z>T;');
define('SECURE_AUTH_KEY',  'FZQYCDLpa;xR!]RDZZQcb>H8D>c8pjY;/MJ=<xI]b01],+~|y]4 ^|Nn.MGY}LMV');
define('LOGGED_IN_KEY',    'I`.y[txb&`EC4?%|,}wE|wqa_TPGvYS5b~3ybTf%C<AbqW~A9VtaznlZ=VNc@y2+');
define('NONCE_KEY',        'K66rq(THcRi?Kk^rUj}6W4HuQ(/%S?M%=unCMU5i}2f+[|_n0k-4ep5u*:S`g$t?');
define('AUTH_SALT',        '6sL0k_|[q=aw)!w)KHYxZIe_cyFHg^R{v#~Sk7jIYL<;2qvVN&b#ym<g/7 TT57`');
define('SECURE_AUTH_SALT', '`I=>||Ml?@Se+_5:q?YoaND=*(ApAj1e1FR1NjdScTU{RRH*=M_RAxQ0XC)p!u,U');
define('LOGGED_IN_SALT',   'lDFs}:9=/6L],7|VG}!#$QDNT h&EJHb2))aM)ffoG!}zd`}(3R)FT!8d#!9ky P');
define('NONCE_SALT',       'baQ@S5.g+RN7RgMeFrZ vg<}?t(qsS+vHtIp~*btV=bee9vKjC/ID:1u/dReE,6o');

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
