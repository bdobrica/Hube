<?php
define( 'DB_NAME', getenv('MYSQL_DB_NAME') ? : 'wordpress' );
define( 'DB_USER', getenv('MYSQL_DB_USER') ? : 'root' );
define( 'DB_PASSWORD', getenv('MYSQL_DB_PASS') ? : '' );
define( 'DB_HOST', getenv('MYSQL_DB_HOST') ? : 'localhost' );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

### SALT ###

$table_prefix = 'wp_';
define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

define( 'WP_DEFAULT_THEME', 'hube-ui' );
require_once ABSPATH . 'wp-settings.php';
