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
define( 'DB_NAME', 'documentation' );

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
define( 'AUTH_KEY',         'yy4WbGu8Pw(r<7vGS[8rBY7dt1&fJhC,HA0iG/AY=(5]4[MYd,$5_Ekd^cResH/;' );
define( 'SECURE_AUTH_KEY',  'Xf!JQM 3#9%|{qOaHHqMFWx#}r+.?u~Rz1ynM](g+V>Mb}Sg=&K(Mncbl6[W$ROG' );
define( 'LOGGED_IN_KEY',    '6MsC]sW3!Yx0{ZjO20f[F}}P^8h;t28O2-UzKCgdWh6T&Azvb0K7RWb$#*C[<@9K' );
define( 'NONCE_KEY',        'R(2.}A0?[RNKXl):U.45Vw]HaDFxppz94Ee:!vdS<:Kd]Ff+xki@2 PTuH+7NjuI' );
define( 'AUTH_SALT',        'Vf1Xj?9>PL13& Pt~pvVR}&j#v-ha;1G%?X%QTl3{Yo8z0kThNh@LF .]3OT7WS-' );
define( 'SECURE_AUTH_SALT', 'S7W{A;q9TSaC%<MBY`hB{x:]UfT<C4.0Q_/pM?I.S[CDITus.-2X|/8FG+0M174]' );
define( 'LOGGED_IN_SALT',   'tB|u^S-TYhYiB|a&]fPjHaD85*{2]!qVu%#_J%J&I*S[D!jn`?ORfQc.-LcE&Vx#' );
define( 'NONCE_SALT',       'f])dk5]g*<z]/^E,eCmY:AAj;gI+=&le(,eCTZH-%Yfn.sv){38X^k6oR-.ahH$E' );

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
