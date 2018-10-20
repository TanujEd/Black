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
define('DB_NAME', 'unique');

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
define('AUTH_KEY',         '-3K^]Z/~4+`&+rE8l4!wH@sau6)i:}1?S8#cCuXL:DyauJK^w2>^Br8Z(BOgQ%Yj');
define('SECURE_AUTH_KEY',  '(XVKjf Oz(MTr-{p~!RUi<s3l))kaIA@+.ly#(KthO!9@z~qY><Yp.>Zu,CV(X7!');
define('LOGGED_IN_KEY',    ')+W)Q:8CW 9ml:M7]4,!wUOJFQz3Jy~YcS3S/Qdow~tsN.QUmFH{!SH3c5Ds}A=X');
define('NONCE_KEY',        '*-Tp]Ea+}T5tV7c:Nh><fHa^<}_(`UylC3f7}s0NKn!LPJ30duH#N=9X|N;m7^uS');
define('AUTH_SALT',        '=m~,#1$p_@^WCrL&g<,|X+a%l-ozG~p7d]qH;/(| 5=?L*frBC(:hjW*IAFl;H>#');
define('SECURE_AUTH_SALT', 'zZMiFAR3s1$[^`D6]O vLTurup-rx]WO3@oa6SbjK8bW| Ff3A#9]9ugH!*o%:x_');
define('LOGGED_IN_SALT',   '2vy.KyV,V1&s%dFyY-!}ftau@sT+?<-~/NLl;s mM%l<h_a,IsDNTs3ML:u=7T(_');
define('NONCE_SALT',       'f8~djri&[4L$eP[$$(gW|ga*<Bf4i%bG%(oak78U4+9LmgZ:,f~-I2hj#*98zR7~');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
