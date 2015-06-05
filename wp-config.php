<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'chrishe');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */ //utf8mb4
define('DB_CHARSET', '');

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
define('AUTH_KEY',         '*N4x+o1UN*s{q>VtzdGi[z22Tg*Y0|Lx&?|x}o<#8oOk^= _;s+(|^fbaX%|(,g{');
define('SECURE_AUTH_KEY',  '&i,.]xly1iUWQSmCuW@l<e~zRTxX)Ybt+Q=/v[lNwJ}J-@I)`A=}3_|&[z}}dd8P');
define('LOGGED_IN_KEY',    'LJ:lb6WY4odCy|y5(ZJ(5%HvJ|ws35.8;;Y2_6EKd+>PU`>-49kg5mlvDXdqObL,');
define('NONCE_KEY',        't3K-#O|9<+7RHZZ}7+MQ4I[3RYb~v{r!VzuHB$Wqk<MO|WFkkxbX~eHzEv%@;[[K');
define('AUTH_SALT',        'C~5COlwbR;BWl$cuwtgEw7di2U k(0p,]4l3a-~G`s]-Rtm8Wj!n|}D[:7L,#KyW');
define('SECURE_AUTH_SALT', 'H{Dy$KQDS@R8Nr!>k1mFs>H%114|bir|t@z/p:fwZz:PEiq5C`7(SA$^1/|HDX(6');
define('LOGGED_IN_SALT',   'BT/:4=+JhJ c$I(F!BJhW$#I?L6c2C[k=t<*m6;;MvD.ioe0K~&B2<$OVe,QX_H[');
define('NONCE_SALT',       '1gxo-mjEON&g_.K+ZjTnS^GmFFstn&JmXY?t+QG!Sp+{WKPOl28x0)N$WmlSX_9t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
