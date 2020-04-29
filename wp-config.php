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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'K KZ0|REC>NY*+.WBt%y.::3eGV|jK9rw3OB*kWN_mB{^GJu<#s=TdCXYU#xRVbt' );
define( 'SECURE_AUTH_KEY',  'j+9RimH^tJ/ov_wM_#qnXJFvQTe4V8CcDcUv!K-mzc(&{`c<cu&:9gO-kOfOs;s*' );
define( 'LOGGED_IN_KEY',    'U&6la<g=:}qMnQ _&|{kXTM_F.,l21fejMy@Rh{H2)Y]E@{;&>LE$+CVbprUABCy' );
define( 'NONCE_KEY',        'AlO_rmCI;%{aO`Ajw`PoBA]yQ.|KoZS:dRkVCX2-oJ(PF@n`B~Y@)?iSE*xGhi!3' );
define( 'AUTH_SALT',        'f{jNfYRC+^q{]w3dzm^|_W3@`=>*n|aF =|>FlxvH$ww5oj9oac[Bn_VGib7^]$U' );
define( 'SECURE_AUTH_SALT', 'zJ,<T)d { IGim8hVGL(!4~L-gXCo*P>=P-2QfE!QFlJFMo=u4J#K@>g0x3V*>hI' );
define( 'LOGGED_IN_SALT',   '.Rn$tip.nV2)-1Ot:O?;*[*vau>jLy<P/sl%EIB<@/UwK_n!@SV,P>,QNnKDwaZg' );
define( 'NONCE_SALT',       'Zh?77L`~3{kn9/&}nN_ef ;CM46Zo*qrZ-H?Sz3+6}}`T)hLHLiq3&$2@5~bGd7u' );

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
