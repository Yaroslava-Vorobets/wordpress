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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'portfolio' );

/** Database password */
define( 'DB_PASSWORD', 'portfolio' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

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
define( 'AUTH_KEY',         'g0S!oETT&E6}cni,c9q^3!JxF4;b3CmO*Ej,zd9fXl@_={{Gf|LGp3!tMNqI#i4M' );
define( 'SECURE_AUTH_KEY',  'gfL/bsX3qsl&&Ekw[,ZDa[W?8jC_M~IWov{z%D+p07AYEmOL:QPbDzv]Vm?X2n=g' );
define( 'LOGGED_IN_KEY',    'YH2C:J/0]%d?$Dj*o}$Bvi0O%y|7igbwmFjaO5eNZQBfw5QH|Ul-qT_I%x/y-G] ' );
define( 'NONCE_KEY',        'iN#Sm$(}SykL@,;pU2;?AbG[g}*&@!WBvAOJa]o0eeAZm=+}q2|Z*YzmoW*][kp`' );
define( 'AUTH_SALT',        ';-<uQpA=M[@]y1}i,Rm~-;nC^Zye&YR^INN&>f?1Cwgp{|x==XIU3! j)i{QqS*x' );
define( 'SECURE_AUTH_SALT', '*9Z4=~sbG3KgH0.u)@|wDCznZ$caa[l+qoT^LQH{Ug,3{3X,f>V4DnOmRW8*FmO@' );
define( 'LOGGED_IN_SALT',   'VM !$,Hc/;J-Hw2Jxrm=5MFe%@E#{X_-:u[s9og3eCVCXR):tW/Udt`nQReOR>P$' );
define( 'NONCE_SALT',       'CIVd2$SV&p8IHHIM|Sx}-D0@{Ch*E~asePG(Ic|!R.L7L{E!FGvdXSz1k-kOAZaX' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
