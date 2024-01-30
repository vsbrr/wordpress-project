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
define( 'DB_NAME', 'mohammed' );

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
define( 'AUTH_KEY',         'nnuF_f]QfmR<l=`>tYACR<?W#DO+Q?Lo^V/j#&VU-*l$[i[iBAyyCJUJXYhm@#4(' );
define( 'SECURE_AUTH_KEY',  ']tk-chS8ZjdF.c>nDIuuFNhf<Cs7d_S%{<z:uq%>*2A4?E]zusVL)tn0 $&Q?]-G' );
define( 'LOGGED_IN_KEY',    'Ul: SQTetKMd0?@Qu@7(qCVM?vHlxA0s(m^G%g^]ROI67*T*zoW]YDr:D;xaJd`m' );
define( 'NONCE_KEY',        '3>?i>!v84T[>:ZgzknF}qG|?HjgC[mJv|Tsl7BP:r[OU;k[lDJ(9o9WGIO<P7K:@' );
define( 'AUTH_SALT',        ']rq1U4w~Fn& aBE}@/Vm*uQY_VY^AinPTP*zqK++L81Vm4K%3NtwPau6gKpsmL2p' );
define( 'SECURE_AUTH_SALT', '+_K`VcVAojgwTz|s[B.@Obn]i^O/xA.304 ke<C3rD^sI.39N^!:<IY-mSyl#nn)' );
define( 'LOGGED_IN_SALT',   'B,p(sIv[]&S*XH3HBv?)]UTiZ6rcB/h4eC&VJqBlUx6R.fB`yPa1mgKLsaEys/DQ' );
define( 'NONCE_SALT',       'JphZnm6n#pK!9FFsHLJR({QQD-Phwt*2Rrbk6>ZV+p<xLUp9n%V9 4O6!LlQ9m?^' );

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
