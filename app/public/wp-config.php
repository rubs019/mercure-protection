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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '5zpE/N#{[dRcA^5~2T31be,}@png_/=u&9@7,|h3C[397OnY,(0T#{!n|,CeS1hF' );
define( 'SECURE_AUTH_KEY',   't71U!tK,`BZ#CU~G{BiZ/@1bmJ /w)99S{`s3mu[XV8u<xJ3cd}Isi1}(Kay!ShD' );
define( 'LOGGED_IN_KEY',     '%a2%W;|}e8<^=$vXshF*NCRkRE^3{=T~aRUY%HJ-QL:wT@CZMEBUg=_;c*,iPTwK' );
define( 'NONCE_KEY',         'T>s#Qy1I$OgK*fRjwUG*%ln[ptx5XiL6nJO B9UZ1/V$f_:::}EHLF];x.I|y104' );
define( 'AUTH_SALT',         'a8NJf`ei_KL!EW,e]CSy*gAv^h/lHx&!WUUB8in$B||y2/0LAv*->`q:nzAaO`aB' );
define( 'SECURE_AUTH_SALT',  'RtH{<+Y>xI3Tau]K*nW)Iz )ilnHvz6B{=3^pR]!sZok2&[)rn!Le8],k[< /Y!?' );
define( 'LOGGED_IN_SALT',    'GMfjw@hn*^%*xnH(c$ZNwS0FYR4)J*r6bwNT,XlB>q=+e5gr?-DMSb]W2P32;ujP' );
define( 'NONCE_SALT',        '5Ut]BsK)o?^;k&tDOlnJm(I861?I5hr`9=Xj,)F4X&1feTJ/*Qy09uD>@(i-N,8t' );
define( 'WP_CACHE_KEY_SALT', 'v2L^(?=:=XG6-8TSNx($Ow]ZLt=}*W~N5y>C=I+8$*WzaKSP%w`3K*]d#%y8sl=o' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
