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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'canfactory' );

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
define( 'AUTH_KEY',         'vG?)SM %Q>|OcQu^(}|=-R}DBQ38.xw_eDr&rJjP4OiCSJb{^oG*FGQO<GeKK60!' );
define( 'SECURE_AUTH_KEY',  'eGf2JVfnNG&Uz5qp]M@*65#h(k/1Rt%OV8}O+aB-ZR$$r/>on}n{aIsYu4g1XDKd' );
define( 'LOGGED_IN_KEY',    'sx]%K+uiKC>Ep{]_1pm<6Cu!G;{2!~~B)O]wrI@_lAIgvH0v7;m+ , IB]dBMU(=' );
define( 'NONCE_KEY',        'wvWusre`wmK@_ QG$snpME}~5eDel3(Q>XtB6@Ls+IW+P5[t;nesCilqCqQ$Of:`' );
define( 'AUTH_SALT',        'Qq,1 -YXo3ZL`c-#}N:raV0`.>*U?hN&*1|9mOjSv,w7/yepDt1rS`08euh,]5d6' );
define( 'SECURE_AUTH_SALT', ']!9Z$mS5fDB}GT!~*xz(di/kj1p1{V*(}[ztvKd&P]A3rBaH95{C<QrX^*Yd):1k' );
define( 'LOGGED_IN_SALT',   'z>}z<;x71;=B)[%ck~HschB`<7T}G2H>eUL{yiu- }# PZ^W!FZ!EXB.,.9XiKxx' );
define( 'NONCE_SALT',       '~*$VF43jjn?{B{t~i#B~H?!.Ej ~JjipBGel,]W?{AE*$Icm3hf|):(D=>1Vo:pf' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
