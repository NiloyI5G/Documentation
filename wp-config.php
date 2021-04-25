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
define( 'DB_NAME', 'documentation_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ':L`NCK:yh^t]<QPPqTMwlc#z$z8[<;O#s4*jLfKR?S|Y<%7^1Z+688bnl v-&9*j' );
define( 'SECURE_AUTH_KEY',  'G,ei9oSu7YvH--k8 6Q^NxSud}OdAX]bwjD$~iX5==[I0aSg#hVTAW2uXBPQ!t)k' );
define( 'LOGGED_IN_KEY',    '.pRx{P(&Xu;f;AP*Bez5<wPT! N^s63#E+h,neC!^aTdoC[?cIrU/D)CEf@sH~b&' );
define( 'NONCE_KEY',        '0VLh#|!81KjnwoNuxs1Jkf-;=Moyi{|.7GfP EhpP0N4/.Efo~?w[FD$}o$Y34kw' );
define( 'AUTH_SALT',        'Qq*zus+&IBp-rU>!0[y=Xp}`g(mn0W88-FX(BZauXgYjX%a|{KdF+_4Ec?g*QdW~' );
define( 'SECURE_AUTH_SALT', ')hqVO981ekjA-h->}fnyB!55-BDvYu!E=(tKgO8r(*B0yr!]H^i%xKI.uV >w+]z' );
define( 'LOGGED_IN_SALT',   '&A#g:o_/V{$Zzugy{4A_:*)Y/-K<s{Vt2GxCg0nq}M[ r9b+JntiP&V(MYQKdT@9' );
define( 'NONCE_SALT',       'OZNw{wr^S91AP4Z<KZZ_|lTU!rcpzVL#/ca .1(vS^$,vc}sR3Q<=~OWV4}_B#B.' );

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
