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
define( 'DB_NAME', 'xamp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '/p(]RfN402[Nf?QjWaeNvOXYT~o,);I=W/0D4+p[jLnDNvub*]4X2J?6c/s]*<AP' );
define( 'SECURE_AUTH_KEY',  'vLU8n7Udle44;Sa!k+Anlld{o{X;89*u~K=|fM(+ cbc}>@9c:rD$(G:_`3|)?#4' );
define( 'LOGGED_IN_KEY',    '`J;)ltSr<!x35[hvhk8t_K&xi/^L{55]vyM,pM/u=TZvR]YhhRUE4L}*>K#rYlj0' );
define( 'NONCE_KEY',        'Wm@q31~e+:m8}:YR=lR1_#|Fe,DhHO0%yE8?kMLt*Ik~|]oVeSi*PNdju% avxFt' );
define( 'AUTH_SALT',        'vQEDWwo+6J&lI{0N3j @d^V_zDn0PJ ,$v*&wmdM |6JvGhgBI&eK^_-FzWIPVD+' );
define( 'SECURE_AUTH_SALT', '6tR{[aA&trcUq0+x!HPD>U^gjHw!/;oB2nT[#X;ep~H=McB!aG($c@+Jky@qAk{w' );
define( 'LOGGED_IN_SALT',   'Tx,NbTBP(h@7+bUu.CEQ%$+?(/thdpbSy_@Tj[IA5FWYJ0>eUXqf` emF~-u!OPv' );
define( 'NONCE_SALT',       '=$u;g^(Oo40k(/.)%c/bYSh>,qT07_<by<KJ1(tqPp!9@n@<1K8[l0>ifW]n7wR&' );

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
