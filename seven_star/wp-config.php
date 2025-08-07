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
define( 'DB_NAME', 'seven_star' );

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
define( 'AUTH_KEY',         'Oz}XlKq<(3_558?:}m}JWZk^2KIC?X([C,g]=@,zWojCZf|,lb=3yM3t_1zOQrA8' );
define( 'SECURE_AUTH_KEY',  'JC0s+9`hd)yU#@ ltLbJ%=1%OYfvB]m!YvkWB:V-/I,tY2hYe51&B]GobmRhN`7t' );
define( 'LOGGED_IN_KEY',    'pcPx~QGy0ssGy5YB4T)o`%F}tBa8h`~TAvpiCzY{;]L*yuEbh]Qi#<K>LUjcxI)2' );
define( 'NONCE_KEY',        'fU]nUJA&^X_g=&j4~l6>Dg?mOUgf4z#Cd?&oE-t*|J!l>w_fFU3fh0(Vm5:)pH`~' );
define( 'AUTH_SALT',        '.Uf:Qi$9ls]>:I?-5)>0O}7[.Eu ?Y8A&_$WF$ uXGg]))N|I1(soPe=SnVAufD-' );
define( 'SECURE_AUTH_SALT', '].MYD8{Q8mz;_h}RJj4N2x^]4AW8P:;tjKPZe}*_us@;QtmI)SVdlbL:=v(5n<<D' );
define( 'LOGGED_IN_SALT',   'WL@QKup5=Ri:A;`c!0>xy}^+wPDx`It|U|V;ABp;3.Adm>~q2LOt#BZqPp7($!dK' );
define( 'NONCE_SALT',       '.C}i<vl7fg4CbeocTYbU.KN0yBo8wPFKIn1RJJ({Gk<hx?rRl;W;v&`^)u5~bl/0' );

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
