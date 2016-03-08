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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'aAxeTW})Z U+TLmo`ZI-BKv0&n=;Kdl%OQ7=MeT_!{Uu4R)mD^@1^lD6y:io!f}i');
define('SECURE_AUTH_KEY',  '@DP_GQzE0f?)U-Uz;#o4o2O#0-?1~|2x$8cXB,hvOnlo%sjU:Zcd*kLri&4dQ|aR');
define('LOGGED_IN_KEY',    '7E&k8iE|+vx#LBv/L.dd2mc}-&A-?1/J>1S{N(;D|^wAG8NVIH-JI?4M^;cCg/UV');
define('NONCE_KEY',        'n2! aSnB+0T1M&/-i,QM`,#*{.Y/x&quy H+GljEM ) Iq#|/lJw;R-E0e1Rm-C#');
define('AUTH_SALT',        'm-wNyS<-O!]-e1%/Pt4<D8}:!QwOOSQVaJV:I3;Zj]WDbm}08!&_D)=T):C|TT^4');
define('SECURE_AUTH_SALT', '5q[Kf*l:]cbVHcTGG[np~*(iYZ1sM^|Mt+2YIDq#Z~q^VYI:5a,k23vYM7GM<;w2');
define('LOGGED_IN_SALT',   '[mH}$v8,B-|Ntdk9u&{qMp0As~|8n6tb-I:~c1e6I@c9*-@LI*R4`3IJ$t|?Q%#I');
define('NONCE_SALT',       'o!tXFUu:i Ja-IL6CdCra+>)#S&sixmlNY(=%J9V`gbJf(N@v.JFdvCyOqfP1?GG');

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
