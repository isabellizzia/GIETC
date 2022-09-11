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
define( 'DB_NAME', 'gietc' );

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
define( 'AUTH_KEY',         'w{woi!!^BlbJGv3Xo{k@9|NbNEb9>:]OhBRa&2M3Q3E*b,F2J==ZFn1Rae&-V3eL' );
define( 'SECURE_AUTH_KEY',  'j~P-o_8GWR><jsctYSsEl]:*ZP[ce|PnCW8$(0N24YcJ7$f?, HV&8_4s*S{r442' );
define( 'LOGGED_IN_KEY',    'HU$V&rc),tI!z;?Ct0s{ghI gU!Apqm8b`2lCaJw`leLOA:SOC=o#!5lGRxM4L7y' );
define( 'NONCE_KEY',        'h&i`2%ZTL``QRm~rz!~+<4IuG_M|y)$}xPU}GmEm!3tQo+`:ZGE3k?jEG)upe~G$' );
define( 'AUTH_SALT',        'ze.{ 5kD)R;+NM)F.y^@$zFQ?J?S]J!$eox5pLizu6Q^25F P?UfndY6hKQ>_fGM' );
define( 'SECURE_AUTH_SALT', 'ElyW?zEy@a*!<u{&cHDowp 3: w C2O#HJHGZk5cR%Yd[`l)#6k]5DOdo;!*S>[i' );
define( 'LOGGED_IN_SALT',   'A;yDIT3zj4[*%s-r[%.#?L_%>M|m=cLq,<1hKzE-?qg,XMbkgWJ!20Ee><0*(kJJ' );
define( 'NONCE_SALT',       'A=|W7B>4Ri7}D+E_kIH5mw#mg gg.gLNSfm9Z(F#s]p0YBT1KvZXc$amRn@J(&M7' );

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
