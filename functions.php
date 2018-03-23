<?php

require_once('app/php-functions/shortcodes.php');

add_action("wp_enqueue_scripts", "register_scriptsandstyles");
add_action("wp_enqueue_scripts", "enqueue_scripts");

function register_scriptsandstyles(){
  wp_enqueue_style( 'uikitcss', get_template_directory_uri().'/app/libs/uikit/dist/css/uikit.min.css', '1.0.0' );
  wp_enqueue_style( 'makeup', get_template_directory_uri().'/app/makeup/makeup.min.css', '1.0.0' );
  wp_enqueue_script( 'uikitjs', get_template_directory_uri().'/app/libs/uikit/dist/js/uikit.min.js', false, '1.6.9', true ); 
  wp_enqueue_script( 'uikitjs-icons', get_template_directory_uri().'/app/libs/uikit/dist/js/uikit-icons.min.js', false, '1.6.9', true ); 
  wp_enqueue_script( 'angular', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js', false, '1.6.9', true );  
  wp_enqueue_script( 'angularResources', 'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-resource.min.js', 'angular', '1.6.9', true );    
}

function enqueue_scripts(){
  
}
