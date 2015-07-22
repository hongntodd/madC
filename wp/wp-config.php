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
define('DB_NAME', 'wp_test');

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
define('AUTH_KEY',         'Wc`e$eccG[kZ9?vV6p,V(c+Oy.A&.gli7oPiP}[|j8H@I>:e_OyQ_I@OWOy<V^Ec');
define('SECURE_AUTH_KEY',  'v&w$?mPGk$<qM=4N<#xCtiO@Pan(;LY{@m/J:lhZ4U~rj0V|+Xb}IHCF~k^#NbH3');
define('LOGGED_IN_KEY',    'LiJg7[q=uqX,{6t&<RiVsi?f#+r(=!~ dnee))SX+>[HTSH$bR-e<#~p=OX7IDrv');
define('NONCE_KEY',        ' K6M>D[Ic;l.Le|)/~0:o<ER~#@&m>J2g9ye/GL+2j-FrPp:Tb&+}_!^Ur@b$)U`');
define('AUTH_SALT',        '7g=@{Yo_x0~CAyvA+D]7o4P +3Oi=/LI_:>m[{d9C*^ >)X@k`dwJe(%2%ePECMT');
define('SECURE_AUTH_SALT', 'xHZQ[x5 27>s|?e=ZY.!3o}Pa1Nx=?3Tl=Wyho8y]6T~8sBP(0+@A`d-i/Q:zb&J');
define('LOGGED_IN_SALT',   'Oi9KozN?a,Yv16$S- 4MH{z&y@On>R9IzXaoq`[Y +9KZ[V~YHlCAi/]=wToyphw');
define('NONCE_SALT',       '=P`rqgQh++5,~$,&.5jMe5qJokn:l&c[]X^}lTY* FM*F*t]9 #cyu^2aGP.r)dg');

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
define('WP_MEMORY_LIMIT', '1000M');
define( 'WP_CACHE', true );
require_once(ABSPATH . 'wp-settings.php');
