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
define( 'DB_NAME', 'cursowordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '?4OiQ<Zu1Ij.Aw{A;fTi>7yn-(Ds`z`4l<.:9pW**;ewE)<#7cl?F1xKK{!bA{=B' );
define( 'SECURE_AUTH_KEY',  'h4:`V( Sma}sc*~#8[FyT1Zv#9nTXzYgGW,2D*V!0*G%Z^.Lo.hQ#aV`B.PWV1*4' );
define( 'LOGGED_IN_KEY',    'Bhf>fnGO?V%!a*~CM txE &xS?W0(vAM`Vic4(Lz1oH|6?O6-klqKX+*(!=-Mnf:' );
define( 'NONCE_KEY',        'D&#wwN}*6ZlB6YK#`tK-Ds+dP8V]?tORuxdurCAG[v^X8,!FQE4BxDBI1 NpGX=2' );
define( 'AUTH_SALT',        'az~Vvn2pcrF4Bgi5HR  ,a7)R!{a)Zd;c<w6Gs|=t3`/^H)b0Z=*n]KSK<4?liE:' );
define( 'SECURE_AUTH_SALT', 'K254i|+SSvxG#{:-~p)3L!pj$agOT., Js4fK*Z/m_)^J%|;(H_pK^tj[q0JL5I1' );
define( 'LOGGED_IN_SALT',   ')}!xbh#CHzw@Xjcnpb[<cLdYe:YpHv=/xL0xl`Z`VTT>>547MnaH|D?G$<F%I7Bi' );
define( 'NONCE_SALT',       '7`Bp#EZVG{^{autS1Bky{kLD9:Gs3w&g/jm(VR;z{8d[w0 p_H=5TEflN*[*>eNN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'cev_';

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
