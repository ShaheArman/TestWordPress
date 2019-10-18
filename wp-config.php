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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '7~2=lN4G&y/wR7Gy8iF,{5Sw2.UoI8`tB6G#]U}eBR/6|azsI-Mrql!2%=r2Z#k@' );
define( 'SECURE_AUTH_KEY',  '1uz#D+3z&TY?X.kU%i}0!ZSil`<6)FB_lh*j$B9j{<g[fJ6%iCQzq8PnJX:B*b;%' );
define( 'LOGGED_IN_KEY',    'F|HJ@YH#;2rI^aF^MJ~I;fUC8+4+|}Rfx/(SwPx/GgoT}y fTO[zT2Fyi#jT,jO<' );
define( 'NONCE_KEY',        'V56Ut@WD{ uCc,-15g}[+Va76/exh,W~Rv:5#d{oc2zFKgBRVDV#atXC>$#qH[(B' );
define( 'AUTH_SALT',        '@MrcBMpF7{|[T+m#wMhL*ioAjl@Ig|qt_lar7qrIq(HQr`L?>/iUzuzp]LKiKlUl' );
define( 'SECURE_AUTH_SALT', '9.oY#QYx/#CX$[4i@/!J^$nQDg1X{p[Bf2Py@lF-FZLJzAey)]|C{l{Um6Rin4my' );
define( 'LOGGED_IN_SALT',   '^~eL>C@`DKK!f;gHgp*T(, bv%n(|fU?oG/2$oRk:w92WAK6,vM]^fi9YE^)~4Lj' );
define( 'NONCE_SALT',       'B(p*LI%<`q<s#vB#7sWv1q,6S$q1U[ptJniv (Qs3$HLlkWL!/g=<QS,y<5h4qW3' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
