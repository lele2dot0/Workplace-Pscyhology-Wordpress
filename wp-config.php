<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'workpsy' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '5uMm!t3ch@' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x|?cV+_0+#!R8#=sBoqX&}ZX(MUX1WQF~IVZR)#X?Nj!e`W;N:,;D5-ckgy-J9i5');
define('SECURE_AUTH_KEY',  'HP>Ku|((&|mM}Kb0$41rWC2BKJAD=f--MJDI}7|yr4LnHVy;X pt,P,&Q8IOFZ9q');
define('LOGGED_IN_KEY',    '4fE.i4lWn8CrcWd-T.+A/Xhk(HqX6_<bac%K31ukB*px*hq;A$9^[[I$@TzXPr=r');
define('NONCE_KEY',        '.L%-5=zLlAln|ytzB9VausIe8m7<kWv--B%HtC<3}s[TR:g]`WM|_wqjI^#Z}` D');
define('AUTH_SALT',        'I8:Qoi%tXk%u<7-|fK7y3 asxUPK6UU3unT$?|-R/`Tl}L|09 DE89e5,;%CiF;G');
define('SECURE_AUTH_SALT', '`w}=qJ%%T3G!l{KX *|?eexZ_}P1a(QWvV~oQuhz4f5E+bvH!wpxsjXquIB3J:Wa');
define('LOGGED_IN_SALT',   '+l3 />#XQ2KKg:Q*M_U2rwVr~06*k-A<|Q^M!%f-=9+4$o+uCd%u/>mIuDo*ffyM');
define('NONCE_SALT',       'HIGoYtF:q9-+[<TNjvX5hb-Rr-->)tY#7U#qS[pOD3:-1/8I5rab#fQUbzvA;z.*');

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
