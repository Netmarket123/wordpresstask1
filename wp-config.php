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
define( 'DB_NAME', 'task' );

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
define( 'AUTH_KEY',         '?0}eI{Gu1l!IyFGbLzia!9oF|]Yz)2M{|Vf+/+Sq~KifAh%0v8Hmv@d_xie`%@13' );
define( 'SECURE_AUTH_KEY',  'k3%/O=Q#B`FG#&e^BuCf=5hVjUhPT+($p-@OtV(7{Rzi6/?l*v?r;z!_*O8-*{Sp' );
define( 'LOGGED_IN_KEY',    'Ft!jQR9q4H=]LVr,_:x+eIJIYRpzx%m_oKAl)RTtB{`@}U2:~i+jw9@uo#.G%Jzt' );
define( 'NONCE_KEY',        '%9r]5OuPg}|YbBT=Zl  Ema)s1+ad-_GF9:}A1N<YQUw$N4;8uI2xn4G2fw-/8MG' );
define( 'AUTH_SALT',        '~Gz[rbzeE`Z_T)pdpgQQ&w*7yQg7y,H:~O@1H`5X>FLvs/^u=UybzVYYVk>N>Z4 ' );
define( 'SECURE_AUTH_SALT', 'x`B-)(P|YJ:&herfVK]l<5Oc((1Yl?(7W-ZD_]DsF#vjb%RK+1PL!$D:fB/jwsZ.' );
define( 'LOGGED_IN_SALT',   'AL+rdzkFl3c#Rpn0:<V2pr=I5-sx!BDSUwOBnI6)pi}z.*v^z?KFw_|ij+>#$XMm' );
define( 'NONCE_SALT',       'cX,zdF/iAkPB4@SkARmFa(>-bSkh[;9yg^Ne``QoCe*$Rkwds<fuNX0no~j/ehzZ' );

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
