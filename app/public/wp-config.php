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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4+S4w6QnvC81mcK5hmB2yQTtAdXtXuJYZNoPWRfHNQEzNSw2BmZnc5Z2sao/lwqhOrHFd94jpszoBgZHJiV6Jw==');
define('SECURE_AUTH_KEY',  'ltIzPSQRyI7mBFqy9rZOfrotUjQZOgPFBUYR71s39/CSqIl7EHYfpHMnXUmZrCCXTARAxomwClS41RiAQO4T5w==');
define('LOGGED_IN_KEY',    'pIwXoigGxI4XKD2WR/NO5X5GHUmvRL8oMJM73qVb7aKrmzR+R2HKqr96QDfsrJFmz0FtYD6V5cXsLwF7bgaxXw==');
define('NONCE_KEY',        'qZjPTzaa6UEHiwKsh3fO/+6drsABel7PWdqvvKiuPfPccBuTBecG47USxnYzERk948copNE2O5+4r3+L4MMc9A==');
define('AUTH_SALT',        'HhqK0qeBlYKfmTYu6PIu9NinButkV5MyxHmDFvaRZ3+bSD/W2/Qgeluq6syCPILGv8quvoNlzQRHb11n2kNEgA==');
define('SECURE_AUTH_SALT', 'qL+WkVpQTCzSmfZFDVNwXBgBHzxmsGNcQknOtkN+WnO1MaC6ZGfl1gLlNNC6Zkuk3i7/IIxN48/8qGRhYsnYcQ==');
define('LOGGED_IN_SALT',   'wn484m+EDb0c9Lc2pPw96OHmR/k008E6qWzgWlVCGmURGCT6CDvd3/7ZggcrAOZwdctExXHs4iJw+mZxWXlqeg==');
define('NONCE_SALT',       'gqA5tMrSSm05Z5PetKeZMDKGvJtH4gtmU77l/bqp/SqF8Jo7EQQrzeC9K6nJyeFTCgf89wn7btIeZEqAIdGqJQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
