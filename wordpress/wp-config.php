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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '<your-password>' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'elrm(oTfy`S>I1C9sU=`OWz@Mfm3&i|)-2Q[+8gsk0n[FQ&`e):BCqn~yI~&V<|G');
define('SECURE_AUTH_KEY',  'x6fGE:#ytc~C3HUwaieNHORR>wvE-1|ti;!VuDAOjiQ+1)w/Qr0e?IVoKi8[*5d:');
define('LOGGED_IN_KEY',    'H+T}v%&F~^>,sDJA|cLHLn3pDMH+*kbmbO|6^H>~zU| $_P_#rU$_ ;x/6{$x[Up');
define('NONCE_KEY',        '@&ory^R 9]N^Ju7n8He5.C@}]S|lV#nQ0DG//-95-Y1X`z|M~`@TzV|E<%^UNU.-');
define('AUTH_SALT',        '-y xd]JP0kn:>H5-Bj^Hk5::iC%7|,gB7a~8qDJP=0{]VyVZW+/BP>H<IJ#B(U&g');
define('SECURE_AUTH_SALT', 'B>.y}M7od`y`Z9MKG,;DuT tqK8bqIe]x-[1?B+g8 vUBv*?ON(i~ Dorv|=^r4T');
define('LOGGED_IN_SALT',   ']eeZ>b%~J6=rPud68u0&?KQ|]|X ,5v-O9-i-3sF?e3 Nnxi4saUD%8jXagQAm#g');
define('NONCE_SALT',       'n{rNEG;(HFe<r/H`Z(QxtxceN),mozXSA;NaPLAU}>{^FUsl?&h~9X?></UFXOk*');
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
