<?php






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

		wp_register_script('smoothScroll', 'https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js', array(), '15.0.0', false);
		wp_enqueue_script('smoothScroll');

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



//add defer to scripts

// function add_defer_attribute($tag, $handle) {
// 	// add script handles to the array below
// 	$scripts_to_defer = array('mapbox', 'slick', 'fancybox', 'smoothScroll', 'jquery');

// 	foreach($scripts_to_defer as $defer_script) {
// 	   if ($defer_script === $handle) {
// 		  return str_replace(' src', ' defer src', $tag);
// 	   }
// 	}
// 	return $tag;
//  }


//  add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);

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
//hide admin bar margin 32px
//-----------------------------------------------------------
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');


// remove updates


function remove_core_updates(){
	global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates');
add_filter('pre_site_transient_update_plugins','remove_core_updates');
add_filter('pre_site_transient_update_themes','remove_core_updates');

?>