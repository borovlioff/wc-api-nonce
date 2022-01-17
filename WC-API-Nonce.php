<?php
/*
Plugin Name:  WC-API-Nonce
Description:  Create endpoint for get nonce woocommerce
Version:      1.0
Author:       borovlioff 
Author URI:   https://vk.com/borovlioff
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/


function my_awesome_func( $data ) {
 return wp_create_nonce("wc_store_api");
}

add_action( 'rest_api_init', function () {
  register_rest_route( 'nonce/v1', '/get', array(
    'methods' => 'GET',
    'callback' => 'my_awesome_func',
  ) );
} );


