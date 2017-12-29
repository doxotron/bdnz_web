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
define('DB_NAME', 'badinz_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v[w9SR.bRI8bt*]mMXO#]eE$%`kr83xOe<17m7WEzv/s5)%$OiRl +KCoj@vA20m');
define('SECURE_AUTH_KEY',  'k-2m7no;qK7K/Db/21#h<Qdh;o1IPw S?C&3?LXf*RnpAd?XdDSaTH^&z0QJ+hag');
define('LOGGED_IN_KEY',    'X8VF2vTCKIXF/EE#l^m3rVUw11RW_c1o;e;Rd`85x{V,PI~|@$9/]` HJnr&YWlT');
define('NONCE_KEY',        '904Re^@XFe2kNA,3;m,yCZ3BG )eu:ay:0.Yi}P-~Q28o=aOd#zn_b42c]X%zbP,');
define('AUTH_SALT',        'CF|HR5:<[[{qVc[4o(~KNt_2Cj)=fK;1E/OE}XDO5x2IkbmlV6DB^%{rV0Nt]TLy');
define('SECURE_AUTH_SALT', 'P2I.B/[rmKx&[8X#NY%8fG1|P]2y!Y&Hc[f`~lCRIch_hKaV_Y341AF`%ExvaNhM');
define('LOGGED_IN_SALT',   '3}xdKScjCc{QYNKQF2WpHSvTf.en36b$=GW*do#[p `zli2#_1V@+xwznnu8c*s]');
define('NONCE_SALT',       '(iDI4$M$dm]piN2t;JQlKnFy9[47)ea~&TrJiRZ^RQ*`6e.=Q`_DNQ]-FhTu{^Za');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
