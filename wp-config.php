<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'HjGZ8L,<qtXlg6lAPD!65j7vY*ea@5E[e5)A*$$Tq%%&WA|>{**f^mB$o<-fk|af' );
define( 'SECURE_AUTH_KEY',  'w(A+`q]^PI0U[7t}|G$>|]IjY|G4:;O+ V9gT4%P}@^SF?3B!h2);Embr!<,JDyf' );
define( 'LOGGED_IN_KEY',    'CedID&{DaHp,~^jG0kp?JN);/qf2_@yW;UL#}rU2.:0*+VPxeVcqZF~sqbc2(MUW' );
define( 'NONCE_KEY',        'aNUv-j6B|zxKO.nRfvDk]@k1Zp9|0Vy%+YcG]$=@t$[51Q{bFdS-av[,PY/* !DO' );
define( 'AUTH_SALT',        'ZUwA90-w+k&>y*PmA,eVqXBXe=w}xXXBe5zd8!pn m&I[1%3LOYVaIXDn8T+v*9&' );
define( 'SECURE_AUTH_SALT', 'OR8DT(~Vyr D?b0YNzxPSPEOq _g^lt3K&d*Vqc.K2>eUh8AEJO?>,LsODHT1sv7' );
define( 'LOGGED_IN_SALT',   'S/XSMZ$DKOCsLA3d8DNB-%[P+U,JInIoR*f}be[5$S+3rK(?#IqzIwuwf.@|JVh$' );
define( 'NONCE_SALT',       'EMPOi-O2j*G0D~NFsoeY|%|As8x$(RZ0WsMXQz-RHD!onitMRg:EiN;>Plz?4~-(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
