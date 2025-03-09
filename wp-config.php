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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tuyendung' );

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
define( 'AUTH_KEY',         'a7jkFcudtWQ8wFL0tiidcCnxTKXKmAXaYppK0s3OCPmwzzTGAW5C1e3DPykRMzcg' );
define( 'SECURE_AUTH_KEY',  'VuKsojKsX4id9IYjlKfIHtWzL7NeQbs5LMdHaqxM9Emka1hsbyvK3c6OAwxKn1hl' );
define( 'LOGGED_IN_KEY',    '57Gey91HrHhZ7CLBFtGbpKjltRNIHVgcHW9RFxnrCFriQU1WW3CRKg4gGgXDUI1u' );
define( 'NONCE_KEY',        'SARfjQYDj8WcC7Y43J3AvpdHl7dQzqKl6KPkPj6N5MOZWp77pbBKplrO6gzOTsuI' );
define( 'AUTH_SALT',        'KKJpSPDZjRoCE3EJiNvJUOiLxDc8llyXjwUPLYbnwAcORqWwK2SAU0d5Z8qAgEKd' );
define( 'SECURE_AUTH_SALT', 'yeUpExCVch4P0wRaF3R91sc8qTCedQ27IkBjUKSIZHzuXV3Gc0QtAeBCn73Lfofr' );
define( 'LOGGED_IN_SALT',   'vROMptNUlZG2v8eJhkYoQu3L8QVflmPSbzjm3dyErAx39fvslx5JP9rW1gKUFLEO' );
define( 'NONCE_SALT',       'Hj6DXWTmSh5ogefE4sXeHC1oZJIjFijJwdr2WgArVY0zdU844SPjrz6JmrNzUbMA' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
