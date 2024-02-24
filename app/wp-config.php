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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'Testpassword@123' );

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
define( 'AUTH_KEY',         'x_^&[(#$hFh&WX-OHG,oxo}BFc~1vGCJB{*1QDAdv?5?5H;@%hNP#6n0@xAV$(c~' );
define( 'SECURE_AUTH_KEY',  '$u1,{*t59ia;HHx~J5d;o/qT0&5)`?T+G@J*g/[ed/.9X3tEnl5o:XL33i$g812T' );
define( 'LOGGED_IN_KEY',    'euPc[Yf7e,CeGZ3,jkgnsP$fr=Aq:Xp3j?FW~,B%>d cnn-=?3FESeg .4qSkZf-' );
define( 'NONCE_KEY',        '~9nM:-fSlc*J{1%z6/4I u&$`F ;jHOPMn#TvEV9MK(s|=i+C:5r93SZ04g0rd]6' );
define( 'AUTH_SALT',        '*zz<|dtE*EM5)Jg&=on68)%3p/2F0pTn;uGFE].z~WB7]cb=)GP,s|Dj|]$ MAlt' );
define( 'SECURE_AUTH_SALT', 'oK(0*R@G]!T_]9/Mgnxr{Cl]E=Yrnrv}?:2ez*t#*PAG`u2l)3o`s?qGkBdV@Bix' );
define( 'LOGGED_IN_SALT',   'Y,+]D@NN2#NY=X=3cid]!p,TB&AN2!{+_ 6b,:n515|6AE4>0ZO|0PZQzK(Fu#3~' );
define( 'NONCE_SALT',       '}2,o5E]*mW^wspB-,J0N$-:3r^]`t)lHCa+|8 Q,eN4ob+NM<bSVWW$6]gn*?#(i' );

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
