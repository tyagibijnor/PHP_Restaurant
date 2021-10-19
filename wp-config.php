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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_restaurant' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Kuhu@123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

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
define( 'AUTH_KEY',         'p K:[-[]QL;=n<pJu9Sm+yivb7hD/89Z,RB[?{vkvHAO|GxLp+3t9V}aG/Z6=Bf[' );
define( 'SECURE_AUTH_KEY',  '}%xL?.B-,P4Jz5mm{9:p,G4r4Q0R%#vvbr?6PRnZuKuzvP,pqUfDalT4iSgTjd]&' );
define( 'LOGGED_IN_KEY',    '/6Vl,qun8.SheF*bg<Cpi3~4:v=^PW[d1VstTWfdKa&;lU28)oLc=mG%AZmKHBgK' );
define( 'NONCE_KEY',        'jw=cRRQFyFh!g)A5Z%+[7Y0$g:*M-@oCd3N]p/hS2!fd++/m#|:_zFyoSenb }hH' );
define( 'AUTH_SALT',        '2/G$>2mfbMhwN/NT,(4<s)~zJ.OmYun](X/G.m1KYlCq:;~G|iTSLjps>@]C<c!r' );
define( 'SECURE_AUTH_SALT', 'e9[>k4$k)>8@j7xKOmM7yY,j>GKWJD-^D;3wJYr#.o*Z~_[M:5gbG@[sWy6hBzLx' );
define( 'LOGGED_IN_SALT',   '%tXj|gxfMW%KXvB g}4g08@Y;UY[FC[UPx_~AH =*9Ezy+q}T:>7r`dR)i;%~O..' );
define( 'NONCE_SALT',       'ZG?r4,T2EYh.kFdaF3)Ag2Jyaj.S[M%6oN:,@NNgbs,B$1[&I.[`fk<:<MLXo)cT' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rs_';

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

