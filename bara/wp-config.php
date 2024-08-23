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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bara-wp' );

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
define( 'AUTH_KEY',         'Ia+3zEMd{QfBvcui}R<^t$Bjv7}bd}ffu)3=X*56`@U2i-Gi%vQt-NgCg*$HuFyP' );
define( 'SECURE_AUTH_KEY',  'R LdFF<Hp%FgW=*6;E]/KaFIr}O/FSegdPPr)bg[}pNY6PM<LpaM~JBc@uuM*Cyb' );
define( 'LOGGED_IN_KEY',    '+z_c4/Z.b H>7P4MmbTvro>$!4J[aZ<DZ5<t:DU/!@EFvI5Kk;u:11fL_O3{nr<u' );
define( 'NONCE_KEY',        '$=eA!s8m^Wz, &Q]_`|Lk2{tAM6&I7m=D<4kpal{$>]r~,_^9~zY}7i{Q}(.-e%3' );
define( 'AUTH_SALT',        '37q+lmivrWY9r8x$!g[07UP.7]/l&-@8n%Bc>#T*o Cmsj~Yy-u:Vpt}qbr},DTK' );
define( 'SECURE_AUTH_SALT', 'cQ57#lLPR1T2Q+[5N`Z^f2UQbypt92uSzf`c acP(Ay/T.hYe0]a1:0FFCZa516&' );
define( 'LOGGED_IN_SALT',   '}.[sTA)(Ax.50A(LorRcWeU{|4hz1oh|+{PO{E(q&P:%9k e)7i-fOd=.gu6Z8]h' );
define( 'NONCE_SALT',       'Jze|&aA|`vu.RQaQNS[&LUf?GYD:e )V)qoCpdg(Ow744C,$Sx=ic>}2jgYPYI=D' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
