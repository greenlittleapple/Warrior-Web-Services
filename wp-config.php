<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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

/** MySQL database username */

/** MySQL database password */

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('FS_METHOD', 'direct');
define('AUTH_KEY',         '~0&^4ujo~|[AoHTkn+oALLfL:omO0Sle,?0 };mB+BgW8S~9#Z]V5+/= Rf/GsF[');
define('SECURE_AUTH_KEY',  'I7+M-)bBk+;4 O@q~x oe>=8 |byN$<>XB7 )9Sy$-Y!v^BN$4/n[o?F$K7.schX');
define('LOGGED_IN_KEY',    'oZsNiwWIr1I/>R*UDh=#RyT|H,A~1@8Xi8[ekGLHTS{*|`}N/.@>RG8FaI|dIzvf');
define('NONCE_KEY',        'PFP6?YDQ$lQ~Kf#};}f/5I|;h%`!5sL;_`UUr=q)Cw|+!m5CD~h*ii.|:it+Mbk)');
define('AUTH_SALT',        'Gd2g<ru* (Y $`9oLhgjh=^FFsgBVN^{|&-{AfuwLe{yTrzR hvTvsHY2K#@4%sl');
define('SECURE_AUTH_SALT', 'Q?2lPc:eCQS?2BYoG[gpAQn.tk^ysGpN>/qEq_gthjtL*dVg1tT&^<Q%&-_tK%[f');
define('LOGGED_IN_SALT',   '|JNy.>gCZtl:uDGm N_dDd!e-fzksDu0xSm~?jlkYm0W-5f4yA6q=F_IR;f3`%Lt');
define('NONCE_SALT',       '%}~z?0-,wWyshSlIOonrnI=UspM-f[h-IgbfY9j@)~z_k:D-a%hk*WibkCqE0G_P');
define('DB_NAME', 'wordpress');
define('DB_USER', 'wordpress');
define('DB_PASSWORD', 'bSVwTU7Wn4');
define('WP_HOME','http://marcuswong.me');
define('WP_SITEURL','http://marcuswong.me');
require_once(ABSPATH . 'wp-settings.php');
