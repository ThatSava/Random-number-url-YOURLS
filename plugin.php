<?php
/*
Plugin Name: Random number url
Plugin URI: http://savikin.me/
Description: Assign random numberss to shorturls
Version: 1.0
Author: Sava
Author URI: http://savikin.me/
*/
yourls_add_filter( 'random_keyword', 'random_number' );
function random_number() {
        return rand(1, 9999);
}
yourls_add_filter( 'get_next_decimal', 'random_next_decimal' );
function random_next_decimal( $next ) {
        return ( $next - 1 );
}