<?php
define( 'DB_NAME', 'database' );
define( 'DB_USER', 'username' );
define( 'DB_PASSWORD', 'password' );
define( 'DB_HOST', 'localhost' );
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
