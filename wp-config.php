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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ':h3vJ=a2{mEmYQS-!}e(5!H8A]?Cv}d;kaT/l0m^Q&(X^Fs#kwm2nQ4roK2W+9Ck');
define('SECURE_AUTH_KEY',  '9JKQ>e_kKZeuc+b.!G9:B83r|4}{g5S8@<yGr?G5v26wvkpg]:(*fZYkb?TNngpF');
define('LOGGED_IN_KEY',    'lud-Tr_)x2{#-3<R?U3,1;&zIcM1]&rxzVoM;}Skd1::/9R=+YeP!$!+]3/NQt[+');
define('NONCE_KEY',        '`B`nE|R_ABWiO0!4wI+=q~Ev8B[Sgc`2=s[-=HL.)HiEhj&g~N}Kg)NVxYV$>T_`');
define('AUTH_SALT',        ';lEIu!S@lfLk>Lr6pn||{_]}M1W>wtFEp]+]]M=Um9]ljL0sHPOW=z4E?Oz2nH^+');
define('SECURE_AUTH_SALT', '.]y%VbI~1*Y6?y-DxE-&AM,]o|zRUb#g7tFRnO6ZC+=~j4/mF%z?|w@111iX8/6q');
define('LOGGED_IN_SALT',   '|VEr03Frf-E&*X<r4|KW6<ri6jc5-&QA#VQ8-<dGXcW=$k9`NT4Q uDe]zTseouP');
define('NONCE_SALT',       'kx*M*8j)9a|u?7UJ[Oc(&L<0ifr0=/`$#@@bujjjxWp_zlUj=J,60RC08k $@Pj|');

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
