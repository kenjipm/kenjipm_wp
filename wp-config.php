<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'u5516006_wp9' );

/** MySQL database username */
define( 'DB_USER', 'u5516006_wp9' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p4P.S7P4D!' );

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
define( 'AUTH_KEY',         'eofvko2yvef4yleb9iqnfrvzitq0av1tz6p3qked3gheqpf3oyob0z3iuvvajy5s' );
define( 'SECURE_AUTH_KEY',  'nkvluigm3gvuw9vcnezp7e3bxsca3yuzs83gcp4dnfymqeodglnyp2tero7chdx4' );
define( 'LOGGED_IN_KEY',    'yopsb7pugmmulcm82xh4bi7p1pmn5adm3t68e1miwhhh0rtlydtqo6vdl30jvtit' );
define( 'NONCE_KEY',        'vmho67ib0anxwrbf80uzkxq20spndgnmmbdur3f6goaofwslhnci0ajshzaf1pou' );
define( 'AUTH_SALT',        'gmnq37pm4ae93ogor23rd2cfwgrfqkdz0xoagd44n86k3bm7ncybqst1yv6mxglj' );
define( 'SECURE_AUTH_SALT', 'lds46nvy4utqbzdb7bht9x1ffokbm2suooizogd4jneeadh1fxccixsgglff2sp6' );
define( 'LOGGED_IN_SALT',   'q5jwwgnhg2fuqo1oumud4s6o92r56qomku3iikmq0odbwkfr8m5ubps3drl7q3cr' );
define( 'NONCE_SALT',       'z9pqzb98kec3zxoviatjeefz8hfwor8couoar6qhmxnkg4osobcaz4zn8i8zgtwu' );

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
