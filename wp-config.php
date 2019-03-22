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
define( 'DB_NAME', 'churchillInstitution_db' );

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
define( 'AUTH_KEY',         'U?z+mj//lZ9g2z39@1V{[d8?1JQJ2qD&s2o$.a7+NvddDKQ|DI6TO4G`5|gg/Mr>' );
define( 'SECURE_AUTH_KEY',  '1#f)1K5y6IONfNxFf6u_8Tq -g8lF10uBWPe>k{)>G3Tx96lbi:-M)P_gdvvxgSR' );
define( 'LOGGED_IN_KEY',    'uWf~gRrDH CAhXI4!0^Vt0S3QuyQF52H9=^i#8`#^R KWR7dH JvzEnE|YJe8s~b' );
define( 'NONCE_KEY',        'E}w4g]ny1O#az7um29Ubm^wJyirU$p!AK=5Fj&SU+($=x^oFBY{2lKt`%C7r0=Dx' );
define( 'AUTH_SALT',        'B_#66eqQR$.Etox=S4?[qPJ{7VHTSlnFNsQ|3Sg+o#cj~`|2?br}3tL@l|wfQ:OY' );
define( 'SECURE_AUTH_SALT', 'Q]yws$q,Nfqc%(YB@qi+o0>jCF0*8R)v5@qH3pOGrVtF?=77#Y}gPzv$Mk#9Kt)Z' );
define( 'LOGGED_IN_SALT',   'pggNiZDgRk.F!R h13$Y[ArC4PmA0i$/1HWe;=mx}NN LJ`wW10|ZJPuo+U]|DD{' );
define( 'NONCE_SALT',       'Q2$7CVLvI%Pe8bQ@tAGpE]k CgoWrnyw.w<9|:8VKrAn`F>[x[HU{OTZ/}l=m*0E' );

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
