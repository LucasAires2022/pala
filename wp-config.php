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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '!F_ a$]OD25L6&e9#w$khxb[-Nn71*uK-]ps(q%RQ.O(lko5T+_mE7[i_dQO#8P0' );
define( 'SECURE_AUTH_KEY',  'F?#Hvuf_I4Gh n{l`2]uPch`quO]laoKzM1}PqCcxX xAn2_V,ku,^X29b{$Hy_C' );
define( 'LOGGED_IN_KEY',    '0e!67Ja20c!*Z!3nr3ty%KJ-m@<){Mqe&(0K0@wj~Xb-b6FjDmHg*[m-Bl9pAt:_' );
define( 'NONCE_KEY',        '2!lYt<t<,_gqJ8f2Grp!p.dbTbBtrxg~hi]mLiYy;*}@M!IXG`{0@y{#S/])?}33' );
define( 'AUTH_SALT',        'gn:DqF#5uz+sj4~8-0.kkhJ~T*96-{}(u,:?_ZPm-fT2_*_Aq8j3P7-/}nSIRTY-' );
define( 'SECURE_AUTH_SALT', 'e8Qj<rm{cGw*[!gIfJap0d|[vo{VO~8njRCs_=_AvPux8I$ YoG:+f%9!tdO1l4U' );
define( 'LOGGED_IN_SALT',   'gIeuFc7wuD;RSG(1PiAPxPm]Tq4EVMcE)h1y0pcDpiv|?fcAn-BPDo]i-$Yp4:yu' );
define( 'NONCE_SALT',       'Y oZqow:e!/bX&#VV^QWQ%MRbfP1j(|Y]P*NTy_7f*J>!t>ncC4{y#OHO3{6q1{R' );

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
