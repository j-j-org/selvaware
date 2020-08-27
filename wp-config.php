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
define( 'DB_NAME', 'testhere' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'fEnix2000' );

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
define( 'AUTH_KEY',         'rM:a3Jdr!lr5*;1}G_)*64_<e;Gf/Dn6Z8z,FkX8ZA,;X{jE&}o1Cv&AjFiJkAeR' );
define( 'SECURE_AUTH_KEY',  '{9M<YG&9 {4Nv#AmV9edp*]f#MW(`?~=|>C?h?<k[#a~z2K=;VCI/UOKmo~?K&nd' );
define( 'LOGGED_IN_KEY',    '*t<<01hnaeLp6LRu;eNknK_!weg uEs[%(sc$FU/f> ZJ+k3a&+#yh<T7]?xJv$m' );
define( 'NONCE_KEY',        'd&RvjE;D!F3z1taw;cJ[)5(r!_1:[N^Z}e&KH~/)Lb:gCbD,x%*1IT<~l}|]py|K' );
define( 'AUTH_SALT',        'l=U5Dn.3p)RIv:B)o>h2].uTS;Rx[ICU#iW>ewdQ3)66u{!;jFfNxzh:S+wIb`wP' );
define( 'SECURE_AUTH_SALT', '};?4HIs}auqM}rcnZAP1 d!h/blsSWNk(4_?Wd##GWo3PVYW-DJDde7bVD>h=n7u' );
define( 'LOGGED_IN_SALT',   '-~w`H4IZOePZ8+:8bz^gGv4Z.)[;.KU1!tTv?Y@pqUkw1lO#}1@/jVFTQVvv/F>y' );
define( 'NONCE_SALT',       'DCLq$nzn$Y`4gMM 3+iAwuMA,#f=NE%x0xCEwiMp3c9e`YL3V&rM:<m)zr2n9A<|' );

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
