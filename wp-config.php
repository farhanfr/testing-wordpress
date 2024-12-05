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
define( 'DB_NAME', 'db_wp' );

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
define( 'AUTH_KEY',         'IQF`D5*QFlNQLZ$4R/Of:y:i5HK%XtiUNC|;GR*y}u&D#rJsn.obY>J;^PabS(HX' );
define( 'SECURE_AUTH_KEY',  'Nz(Sb,-W_e]M6&i1z6OoTJ3EkKRnVA]VNA#F#Qa@PfR&tS:Xg0M3l4ZlH8<5[.&2' );
define( 'LOGGED_IN_KEY',    'V(`tvmWq*+v-$YF7Zb|FOX:2{LKV 2zegS2]VHr5SV9q(@X#V;vs11BLa&xp5q_@' );
define( 'NONCE_KEY',        'yT@19@5VK#ze=<Jj^|1B!xvk-wxZ#1r9oM02Jq Zbhwg?#3Fom/w1fQ_f+Z)Wm`u' );
define( 'AUTH_SALT',        'L-4 };zl]{n|>>}~T/:YR]3CB;cUf^=UEt^ZMXE|n)e=wUx}4I7 KQ7zI6oykjBS' );
define( 'SECURE_AUTH_SALT', '@W96P~lhA1S$glB_Lu]TBiTw$G7&whmO-1{iBEW@tk4=Bq3JSpD|)qt`v3@*Fc@b' );
define( 'LOGGED_IN_SALT',   'kU`_@**5c9+ F{=38i8QI:gH$00n`vUU}oS>&3OF.9%I=lULXF(SX9z{+BJmZ{y3' );
define( 'NONCE_SALT',       '3=0?qNS8L=vN[AGu5z1cS/Uu=Nm$bVdwT5 fZA1!]bYNj~)Z*%D$~&Y^5!cB8;{>' );

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
