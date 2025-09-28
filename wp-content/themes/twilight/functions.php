<?php
/**
 * 
 * Theme functions
 * 
 * @package Twilight
 */

if ( ! defined( 'TWILIGHT_DIR_PATH' ) ) {
	define( 'TWILIGHT_DIR_PATH', untrailingslashit( get_template_directory() ) );
}



require_once TWILIGHT_DIR_PATH . '/inc/helpers/autoloaders.php';

function twilight_enque_scripts (){
    // register style
    wp_register_style('stylesheet',get_stylesheet_uri(), [], filemtime(get_template_directory().'/style.css'),'all');
    wp_register_style('bootstrap-css',get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css', [], false,'all');

    // register script 
    wp_register_script('main-script',get_template_directory_uri().'/assets/main.js', [], filemtime(get_template_directory().'/assets/main.js'),true );
    wp_register_script('bootstrap-js',get_template_directory_uri().'/assets/src/library/js/bootstrap.bundle.min.js', [],false,true );

    // enqueue style
    wp_enqueue_style('stylesheet');
     wp_enqueue_style('bootstrap-css');
    

    //  enqueue script 
       wp_enqueue_script('main-script');
       wp_enqueue_script('bootstrap-js');
       



// another way of doing 
    // wp_enqueue_style ('stylesheet',get_stylesheet_uri(), [], filemtime(get_template_directory().'/style.css'),'all');
    // wp_enqueue_script('main.js',get_template_directory_uri().'/assets/main.js', [],filemtime(get_template_directory().'/assets/main.js'),true );

} 

add_action('wp_enqueue_scripts','twilight_enque_scripts');

//  print_r( get_template_directory_uri() );
// print_r( get_stylesheet_uri() );
// print_r (filemtime(get_template_directory()) );


// regester used for adding condition in various pages 

// Step 1: Register the script (does NOT load it)

// wp_register_script(
//     'my-optional-script',
//     get_template_directory_uri() . '/js/optional.js',
//     [],
//     '1.0',
//     true
// );

// // Step 2: Later... only enqueue if needed
// if (is_page('contact')) {
//     wp_enqueue_script('my-optional-script');
// }


// how to add multiple styles 
// function my_custom_stylesheets() {
//     // Main theme stylesheet
//     wp_enqueue_style('main-style', get_stylesheet_uri());

//     // Additional stylesheet in the theme folder
//     wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/custom-style.css');

//     // Another external stylesheet (like a CDN)
//     wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap');

//     // Conditional admin stylesheet (optional)
//     if (is_admin()) {
//         wp_enqueue_style('admin-style', get_template_directory_uri() . '/css/admin-style.css');
//     }
// }
// add_action('wp_enqueue_scripts', 'my_custom_stylesheets');
