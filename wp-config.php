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
define( 'DB_NAME', 'zora0052_wp604' );

/** Database username */
define( 'DB_USER', 'zora0052_wp604' );

/** Database password */
define( 'DB_PASSWORD', 'a2p!0Sj6!H' );

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
define( 'AUTH_KEY',         'txrqcpxshby8d4ixoa3sip54xxvmta5ofp3fo6xr8k4p1jbxjoo2o9j1xjm9mqxm' );
define( 'SECURE_AUTH_KEY',  '0sweycmaqa9xyn6n4mr6pmnz8oi5pqnpxakxarqcgvp4koxmx2cpzgyjsn6egtww' );
define( 'LOGGED_IN_KEY',    'y2viuvbcrtqd5ettsydml5y524uceqpcu42nghmitlzsazks5poaozwlhtk3jljl' );
define( 'NONCE_KEY',        'ca41kwmtn4w0mlggm4ffsliz5erercbzhskb9ndmmlxv6zhkbfepeawtf69oykzz' );
define( 'AUTH_SALT',        'ednw1ch5okr4eonoyr7akzdewpchms7tvhrayjrlgsk9mu1wmu1sx5bxaojfcfxw' );
define( 'SECURE_AUTH_SALT', 'pijzjlkwvbkscdoabawnyykctim7x5ynpdxrhdt4tw31uyxn2qfu2balzklpavb9' );
define( 'LOGGED_IN_SALT',   '9smyjjcsyvq3mpge52yjurkfm1mk1bxquciobalwoevwj2nh5dnlo0wyspgxmz7k' );
define( 'NONCE_SALT',       '75f9z6lvl9wipshf6ocbgbjyvw9pix2owvwfw5d56kzvcd70zet4npcjzvhtpiwp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpxj_';

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
