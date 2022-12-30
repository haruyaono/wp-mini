<?php

if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

define( 'WPMINI_INC', 'wp-mini-includes' );
require_once ABSPATH . WPMINI_INC . '/load.php';

$path = 'http://localhost/wp-mini-admin/setup-config.php';

if( false === strpos( $_SERVER['REQUEST_URI'], 'setup-config' ) ) {
    header( 'Location: ' . $path);
    exit;
}

