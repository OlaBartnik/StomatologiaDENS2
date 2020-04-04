<?php


// add_theme_support( 'post-thumbnails' );

include('php/theme.php');
// include('php/admin.php');
// include('php/acf.php');
// include('php/clean-wp.php');

add_action( 'wp_head', 'my_custom_function' );
//-----------------------------------------------------------
// Load noma_ Blank scripts (header.php)
// //-----------------------------------------------------------


add_action('wp_enqueue_scripts', 'noma_blank_header_scripts'); // Add Custom Scripts to wp_head

function noma_blank_header_scripts()
{
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
	}



	if (is_front_page())  {

		wp_deregister_script('jquery');
		wp_register_script('jquery', get_template_directory_uri() . '/js/vendor/jquery.min.js', array(), '3.4.1', false);
		wp_enqueue_script('jquery');


		wp_register_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.8.1', false);
		wp_enqueue_script('slick');

		wp_register_script('fancybox', '//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"', array(), '3.5.7', false);
		wp_enqueue_script('fancybox');

		wp_register_script('mapbox', 'https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js', array(), '1.8.1', false);
		wp_enqueue_script('mapbox');


		wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
		wp_enqueue_script('scripts');
	}


 	else if (is_page (15)){
	wp_deregister_script('jquery');
		wp_register_script('jquery', get_template_directory_uri() . '/js/vendor/jquery.min.js', array(), '3.4.1', false);
		wp_enqueue_script('jquery');



		wp_register_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.8.1', false);
		wp_enqueue_script('slick');

		wp_register_script('fancybox', '//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"', array(), '3.5.7', false);
		wp_enqueue_script('fancybox');


		wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
		wp_enqueue_script('scripts');
	}




	else  {

		wp_deregister_script('jquery');
		wp_register_script('jquery', get_template_directory_uri() . '/js/vendor/jquery.min.js', array(), '3.4.1', false);
		wp_enqueue_script('jquery');


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


	wp_register_style('slickStyle', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', array(), '1.8.1', 'all');
	wp_enqueue_style('slickStyle');

	wp_register_style('fancyBoxStyle', '//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css', array(), '3.5.7', 'all');
	wp_enqueue_style('fancyBoxStyle');



	wp_register_style('mapboxStyle', 'https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css', array(), '1.8.1', 'all');
	wp_enqueue_style('mapboxStyle');

	wp_register_style('styles', get_template_directory_uri() . '/css/style.min.css', array(), '1.0', 'all');
	wp_enqueue_style('styles');


}



//-----------------------------------------------------------
//disable search action
//-----------------------------------------------------------
// add_filter('get_search_form', create_function('$a', "return null;")); //disable search
// add_action('parse_query', 'fb_filter_query'); //disable search
// function fb_filter_query($query, $error = true)
// {

// 	if (is_search() && !is_admin()) {
// 		$query->is_search = false;
// 		$query->query_vars[s] = false;
// 		$query->query[s] = false;

// 		// to error
// 		if ($error == true)
// 			$query->is_404 = true;
// 	}
// }


//-----------------------------------------------------------
//hide admin bar margin 32px
//-----------------------------------------------------------
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');


// wdidget

?>