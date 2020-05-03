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
define( 'DB_NAME', 'woocommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'q;|ZCYjxB_A!?@@D0rmyJeY`,v|l=6wb$B&zFup*dyN#!X-) &ejM;ZXe0~fE![I');
define('SECURE_AUTH_KEY',  ' b[;U (:3)mpRb aj=Y*;bhcu)i);v(Fie-GtEQ3tf4|TlD.PLQU=|wjZ4oWmgdg');
define('LOGGED_IN_KEY',    'K{e[BIf2a*Sp-gA_}_ei&Y,J-~?F`2T,0s-MOF,`9r?_#|_[:B2(},p?#^L&iF;-');
define('NONCE_KEY',        'N10^,KKB.&-EOmx)cRUb0ehpQPyOF!LExJjO[~%:M3#9kk9m.|V ;W25Y_ouvwD?');
define('AUTH_SALT',        '@W9Yi7(nuVD|)]u#}b`N_s-Kn-3^y8bKq@<F<jIFZZ2rE^dX@sR@r^Q`Ew:sj =7');
define('SECURE_AUTH_SALT', 'jC.@@.S!r73zqixtYg89uMNt8C<InvmSCvB.f.TGO4wKJ :sU3>QQJ<Q?W`T5TPc');
define('LOGGED_IN_SALT',   'lke6Bf%AN56 }g&B$]9/<~R)6n5`+XME|PS>>!#aV})-}P~cSDVsls:^{@yM/8w+');
define('NONCE_SALT',       'wE>k:I($loeYe$,]wY$0Ai;zNgvrm| .>zQsz%lsF*fh<B1A!LkW|,G]P27^aF+_');

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
