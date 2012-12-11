<?php

/*
Plugin Name: WooCommerce ZA Provinces
Plugin URI: http://github.com/nduplessis/woocommerce-za-provinces
Description: Adds a list of South African provinces to WooCommerce 
Author: Nico du Plessis
Version: 1.0
Author URI: http://nicoduplessis.com
*/

add_filter( 'woocommerce_states', 'SA_woocommerce_states' );

function SA_woocommerce_states( $states ) {

  $states['ZA'] = array(
				'EC' => __('Eastern Cape', 'woocommerce') ,
				'FS' => __('Free State', 'woocommerce') ,
				'GP' => __('Gauteng', 'woocommerce') ,
				'KZN' => __('KwaZulu-Natal', 'woocommerce') ,
				'LP' => __('Limpopo', 'woocommerce') ,
				'MP' => __('Mpumalanga', 'woocommerce') ,
				'NC' => __('Northern Cape', 'woocommerce') ,
				'NW' => __('North West', 'woocommerce') ,
				'WC' => __('Western Cape', 'woocommerce')
  );

  return $states;
}

?>