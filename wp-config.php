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
define('DB_NAME', 'tech');

/** MySQL database username */
define('DB_USER', 'tech');

/** MySQL database password */
define('DB_PASSWORD', 'admin123');

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
define('AUTH_KEY',         'jhuhzi1zfyvjkybvdohkaevsflkimjq2uwr40h1e4ltm7nkjiwbeyhlfexzowb8b');
define('SECURE_AUTH_KEY',  'qv04wjdqzyhwc6epsypoxaylyadqlkuwyuzrbluezptkrkwpbfsdugymh4wefryl');
define('LOGGED_IN_KEY',    '4nia7tkurd1fcwqgdcekluz2fgm9jxksapmf1mjatezhiuo1ayxhlegsulyhvph4');
define('NONCE_KEY',        'loi2zet3fed9ifnac6syvuyjel1xrhblvptjsshykc43rwo6owi9wbsyf1nk1v0o');
define('AUTH_SALT',        'yrtch0vdwve98arm9zcyucpqwgts2yb0xnafo9mqfzswkau0jslntqg6bstsw8qj');
define('SECURE_AUTH_SALT', 'ujksfxhawklsqn6lysbkpu5wgcdvwlwku02paycvdv82akfmkjkvffd3xh3eku0h');
define('LOGGED_IN_SALT',   'y2p4tgv3v0s4v5tkxa98nxxleiewjljoo1aarrnknjvkdbsyf30f8w5iuhsg4wyy');
define('NONCE_SALT',       'pqq0ljx62r8e8qlilmisqcyqw0u5yclpborwsmkkvlnfsozcffkrt1sspz6lliyz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tech';

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
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
