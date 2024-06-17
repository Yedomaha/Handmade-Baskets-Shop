<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'handmade-baskets-shop' );

/** Database username */
define( 'DB_USER', 'yan' );

/** Database password */
define( 'DB_PASSWORD', 'yan!' );

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
define( 'AUTH_KEY',         'T9.urxYq[R5A>b,CuR:G{)&ce{@L~Z+y]qI5l-Z()1fqK#!EF*z?fEaHQctG^-DF' );
define( 'SECURE_AUTH_KEY',  'nK!Ro|gjT{G&e%hXBB/Xk!cxVd}[9BVv7m=12_<*pjO$G0*>ji}Ib|ZxZOI|_l/h' );
define( 'LOGGED_IN_KEY',    '!_M4zFhOr_Efg(11iBfc{|,5t43HQ{4Uy@bp(g5c}UBUzjd-4 y9#L`KrNSFwc6:' );
define( 'NONCE_KEY',        'm!<g:xX{=A]sDXF{Md`!sM>?zCR)pF)uE6hM09afGs_v4zVQ#Q(RHNQ;Pil>y`!X' );
define( 'AUTH_SALT',        'rmHS`{j=zCr}?y{~EpB7PcX|t0(?DFn^A[.:`]1.C9ur@a6.4O@/Rk[->.~Yh5)4' );
define( 'SECURE_AUTH_SALT', ',5 Txf2No+iB^K_u+H@1soT9>>52]KiYtCYZAVr&||Ca[0fsQ0;(+,Sx,c%k<qZw' );
define( 'LOGGED_IN_SALT',   '_GmRC=p#OFIDn>K%v<+ofUXaPg+!/C&K)4]LXJmQcAR*EVT`KW!imEo$]c;gN[@h' );
define( 'NONCE_SALT',       'Rd6Gm>g1]0]* /8qD>9>}p&5*)U|L]c!Qz&;Lvtq,eNMB$A6tk*8rwe,[R`+w_jb' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
