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
define('AUTH_KEY',         '1KL0w8CSYNBSSQOdclqepo70s/VrY7PZD71g8D++P96Gy4sOC1F7E5b/2uUQYzGPeTz6WvbNurpcz0UCkjWz0w==');
define('SECURE_AUTH_KEY',  'EcOScgN0SscyHu5yNGznDtvaJ2dcTC4oIMNchw+zqG91Z5ygUL+7DTlH3yh4N7pYkD2RkQkWxVjaWLhGrxOElg==');
define('LOGGED_IN_KEY',    'JTvg9aohVza8Ds/jwNa0O5OAQnssDNEtGAsDBsHHmlgFT66la8UOfYlFp3Z0STNYHxBDRUmEi+BROdBKHk/PnQ==');
define('NONCE_KEY',        '1ZHDielNFT0FHgytfCYfdy75L6V4kUP+YSJEkcOAcjGgeMdJ0h0K1Gf+yj5CUPSPTJVKIaw/q9x+JTF9T5YnCg==');
define('AUTH_SALT',        'z4WCs36kTk2CE+RAPQp6aeqbDaREM7ERW1gkMayEOdaq8fJKpkPxrMLCCzdt5xYdQ9vD91+Mm0JlKr1h/EFOXQ==');
define('SECURE_AUTH_SALT', 'vEjOHUIclJ0XAzfXtgqgvXotlOtmj85osVYV8YEZgk/NhhYRq/auz4OrwiY52GLQKW248ppkdDkxCBS7WKlK/w==');
define('LOGGED_IN_SALT',   'mcjDn2r0F0AeuaB7FUWQDzZDaBMJFKm1bNSHpyv4ImxzBYYHRKrbT9LICSliT0zrkM+veaVeUjVppTrsz1eOgw==');
define('NONCE_SALT',       'lbGWep8EhDSHTwXciME2L5kDDTeMjKn/o9/WPcT/fr4GCF2NwxbIJywIheFSgX4Pbot0KwHAbSTJOFe+gwUHhA==');

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
