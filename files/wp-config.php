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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         'pLq[AtRD*/&/$y1&%3NDH<d*~18pRp7`CGm{ni-CvLq{_:dX@EQ%U3</DLCCa%1{' );
define( 'SECURE_AUTH_KEY',  '!qBlB}56bX(>*LJ/IW<u*6COj]rs_``&r&GKULPF:r8a%B.k)XH!x<Qyy}|5+|))' );
define( 'LOGGED_IN_KEY',    'OnVD`uIJ%Dp$p>*#%Azjl4V$t?e_<7Pc?l1Fg Gf;=E5YwygP123Yx@/W|)OdP%e' );
define( 'NONCE_KEY',        'N4@PW+,yb^)F61.MILpL+ivB^16DqEPoLaDB6P41sU:dV2$Kq,c4]>&,KxJe$O|W' );
define( 'AUTH_SALT',        '`fpoo@:-%)vre[[)E0>`}]fMz<fwqa8#B@K|W6R28)Se=VTb w?(oGIG<9w`(f?X' );
define( 'SECURE_AUTH_SALT', 'hs_wIgZ]VrTy9eB^m_IoR<9svt!HS_4l)37-I3TX(XtG:^cQE[[D6Ae19!UI&!wv' );
define( 'LOGGED_IN_SALT',   '(F~%:YYG1pBW(QUXm4b=/%UI=xsdbwo7&MFRR3`==I@2qD{gf0nk8(vF3#gVp#jD' );
define( 'NONCE_SALT',       ')soY?!X$l0D@&i%9U N.$;c^6h;8gRp* 6R$6>=r>>$]wxfIp8:[GK7.ZPrD9-@X' );

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
