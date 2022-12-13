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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'glasscutting' );

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
define( 'AUTH_KEY',         'WYJG4,&Csb}a=KC7<6P/w8QW34Wno g$,.2th!c<Og#p}%{t@_yVnXL>kQf>bVCw' );
define( 'SECURE_AUTH_KEY',  'CrVesK|Eh(ULo;D)uJa wy}bwA~g)OduiPri`3Fk6W|NFChvN10_Cz{fP$7}r8<7' );
define( 'LOGGED_IN_KEY',    '+?Og{Q2Dqj6f<asrYk@&?>&;!_+L.g*aRB5{JV;H:,7u{1~mEPn*bM4)b_rkE!CQ' );
define( 'NONCE_KEY',        '1q=6DE}WS]]fM6@Q~mD4m0oPZKoj,XcaRBxXanXE5S|x.`4G:C*!9vmMV1yD6%zZ' );
define( 'AUTH_SALT',        'Ut[[z9mbsY1G[@WPF+H5M E.r`tbH-/:eeFZ9M6H|].wumMN^uJzyday1.boH^qZ' );
define( 'SECURE_AUTH_SALT', '/*6^;:7v)kAi>[1IrD)1@<Ou@m#V<KDvc) C:}(PGuSy,4+;7$>6,,N^c5%.wL9I' );
define( 'LOGGED_IN_SALT',   'F-IawQXca9g)on*i7[i~q@;REdoUr:Xm.00tGz3!h:rR<jHxZ=p/w0@m6Aw^~ys*' );
define( 'NONCE_SALT',       '96)vS]WE>k6>6&t>(gi#gm!<i*ewB]^EY+8}M%jJjx=oK1LLwCoZ5FB}CqVJsKJt' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tb_';

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
