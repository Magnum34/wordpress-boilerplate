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
define( 'DB_NAME', 'wordpress');

/** MySQL database username */
define( 'DB_USER', 'wordpress');

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define( 'DB_HOST', 'db');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'sQ*-NS?|FT-%<Im9(iF,qg3UG|*[8gH&7}i_~:&Qj+2L5t?F|UC?11H`!Olzi#C[');
define('SECURE_AUTH_KEY',  '>wE_EG3,8q%p-1_M1hU_,T=f Bj(c!1)GJ^>3WeU&YvWHOM9_=|ob):6P1T3Hf(D');
define('LOGGED_IN_KEY',    'g<;)>^XC.))u3_S7R$LnQDo:n{aV ybt@xA3ZPv2WxO9vqd{iW]LWX58j11[$^K>');
define('NONCE_KEY',        ')WHW6zxzDhQq}-af2~4m)u8N&brWTjZ}o,ZP@.K3DP8#UIgJyT5VuvZlsh;8{1<o');
define('AUTH_SALT',        '9dYDN7Q9~?ICw}+;VKP%N@vpa?%Xvub`S#-iOWE#(/P-F6/OrQ`e?0|m.lsM?1;b');
define('SECURE_AUTH_SALT', 'd[r| :CkNuC=1U7ro1nisV+uzruKvBZcJj^B%N,gpGm-h-_7,deuLwY_4W+~-(18');
define('LOGGED_IN_SALT',   'e;3D2 +y{y{N2K.a=-UWI95[lr+%[Ow?t MVIQXV{[&D=N2}i#ie@V?9=t4]]41e');
define('NONCE_SALT',       'h*}3g5y.34~[La(gL^l0npljPvUbTTQ3YD-4,L1F>})f B)$>cj>r;-q;`[]pP3E');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */




/* That's all, stop editing! Happy blogging. */
if (!defined('WP_CONTENT_DIR')) {
    define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
}
if (!defined('WP_CONTENT_URL')) {
    define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
}


if (!defined('WP_SITEURL')) {
    define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/');
}
if (!defined('WP_HOME')) {
    define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}

if ( !defined( 'ABSPATH' ) )
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
require_once( ABSPATH . 'wp-settings.php' );