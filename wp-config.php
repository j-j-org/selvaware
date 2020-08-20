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
define( 'DB_NAME', 'juanvasq_wp115' );

/** MySQL database username */
define( 'DB_USER', 'juanvasq_wp115' );

/** MySQL database password */
define( 'DB_PASSWORD', '956!Vr)p6S' );

/** MySQL hostname */
define( 'DB_HOST', '50.87.146.219' );

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
define( 'AUTH_KEY',         '1c@Cjg#6=z[<A?8Uvn!LFre&J-p&{wjE5>-5jY<lwLxCYzZd#><]E~[f_W)?;;3!' );
define( 'SECURE_AUTH_KEY',  'rI>!iqN7+mjIN<Ljd^^$-lmW#S%W?.f[gK+n.@4P{=+Qez8@zPTy!0grG-@so.)+' );
define( 'LOGGED_IN_KEY',    '/}<*:@V{K[pVrI*LycD5U5mdZM=ZP?O_h(W4)duU~`MY`={efsiO6Lk5/|7P6O|/' );
define( 'NONCE_KEY',        'FA`!<>m3zj<ub!|g<N+dfN7vZyPjx{#J[+g2ax6Y gA#Dk6QF==94;3>|,9}wP(v' );
define( 'AUTH_SALT',        'D[:f>yp;/q2:?9:>%<(EEv){4h)lzfxoPX)${=+D5G_0Ghdm>f^i@yz~h/P!FG,$' );
define( 'SECURE_AUTH_SALT', '8SyCZVZtXq(>8[zK/1uK}677o,)Cv~2(c)X;J}Z;Wke%rQ?Aap$!Zm.Kz{B?0mJi' );
define( 'LOGGED_IN_SALT',   '+Z#{_q/7{2.8{Sa`YdCx!Mdx:?K{#]we$pnx03Z:`8[sp~[N6vQGHlPk VDYyx;O' );
define( 'NONCE_SALT',       'O&w)-,u@k!~V2R1zD;qjKddEebyxJ>W/VS;?(j;-iCLnmqR|x;5i|53d,OLS^EpT' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
