<?php


//Enqueue CSS
function load_stylesheets()
{

	wp_register_style('styles', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
	wp_enqueue_style('styles');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');

//Enqueue Javascript
function addjs()
{

	wp_register_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), 1, 1,1);
	wp_enqueue_script('script');

}

add_action('wp_enqueue_scripts', 'addjs');


//Menu Support
add_theme_support('menus');

//Featured image support
add_theme_support('post-thumbnails');

//Register Menus
register_nav_menus(

	array(

		'navigation'=> __('Navigation', 'theme'),

	)

);

//add classes to nav menu links
function add_link_atts($atts) {
  $atts['class'] = "nav-link";
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');

//add classes to nav menu list items
add_filter( 'nav_menu_css_class', function($classes) {
    $classes[] = 'nav-item';
    return $classes;
}, 10, 1 );


//Custom Image Sizes
add_image_size('hero', 1440, 986, true);
add_image_size('profile_about', 446, 543, false);



