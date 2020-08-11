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
define( 'DB_NAME', 'kolkhoz_db' );

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
define( 'AUTH_KEY',         '#+v&d6JAB27GeAbbEA#kB`FUU/fjxPoQBmU@*?1;Iee~w-XMQMA>h6)VAv5C|H=%' );
define( 'SECURE_AUTH_KEY',  '@GU.) |_l*oS^mlFB$k*I;-rxvD%Zdq%T^39!EFM,];&Hke/dIzS0esgZ-`wI+}m' );
define( 'LOGGED_IN_KEY',    'xFGct>{s6,t0w62k=i*|8yJ+RJZbuiWTc GpIJ>P.lkc@bh0wss~Vz%|g|e%nFDk' );
define( 'NONCE_KEY',        '=|aF_829,-NLt(^K[oQg U0%J6lr;P*G4%9?NId{z`,@s;*j|4bO@ %:u[X&k4=9' );
define( 'AUTH_SALT',        '1CHZ2/A=H A#_T}st0R@XHL1f04uGdyUxba4c=x>(0b?T7BnnsVobPr,/S`df(Qz' );
define( 'SECURE_AUTH_SALT', 'ZZeKAV/PQ;Y*eE,Xg<Yun+R%J6lbo-*2k;My6,N5?{Y|}lmO2RLPf>[[sQmZ!BSz' );
define( 'LOGGED_IN_SALT',   'cmu >B&[K% G[^QigQZT)C]r<nO]N$wCWr`a;cL4*vz~}MYOqX-80-;AcLCNc11E' );
define( 'NONCE_SALT',       '#BjrS5<K=.!V(HZ1l&N8!m~uF+GhWl36aR`cY4*Hh&3G`6T~Gt~g,M~UZA(~T7;)' );

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
