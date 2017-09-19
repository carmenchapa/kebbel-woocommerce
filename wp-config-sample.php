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
define('DB_USER', 'kebbel');

/** MySQL database password */
define('DB_PASSWORD', 'jorgekebbel');

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
define('AUTH_KEY',         'l?3||WeFG#6$[wr+;mkt_X7sQs:v,*`+atdt:~6^nFKA5%0X2]jn8k?t?A8|5E3g');
define('SECURE_AUTH_KEY',  'Mp_&[+`y|x*9j5iC-({aejY{FxMqyO+H`;evajHvwTIVf#!~w+DwbT 22p-0AuJt');
define('LOGGED_IN_KEY',    '^`8`*gwc>p] 2bNYr+aS:tJg4Dx)v|F}{EY.`^We)ZncV6.E3!L]{N)&v#!oFR+H');
define('NONCE_KEY',        'tRB_Po^<.T-uD5;&v7|w%~nhpn;-czFo 9y${<Q?Wn&^acl@Y-%ZVA.#&RYG-ABF');
define('AUTH_SALT',        'eq@o{l;hi}}D6K]&D9)MmkjS|omF)d:h|NZX+m)coRz%>]~yx`HB#=8n2=^#DC-t');
define('SECURE_AUTH_SALT', '1G|pto|4::3z[}pdIZn0N}j~,T+QLL`b5`;W`0~n]u#<-52wV(Bb<R3A2mY/WWKH');
define('LOGGED_IN_SALT',   'JB:2:Q4ikts.z|<.<|C@W,qsm0.O=V]-dmcf/I#6pzQ@0NY17[u)-?E{< ]*<UrE');
define('NONCE_SALT',       '~|UcdIN}4ox6id4}m?gR?nUwizwf3y5-S/j|;_l90~nN>XN8-vYow z5k__*NzS!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'kebbel_';

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
