<?php
/**
 * The base configuration for WordPress.
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

/**
 * Absolute path to the WordPress directory.
 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/core/' );
}

/**
 * Absolute path to the project root directory, additionally to `ABSPATH`.
 */
define( 'ROOTPATH', __DIR__ );

/**
 * Composer's autoloader, used throughout the project
 */
require_once ROOTPATH . '/vendor/autoload.php';

/**
 * Load environmental variables from `.env` file.
 */
$dotenv = new Dotenv\Dotenv( __DIR__ );
$dotenv->load();
$dotenv->required( [ 'APP_URL', 'DB_NAME', 'DB_USER', 'DB_PASSWORD', 'DB_HOST', 'DB_PREFIX' ] );

/**
 * Define current environment for use later.
 */
define( 'WP_ENV', getenv( 'APP_ENV' ) );

/**
 * Load environment specific config.
 */
require_once ROOTPATH . '/config/' . WP_ENV . '.php';

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         getenv( 'AUTH_KEY' ) );
define( 'SECURE_AUTH_KEY',  getenv( 'SECURE_AUTH_KEY' ) );
define( 'LOGGED_IN_KEY',    getenv( 'LOGGED_IN_KEY' ) );
define( 'NONCE_KEY',        getenv( 'NONCE_KEY' ) );
define( 'AUTH_SALT',        getenv( 'AUTH_SALT' ) );
define( 'SECURE_AUTH_SALT', getenv( 'SECURE_AUTH_SALT' ) );
define( 'LOGGED_IN_SALT',   getenv( 'LOGGED_IN_SALT' ) );
define( 'NONCE_SALT',       getenv( 'NONCE_SALT' ) );
define( 'WP_CACHE_KEY_SALT', getenv( 'WP_CACHE_KEY_SALT' ) );
/**#@-*/

/**
 * WordPress Database connection details.
 */
define( 'DB_NAME',          getenv( 'DB_NAME' ) );
define( 'DB_USER',          getenv( 'DB_USER' ) );
define( 'DB_PASSWORD',      getenv( 'DB_PASSWORD' ) );
define( 'DB_HOST',          getenv( 'DB_HOST' ) );
define( 'DB_CHARSET',       'utf8' );
define( 'DB_COLLATE',       '' );

$table_prefix =             getenv( 'DB_PREFIX' );

/**
 * Dynamic URLs and paths.
 */
define( 'WP_HOME',          getenv( 'APP_URL' ) );
define( 'WP_SITEURL',       getenv( 'APP_URL' ) . '/core' );

define( 'WP_CONTENT_DIR',   ROOTPATH . '/app' );
define( 'WP_CONTENT_URL',   getenv( 'APP_URL' ) . '/app' );

/**
 * Additional configuration constants.
 */
define( 'AUTOMATIC_UPDATER_DISABLED',   true );
define( 'DISALLOW_FILE_EDIT',           true );
define( 'FORCE_SSL_ADMIN',              true );
define( 'IMAGE_EDIT_OVERWRITE',         true );
define( 'IMAGE_JPEG_QUALITY',           80 );

/**
 * Memcached object cache backend.
 */
if ( ! empty( getenv( 'MEMCACHED_HOST' ) ) && ! empty( getenv( 'MEMCACHED_PORT' ) ) ) {
	$memcached_servers = [
		'default' => [ getenv( 'MEMCACHED_HOST' ) . ':' . getenv( 'MEMCACHED_PORT' ) ],
	];
}

/**
 * Sets up WordPress vars and included files.
 */
require_once ABSPATH . 'wp-settings.php';
