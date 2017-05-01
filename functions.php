<?php
function angular_press_scripts() {

    wp_enqueue_style('angular-press-bs', get_stylesheet_directory_uri() .'/assets/node_modules/bootstrap/dist/css/bootstrap.min.css', [], '3.6' );
    wp_enqueue_style('angular-press-bs-theme', get_stylesheet_directory_uri() .'/assets/node_modules/bootstrap/dist/css/bootstrap-theme.min.css', [], '3.6' );
    wp_enqueue_style( 'angular-press-style', get_stylesheet_uri() );
    wp_enqueue_script('angular-press-bs-js', get_stylesheet_directory_uri() .'/assets/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery'), '3.6', true);
    wp_register_script('angularjs', get_stylesheet_directory_uri() . '/assets/node_modules/angular/angular.min.js', array(), '1.6.4');
    wp_register_script('angularjs-route', get_stylesheet_directory_uri() . '/assets/node_modules/angular-route/angular-route.min.js', array(), '1.6.4');
    wp_register_script('angular-press-main', get_stylesheet_directory_uri() . '/assets/js/main.js', array('angularjs', 'angularjs-route'), '1.0');

    wp_localize_script(
        'angular-press-main',
        'myLocalized',
        array(
            'partials' => trailingslashit( get_template_directory_uri() ) . 'partials/'
        )
    );
}
add_action( 'wp_enqueue_scripts', 'angular_press_scripts' );