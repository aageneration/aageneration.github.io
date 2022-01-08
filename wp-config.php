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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'y7vG9/R7Qt#E~RWsB$^] cVBojoLofEW6dK-AG.u[^O[QHN*Dcxj3K~+4B)Xn6Oz' );
define( 'SECURE_AUTH_KEY',  '=?fhGM~T8>=-bQ@8[I?[g)^}h6/zEz^!()3:r:>N|;BjvmGpKG^ 3w=f-$Imko<D' );
define( 'LOGGED_IN_KEY',    '2E%Me.T,4.opfuL)RSkEew_r4F={WgQd[YdSt[3F]b3`tTm=-B..NrxsS,-,EAx{' );
define( 'NONCE_KEY',        '^;S%;:OhWZl%l{prD}![Fcy3(6$v:$,I:eamG<Y}l;3NI#qHdXPh=lwSaAAU tID' );
define( 'AUTH_SALT',        'GgnOAy&KY[IqIPayjlR.PmwjjW2(N-!R9bvVy)OarE5qFz}]8tSNGH4l07^qsE]a' );
define( 'SECURE_AUTH_SALT', '5TTx*M*8Ou^;@SN2CYC[fy2P-=1JXzw|I:~lI./*e,uc )IgT453Dh|w!OTprX2E' );
define( 'LOGGED_IN_SALT',   'FHxqcU}5r&?7a#{la)SsY=q}Hd&NUaGMjx=cfN, ~.9sR_1PB}E. ^_r^Kn>EC|`' );
define( 'NONCE_SALT',       'zm+w3v(y2-~)H7&5CqW[UTQ yp0<i*(~%8*Du~&pHP%{`pvTU]oMOY<Wj*Y4~EjV' );

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
