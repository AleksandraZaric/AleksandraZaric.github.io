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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Goldene-Naht-test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'iHkMoHWHSt8ZJGTTWX82rlZzF5QyLhmyiZineqh1jeqr9ADzIZ3P5eRyoVsoBzFK' );
define( 'SECURE_AUTH_KEY',  'aRcVXHB4SdzoMBzAc2AaQK5DSBPPxbaawMoTb6nAL4Ph5CtY3PjFz3DOhMjaXLVe' );
define( 'LOGGED_IN_KEY',    'lKyxKsIMGvnHSI7xy9Sa1VcSp8DnlDiOFS13q5eva1LxPO3KKZk32RfhL8xyd4GT' );
define( 'NONCE_KEY',        'mucNxZBrewd28KtnEdokrJoP7Yx2S66PJyBBGn8Pya7WubeVLT64TSqY3iFY4Jvq' );
define( 'AUTH_SALT',        'lpvYWRFUJSFKBxCAjTm8KFYWDGE6Yjc9oKZFyJN3XZVLKNxYQWcASxUi44aCcGWj' );
define( 'SECURE_AUTH_SALT', 'qOPnxGf1ocjgo1sGjMZ2telBFN8Sp0kBioZgCT5AlSijgHuoKxgyzhtHO7xDoNx7' );
define( 'LOGGED_IN_SALT',   'Pwzt8YgcA7RJSED1OK0CFwAPnhnto28kkS22CshmLkTzWfb12EOgoEUE2t6xs01a' );
define( 'NONCE_SALT',       '55BdH34lvHsevcDd5Fxm9sTMf5Ka7TArhX4dEkvxbZSXwYv1Bu7AFcUO1Fyv7Sx6' );

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
