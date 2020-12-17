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
define( 'DB_NAME', 'chatbot' );

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
define( 'AUTH_KEY',         '3SN%.Aj=?s:B4 ~BB4Us4HjEBib0e2>m[YZ)1#h^xP3&%%|5G -Su},vjO5KP*cQ' );
define( 'SECURE_AUTH_KEY',  '4.w7D)Eh~r$P>{iL.-NMv!XX0C z/-iXB+uy3%{waqX~ SjP[I)YQ(F F]a-d7]?' );
define( 'LOGGED_IN_KEY',    '- rDoTv,lG1&.H/mjG_jU;v*`C ivof6qmGY3kuZzIR]!B`*0,m-ve1igr=.k|vW' );
define( 'NONCE_KEY',        '~vn{X%32:3-i);842<`A->3mt_iy2,rx[}RFhy A_;z0c^4DX^DQhUp5}qqrDH^M' );
define( 'AUTH_SALT',        'J6/A5Z90`ma`a#Ox ?(@SI; TNmzdSK^gnh]N.&UzIH;t4VKAbo)%dnNX6l}g+C7' );
define( 'SECURE_AUTH_SALT', '#aA,+ snS7KLwFNtLNW85Fbo+L>JaM]}=61:nlDNshaKaLh@JJiK=^k1baDbIil)' );
define( 'LOGGED_IN_SALT',   'cB4Cf<?._NZ<mvOFm0}~=Yx=()5]20S4h# C4+wIYpcv)z#4K^JS.BykU)]`e54W' );
define( 'NONCE_SALT',       ') $9l!7o7twhhbOP;h9zf}mK#ni?cyXL&@=?m@la44tJVz|.Gt]umDWKr=]M4UP-' );

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
