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
define( 'DB_NAME', 'electrichunter' );

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
define( 'AUTH_KEY',         'n=bvLJ2g$M74kV. vq 27cu#L|I`zfZ99#yxJF`6{Z,0 q|5Z;[tdHO:3Fb?]S+G' );
define( 'SECURE_AUTH_KEY',  'X`c+il.UL6EgL=H7{a-{G-0zZUn9NA>te@m!y5&k@$a,%n =i1Sger;)?Z23XcsH' );
define( 'LOGGED_IN_KEY',    'Ct_H`{J$%$&S`qEFzE2mz}$UU5l%MYdWK-~~?DIo@.#Do{z=u0IInSrL8Nzhm#3:' );
define( 'NONCE_KEY',        ' 41{0Ckzy7<PuMov{:Gl]5@&ka/7-K/}q]J}~1CY?Nrp9yP*rUhez7H*-+sn99]q' );
define( 'AUTH_SALT',        'LY-oq0!JkI,v9kLC_O%_W_QkTayR[5&_<aq,LPB#aN9RoCgl9-=2VUx;Kfu:sSN.' );
define( 'SECURE_AUTH_SALT', 'JAB,{{)V>ddj.TxrK^2&%1eAD!bwg0h^L7ZwC[1HehbP?.R(XzszAeI{PuI3`[BM' );
define( 'LOGGED_IN_SALT',   '.6auVo~uHF.<)l7:GvQhI,~n#)1xuEj*2+QH92#rme.xQ|TlpU]M|dlF_OqqKS5z' );
define( 'NONCE_SALT',       'n8xMmaH&8[}Tx9MTDWGG4G;59/W~BD(z*wh#U4WBgEv{1>db4(^NW|yL?rjz2MTU' );

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
