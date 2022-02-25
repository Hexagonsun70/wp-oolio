<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-oolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'kS4DkIlwXLdbGKy5rUGcmFr3AUygzyP52ZpCC1hKNBCVmTOnWO5ugd2cOYZXtSle' );
define( 'SECURE_AUTH_KEY',  'SJv5TezLpWJD2uTwcUBEikDy85IKOrXp8VsXBgr8dQO38hUAU0QzEoUUfvEPYQKq' );
define( 'LOGGED_IN_KEY',    'AbJDIi3kqoEZzjV8NVA7gpVX0xOBOR5b4K2mUaoeArWJC1kyxy9PqMc45mAmWiHF' );
define( 'NONCE_KEY',        '5PzGJOBq5fObIBkle6IZdm7m25roDQvT7a0asuZvWxqqdnCHC2SLNDFJ0cal7FXw' );
define( 'AUTH_SALT',        'EXrXWhH0S5aabzrr2tuYBW4kn1qWPrXLo3TvbDa9iHtP43xcw3y8VzcsZkCIjenf' );
define( 'SECURE_AUTH_SALT', 'mpFvKlaITw6xIot4CutqA1lJptwNPR5wlRrVvx8fFiBwyLYa0rPnGYuBNbyfhFku' );
define( 'LOGGED_IN_SALT',   'fQWtXhGxdUmtTxUoUWM7rkbgrMi8ytbELAdqb6e633RDz5ERqX1uVxUS6DcwmsCv' );
define( 'NONCE_SALT',       'jpVO0sqqPAAoUMvQsqRD21X5jLYlx8DpfK2wQjjwryIBEdI0nHpYIUMVAfWKSQPE' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
