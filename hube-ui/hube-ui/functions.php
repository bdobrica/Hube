<?php
spl_autoload_register( function( $class ) {
    if( strpos( $class, 'HUBE_' ) !== 0 ) return;
    $file = dirname( __FILE__ ) . '/class/' . strtolower( $class ) . '.php';
    if( !file_exists( $file )) return;
    include( $file );
} );

$hube_plugin = new HUBE_Plugin();


global $hube_theme;

show_admin_bar( FALSE );

$hube_theme = new HUBE_Theme();
