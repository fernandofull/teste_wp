<?php

//Begin Really Simple Security session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple Security cookie settings
//Begin Really Simple Security key
define('RSSSL_KEY', 'GcGQwlzmv41aQV9A9UNPY2vbCr1EUWTKWoR0Nczq6FzYBCxP41jKI6VTW7azMgFa');
//END Really Simple Security key
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '.X#f_$+pL$$l/pyLNs(zJPu,t]+9%/?sm)C`#55+a,`>,_M$>F]OE(&Jx8T!Qup4' );
define( 'SECURE_AUTH_KEY',   '46_a-=ET/vcZWtM;GlE(/ek|K#~|AC*U-M(lf.>~*=WN[cc0[13VoIX*!1V`shC&' );
define( 'LOGGED_IN_KEY',     'bo/7PPE*./ AAn9W$ofAw#Eug-auYF%)lkvBM)Xg0fLK&?D*qVV0Ex2J]TVdmJV5' );
define( 'NONCE_KEY',         '!,YJWz2Ir:2)Q7lrCql3jA}R^JT]qfCrfU?V3{nacu[c`oAw*1F|YB#F=P&dUUUT' );
define( 'AUTH_SALT',         '@/_OnMV9W*A?:~+%@&6Fh_1X/Q$>CH}w@etHvCt-CORJ4}Ut>Y$9x<+;X^UXX@c_' );
define( 'SECURE_AUTH_SALT',  'G9Xz<:]|<@(1)(zFtkFEz^xkA9btceXel%r<%NS7/Rmf-Pvn %DsH@sk9mnhe|9w' );
define( 'LOGGED_IN_SALT',    's]O94wl/p<m,WpbN.E[xx?ux-/sDlU>j{6d)KifI!:4SWJ+RPY*UI}Lgm~Qi#eW7' );
define( 'NONCE_SALT',        'UOy==+d$04^OZ74=[<xN:$U%8ILgqk-S)Oi5(UsgRs]{:&+7C0hF{`C`DAzbo<5d' );
define( 'WP_CACHE_KEY_SALT', '[[?TiTP+`;,,) ?lEP!V&$7/DWk^6*%>a<SRcK=zFN6T #<OJK#czDNZ Cfo!9PZ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
