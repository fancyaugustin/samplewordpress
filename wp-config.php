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
define('DB_NAME', 'custom');

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
define('AUTH_KEY',         's;aJ9:X`q:D.p196JBh.i&?V]@&KO0kI}l{XvQkx0bFQAQ+=_pU64BuZd;Dp<O73');
define('SECURE_AUTH_KEY',  'r5}!}s5(Uv^HUJ<{aG{!p08%J21hFd?A8z<UCy]A2vhDJJq8ValwR`2j?r#R{U>=');
define('LOGGED_IN_KEY',    ':myz,>;3OL$L.-[?|U+LOb@&8<c)@3GXCLIWp<%mmM:m(0cgqXW`t0[E9$XMiONn');
define('NONCE_KEY',        'kRUy1kvXn6.Aw{RD~1f_aD1vl>I5;!%G(YA)y{Ov?1Y~::89R-?B3p] 6R{Z&zl8');
define('AUTH_SALT',        'U]K[3UoNtT?rm3ITUD|6Q: rmh9kk]1t=48ZD>+:,go6-A-[Oqk92S*q=6=/}`k)');
define('SECURE_AUTH_SALT', '>n:.@`O&;kHs<2&`]^|h]:@,n2YXxxe7IX[(=_M1[,UTeArKC)TWs8GXA[+sZ=bM');
define('LOGGED_IN_SALT',   '&)#XvO?M$,@ >g;@gz&vTM6{[AGVMG2M(ZgH%7Ikq@C%])~hr0JryRB{2T3kYoES');
define('NONCE_SALT',       '/~!PNu]B/nR5c(rkI:nn&hg@dmWBT6JgfK^8JYka=Qi:R.%:[(M.@KiMv.%-.qzV');

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
