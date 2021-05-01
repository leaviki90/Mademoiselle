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
define( 'DB_NAME', 'mademoiselle' );

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
define( 'AUTH_KEY',         ')En&|_,HdF8)S.k]$NAtZt)G%xH9v*1^Fu`G;RgZb9v7LlfnO&Vo7$tp6r0S?k[G' );
define( 'SECURE_AUTH_KEY',  'WfgY8O}4<)L?!Sb*$!2]?6ktQDg%NNtF79D?k|IUfq`R~t.GEl@W?Uc?>nZuhUGb' );
define( 'LOGGED_IN_KEY',    'kb-bx+ga,,;c4coTymM/gz7Hmp0q.=6MO?kpjB.dqi9We(OC9RvCch%t1|P!Do;K' );
define( 'NONCE_KEY',        '>MG*FE4$oJB(4&gD@J,Xsl`bo4mvFp&+>6m1_]@9l){1t1}BJkVKV;T (dHM#S=h' );
define( 'AUTH_SALT',        '1!aNuS(>j^Mg`@e2G#-!(9:)sUkc@e~V|$iQgd:c:_81_auFnb.=wM]A3Dp*Kyx}' );
define( 'SECURE_AUTH_SALT', '8s]S_jj&.WT^tY?llD7h$.NQZS<t;pSxVLAGJA!{ kV.ws32u($6H7RrIF A)(Y7' );
define( 'LOGGED_IN_SALT',   'Msl[kTmL,0;m@TWYGtcb|2OWHiV*F?h)I=L[2Yb#w]J}cQa-6)G0d]e[U^0522MI' );
define( 'NONCE_SALT',       'i~42xGVj,fm+_$niggJ<X6-]MroQBhj_I:cFY)y>!g#E%_e34rT~~AnRh?ZpI>l8' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
