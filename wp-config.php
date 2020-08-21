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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'juanvasq_wp823' );
/** MySQL database username */
define( 'DB_USER', 'juanvasq_wp823' );
/** MySQL database password */
define( 'DB_PASSWORD', 'p7SM.!0893' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0ewrzfragz0phmzh9cb1kcxpwic7syalohjfnzsndjo4kglirqqzflxidbp5ztfi' );
define( 'SECURE_AUTH_KEY',  '0dk41htmoolchdscoasreug9j24z7tmd1kjz1tda07bin42rtbyckuml6qoo1jzq' );
define( 'LOGGED_IN_KEY',    'dnzqmhhlv5by7e7uominzg0hkt6t96vzxzjjy2jfknjpxzmvryhyhnr46ovzbuwe' );
define( 'NONCE_KEY',        'k8wed3huyuovpppjhdpfisqkfoz0mircmniw4jqimfewvxbkwrnlgadvjksmkfwu' );
define( 'AUTH_SALT',        'aknt3i8vpf9qyenlibxtrr8bx4tfcmthmiiicdcwchaaixrrx46mshzvkjqi2czb' );
define( 'SECURE_AUTH_SALT', 'rnu9olusj2bpjgkt4whnfvs7jauoscdhmyke4a7gnn7e1erlzf0baqfq6ivxs0uh' );
define( 'LOGGED_IN_SALT',   'nzej0vtluho8lbhspeg3mzpfb6uljvndijm4re5tqgcxacrqmdqoae820ibur1t3' );
define( 'NONCE_SALT',       'dshmolp1017qtajsgmxge7609h0sa17lpbdjaccdrhpzmnepxqzlwpiiyxszs5gz' );
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpaq_';
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
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
