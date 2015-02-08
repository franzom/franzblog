<?php

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

/* Esto es para modificar el style del menu top */
function child_scripts_styles() {
	wp_enqueue_style( 'superfish-menu', get_stylesheet_directory_uri() . '/lib/scripts/superfish-menu/css/superfish.css' );
}
add_action( 'wp_enqueue_scripts', 'child_scripts_styles' );


?>