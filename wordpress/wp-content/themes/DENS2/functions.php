<?php
include('php/theme.php');
include('php/admin.php');
include('php/acf.php');
include('php/clean-wp.php');


//-----------------------------------------------------------
// Load noma_ Blank scripts (header.php)
// //-----------------------------------------------------------
add_action('init', 'noma_blank_header_scripts'); // Add Custom Scripts to wp_head
function noma_blank_header_scripts()
{
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }

	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', get_template_directory_uri() . '/js/vendor/jquery.min.js', array(), '1.10.2', false);
		wp_enqueue_script('jquery');

        wp_register_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js', array(), '2.6.2', false);
        wp_enqueue_script('modernizr');

        wp_register_script('smoothScroll', get_template_directory_uri() . '/js/vendor/smoothScroll.js', array(), '1.0.0', false);
        wp_enqueue_script('smoothScroll');

        wp_register_script('googleMap', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAvahNIHcXmsEZKIyL9jyaJcLHA3k2vOf4', array(), '1.0.0', true);
        wp_enqueue_script('googleMap');

		wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
		wp_enqueue_script('scripts');
	}
}


//-----------------------------------------------------------
// Load custome_styles
//-----------------------------------------------------------
add_action('wp_enqueue_scripts', 'custome_styles');
function custome_styles()
{
	wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap&subset=latin-ext', array(), '1.0', 'all');
	wp_enqueue_style('googleFonts');

	wp_register_style('styles', get_template_directory_uri() . '/css/style.min.css', array(), '1.0', 'all');
	wp_enqueue_style('styles');
}


//-----------------------------------------------------------
//disable search action
//-----------------------------------------------------------
add_filter('get_search_form', create_function('$a', "return null;")); //disable search
add_action('parse_query', 'fb_filter_query'); //disable search
function fb_filter_query($query, $error = true)
{

	if (is_search() && !is_admin()) {
		$query->is_search = false;
		$query->query_vars[s] = false;
		$query->query[s] = false;

		// to error
		if ($error == true)
			$query->is_404 = true;
	}
}


//-----------------------------------------------------------
//hide admin bar margin 32px
//-----------------------------------------------------------
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');