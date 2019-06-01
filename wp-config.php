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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'maxim123' );

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
define( 'AUTH_KEY',         'y%%2gzL~RFqWtJ$z+%34Pn[ZYC1 !m%f+uw&&4E%htTBRV-6z}O3s`%Blq)bah?:' );
define( 'SECURE_AUTH_KEY',  'uz=+zbYh_|^1g-7}*{oK~vIErt5>h{P]<&La|s&Ck`S{=:}3FF>aQdI-ttHPp(VW' );
define( 'LOGGED_IN_KEY',    'qZWOp}l2Xfzmd*c.w}f_ ;kTJ^iNBkaj^ORAoN(2@OWd,e^ckqSh7>,Q*5h_EU]f' );
define( 'NONCE_KEY',        '{.8ISEE,@|s}06~].+1FAn,;nDIlGKX^<pL}kJ;;``/pCI</RYRJ#ovm4K`oIqw$' );
define( 'AUTH_SALT',        'FyVpnSjiu~yR{Gf%zNW6^kgUlYOhfiJ,U@a %UyT+7Z~:ihxNX{A|!<J4}^$Wp1B' );
define( 'SECURE_AUTH_SALT', '=AP4M;R>Tge]Fr-_G;u4:~d0Y;:%,1t+C:h>P4oE`U={(*4Y&9Z`C1+Iqf^+$BGV' );
define( 'LOGGED_IN_SALT',   '+.Te]E{105C%[GirdEW]N!PjTs9&^tIy;!saWQ2_{S]Et/gMy5aew:7e0M$=p#^%' );
define( 'NONCE_SALT',       'o`ch{vC[QP+15#G=|nKBtH=0K}Tj8#osRNg4C33Vu:g6*&c04Cj~4m=;LRD,I(p ' );

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
//define( 'WP_DEBUG', false );

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
