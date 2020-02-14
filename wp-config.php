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
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Alc4##2020' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'v2obX`1 k,rM9G+t}r|c&2/&t+z-V|-28J7h~K~(mso_h6P/~<BK                                                                                                                           Tr-:tv<DS#SW');
define( 'SECURE_AUTH_KEY',  '|)qE|9SV^uY2>y{GV574SOY+vDNy[2o.v-UM(l;*SBfW-PbjA.4J                                                                                                                           !dB+[R^ao>Nm');
define( 'LOGGED_IN_KEY',    'uJf.AbK]=6d K??/FDev=|l-zy@Ihoc,JE&5|%U}zM SZFM.#lCl                                                                                                                           1xC:sR ztu:}');
define( 'NONCE_KEY',        '/%Air;aGOR.ETxv-LF9*Aie2K/h|1Na-nj}-=fLJ{AY?KmJ[t!=>                                                                                                                           _e[QBqZAtiH`');;
define( 'AUTH_SALT',        'YY+/)DT>h>:.@H0iq#;_[ol]|sL%DmRis*l2KYL?Z0uJPWj+MMP7                                                                                                                           !mD(6dwV.9YZ');;
define( 'SECURE_AUTH_SALT', '@%Kb%x`so;lX+-2.% [QuqGl&P|R3Y7h[ ReH1TtjBhPq,4v,D<z                                                                                                                           !#xYu{ /hW((');
define( 'LOGGED_IN_SALT',   'AIw$_0<Lp>H|sK,x c)h-lwG{|9A$b[1jpo aeO/^h`+mXusx@=s                                                                                                                           Qa-b4xy:8fH+');
define( 'NONCE_SALT',       'HI)J#y8.CO6h]8^,+0^MB `Sv2I!%xMT2]AaV~Q0uL!u)q~&P^n=`G<2(+^+;^nh');

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
