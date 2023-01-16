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
define( 'DB_NAME', 'bestneurologist' );

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
define( 'AUTH_KEY',         'Tf4(A*O,)J90nx[nj5,Sxp$Ot3[!6{ICD6KK*8il%}p#B!xfHta,s2L%GnqQ86I,' );
define( 'SECURE_AUTH_KEY',  '~)E]~`*u!,4;Li/*+]?d%{1~V2;-0w7P]V1=4S@9|j]0ly1n#NQ&mQt%[qHtLYoP' );
define( 'LOGGED_IN_KEY',    ';-{$^`5cVea2U3zBjP^$XGG5uYf)MR)RH5)#vAo{:sU.G}9kGg*RY]u]0$RJ^@78' );
define( 'NONCE_KEY',        'NOS^[ **X)%i1e30wLeLFR:19N1Tj=6rffu!H15K0Y)[3%FYZlSZ[k`ih;!(RJi[' );
define( 'AUTH_SALT',        '.#T_bOoIbv6V^/GLsEcbRMw43&h>@9D8l:ODb>|]bEc GW<x9Tny#S5YZS<4JsH]' );
define( 'SECURE_AUTH_SALT', 'WUXo32MyVZn0Td: l[E,q!kJIP-y5 RFPx}S?Su/q2Iq(~s7[qR-M_`i^16_=mHJ' );
define( 'LOGGED_IN_SALT',   '{IAm<_kL+^/LKbr#g>`%@Zx%eX[rtP%fsz^.SrZ[k8^mnVU099}^(nN8`!,:>K@u' );
define( 'NONCE_SALT',       '{pjQR(BH*e2QuC]%DJHr6[ehA8.4e*v<l} /i|DqZsDxQ:-D9JHt}f(U?|qCSpfE' );

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
