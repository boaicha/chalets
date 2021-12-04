<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u159621274_N0Ig0' );

/** MySQL database username */
define( 'DB_USER', 'u159621274_5MEbN' );

/** MySQL database password */
define( 'DB_PASSWORD', 'UQzOXInMD2' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '$iq:j;kq`0>D^m2ka9K{8J$&P?1J5r-6k%g`3he hniEE<G+rqe]ldG|{#.MBSja' );
define( 'SECURE_AUTH_KEY',   'w9Lw fd[{^n}vX4m2YL}uy{oyt~1P_;J>c7.`_cAp0MRK)QDIlUF!Vb.<&Q8^!Wr' );
define( 'LOGGED_IN_KEY',     'R&_?BQ4uH4sIR`vQhoE^(x8T {37h@_E}K|8+t*9LlL?vmT%UgJup}RGmvUX&i%i' );
define( 'NONCE_KEY',         'UM<y5`kTjaG$rtHa)~gM7OsgOa4=Fz7,&I~k6ui-]/Io{WXdG:=b?u>XWe[ #5Ho' );
define( 'AUTH_SALT',         'HbXkpW6/#;:!l#QkQhP4/5et#,biSKsyAPrzRgo,w:Xr#7@^=sh3[C4*q,y;~p~n' );
define( 'SECURE_AUTH_SALT',  '&m_E=r^2UiPz azKT(Zeeg DNK7N~lPR-y*{c@myM5B}0|6EM4buuX{`>[Y;a%y_' );
define( 'LOGGED_IN_SALT',    '*= Llaz8$Yr6od2wZ_~L#+F-?iJ:qKi=GPz$@`+9=Fv=8DekibqO; O^7?VV_E}|' );
define( 'NONCE_SALT',        'n/KpD7QH`gokD&?lzZ`*8kJ+~<wzZ:|0w[(!jKI,14{]~a>2!b1^:P<%+?F2F^{@' );
define( 'WP_CACHE_KEY_SALT', 'n}f{fmNth?fP<;24.3cQYm=rN`TCTc<yESd]>m~ZDC(oj2{w)ajv)cyDy2dFZscT' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
