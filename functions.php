<?php /* Superfish functions */

function superfish_load_scripts() {
  wp_register_script( 'hoverintent', get_stylesheet_directory_uri() . '/scripts/hoverIntent.js', array('jquery' ), '1.0', true );
  wp_register_script( 'superfish', get_stylesheet_directory_uri() . '/scripts/superfish.js', array( 'jquery', 'hoverintent' ), '1.0', true );
  wp_register_script( 'custom-script', get_stylesheet_directory_uri() . '/scripts/custom.js', array( 'jquery', 'hoverintent', 'superfish' ), '1.3', true );

  wp_enqueue_script( 'custom-script' );
}

add_action( 'wp_enqueue_scripts', 'superfish_load_scripts' );