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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'G[%:dT4PKUvVpxxrmm|}!Y>,p7#Ibf.do*&9u,SEkz!c=OyK4e>u7FI`jRAwcUZ ' );
define( 'SECURE_AUTH_KEY',  'rJ478l%7[xMy?3}B,y68n)&?u[|Oby,PDK~u{-:m 6-EM-5;TV>IO>ywSjv88Vid' );
define( 'LOGGED_IN_KEY',    '7XrydnPq_,=_}ORR|q.oLg/k3Z5`zB4_+7wQgX1&q&zn@bF{|7VK~)J#o0OY*!CN' );
define( 'NONCE_KEY',        'Qa~/aMFwao{L{,#j@BT@,vtdR$v9_XUtLn1S)PpgcD>6HLLB;;#,iw~#[)z&DQj2' );
define( 'AUTH_SALT',        'zL9q.o$RfWkH;+vT$ypeOB2W|S0rj0`:Mt.^HZ!lQIB-srW~Ye$&>&HSaI1}[fZv' );
define( 'SECURE_AUTH_SALT', '|IBrqY8aPKV:s==(Wm?QmU9nKU$*OJ<mD7RILBS82W/DLrT`BDS2{L!~-+,-?!fW' );
define( 'LOGGED_IN_SALT',   '@]njX}60+o~IVzuq@6qdj1JJeMDC^ngNJ36P$Gzm91lQG=D6,wa-:l%oYC}G^{A1' );
define( 'NONCE_SALT',       'tH#od/mPxG@2g[un ^e_w5G9Cr[=e|06t+~nKHWOD$oRY2BTyx/v.rD_XwwI@5p*' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
