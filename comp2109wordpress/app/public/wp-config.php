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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'Q4JWrMsosHMvttb/aaIbsqCYLMwj4xxBzVnnqax7fHURYnY3tmkzUZ3GkAVQVbN8ukjX9n2XSY3aGxhlI1dtyw==');
define('SECURE_AUTH_KEY',  '9vp2oODTLhB+B78HzkZVCY/5ZO2uWBz6OT4PM6ELo19KJZDvWZ2kkhmHcJDcEupvy0CYcXoraRWD0xx3e00UoA==');
define('LOGGED_IN_KEY',    'r4GAWOqu3wfgogrjDpL/Mbb53BtscnJEOa4eMRLmbeLBbABdZc2gIqBYQ1q3kQxMTICuJCU8OOoZQcmdLFY/8Q==');
define('NONCE_KEY',        '6XNqkyFn4AQYaukY+ya6y4DbmYlYYo4nvZ4AYSzAir1UCzurcLwcQcHLqFW6Hm8hKHekF1+Zt4NVktFeFp3H2g==');
define('AUTH_SALT',        'xpQpgiCl6gsqm0agFjIoeWC9NAzR2bmX6aYxX8MnoU+qJXxcMYu54BEkY9rlYixSOup7GjOSqsNXuUt3NUEoYw==');
define('SECURE_AUTH_SALT', 'JsuL9o/grIKASsCCqkcaxbLhTsf8SapqWFey9GTtJVqsuueHzdFIT0oz9B1IvSii8rbMgWQwFx1X31WBTliJqA==');
define('LOGGED_IN_SALT',   'wH9aJNIPPmb/8VKmGLiFNb1Q5Uw/34yOrxEY0ekzCYJ0sXZOqEOOgpIYYAiFkUtcQ7uvPu/fKp4+768FFfTtpg==');
define('NONCE_SALT',       'uIi0pvYJ54MXYc7bzbbjUV3ycbrZgeWPQhlRUu88Eu6v0CT2Klnpgp/rtyK6AQIPpu+8GvEnoWSId8iv2rWPpQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
