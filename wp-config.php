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
define( 'DB_NAME', 'Smart' );

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
define( 'AUTH_KEY',         'XK?daOt]zSLj@rjV@+yu@j,PEk$rR1dy&hZtbZ1M>w%F!ARHV`l%IiY,Cg5a~Vs@' );
define( 'SECURE_AUTH_KEY',  '!vRI2S/^QMT l4@>4k)l|!$T&F%8q2u}Dgr/u/`R3Zamb!`MNrp/Z;`zrwG5?BD}' );
define( 'LOGGED_IN_KEY',    ']rjPpn1LqM$1O.np8c-?rZ%knF+rpvos]n1&c_/JR9XW63Ys0Z _]/b4i}|9d]hW' );
define( 'NONCE_KEY',        'K|6=zQq.N`}G )%lI&,3jX;5xYc]9a*M`|CKt =qD?7]FdG;/Bi!>(<64%/|KTBB' );
define( 'AUTH_SALT',        'oH;J.Dp,g _-zA]8N3lje4#-3}S&5a>-0uffzCdco7E[6gF;JiKq@_f->RFB%UR^' );
define( 'SECURE_AUTH_SALT', '_},hgu_I]~7Z$#_b]J3s.D&;p7<D##gtZv1~{5qu{$--9y?> p]P0(y$,I/aq=KV' );
define( 'LOGGED_IN_SALT',   '~F8)1*SnUDhcMW7R1bc7$`kZ-ySP~UjQfDnjRUWlhHz_;kg7{(q1Ev>8Go#$y~sk' );
define( 'NONCE_SALT',       'G8GH<)cR9DV Y^x)!|1q>aKz4)|P?=>*<0wa~ 8>hL~pUOc4vie@~OnNYj,4Poq2' );

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
