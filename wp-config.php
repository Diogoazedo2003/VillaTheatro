<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
define('DB_NAME', 'villatheatro_wp');
/** Database username */
define('DB_USER', 'villatheatro_wp');
/** Database password */
define('DB_PASSWORD', 'INSERIR AQUI A PASSWORD DA BASE DE DADOS');
/** Database hostname */
define('DB_HOST', 'localhost');
/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
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
define('AUTH_KEY',         'ls_nO]N*c3We`BrFqX7STD]stf.$oEL*aJY&L6}n#V%_NQv23Mgk!>07xazWwK{t');
define('SECURE_AUTH_KEY',  'L+d>H-vLqY0Y2KBLxrSPT~zZ[[,y+T)tz<N4<5j*PQzS)7?uvVLCnl@5E!wVO~t;');
define('LOGGED_IN_KEY',    'K=D+5CbdSK({QEcCu$mN$qI0fk:9o>:Jpe=)=jd)`}(cRa60TJY,t+(C?h8V!r~/');
define('NONCE_KEY',        '/vP(x-[}os@oqFU({?PmCNesN&3:62k1su=Ctt5m/_(p;Sycki7#2{%w!HEx0}T}');
define('AUTH_SALT',        'rU>M)ui)C<cBZibfQ.+6Izme:dfSZrCe8.%!(r].`p!)+t`G&l3@Hiz&~>-XPYN8');
define('SECURE_AUTH_SALT', 'p=Qs.+]J~^=Jbyj]`RZbj_9^bA%Bz+Fk5*G$FHE?|8g+[d^8v&*bd3TS6@1;r8(F');
define('LOGGED_IN_SALT',   'S][eb-s{{Uhx.exU8~rsy8Wtv2dRVtcVpCi)*nHrN6,?|<P9ri2iZ#pN[ybOhC|M');
define('NONCE_SALT',       'hN?n#KEZs5=WEKDhZH;g32N%n-rnX5IWy7JPIPU:b{Pm%,#*G7B4>Au}?kJe)]%?');
/**#@-*/
/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vt_';
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
define('WP_DEBUG', false);
define('WP_MEMORY_LIMIT', '1024M');
/* Add any custom values between this line and the "stop editing" line. */
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
