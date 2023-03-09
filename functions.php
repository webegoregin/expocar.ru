<?php

add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu() {
	register_nav_menu('Header', 'Header_Menu');
	add_theme_support('post-thumbnails');
}

function scripts() {
	wp_enqueue_style('animated', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
 

	if(is_page_template('services.php')){
		wp_enqueue_style('slick', get_template_directory_uri() . '/assets/slick/slick.css');
		wp_enqueue_style('slick-theme.css', get_template_directory_uri() . '/assets/slick/slick-theme.css');
		wp_enqueue_script('modal', get_template_directory_uri() . '/js/modal.js', array(), '1.1', true);
		wp_enqueue_script('modal-two', get_template_directory_uri() . '/js/modal-two.js', array(), '1.1', true);
	}

	if(is_page_template('contacts.php')){
		wp_enqueue_style('about-style', get_template_directory_uri() . '/css/about.css');
		wp_enqueue_script('filter', get_template_directory_uri() . '/js/filter.js', array(), '1.1', true);
	}	
		if(is_page_template('work.php')){
		wp_enqueue_style('about-style', get_template_directory_uri() . '/css/about.css');
	}	
	if(is_page_template('blog.php')){
		wp_enqueue_style('about-style', get_template_directory_uri() . '/css/about.css');
	}	
	if(is_page_template('blog-detail.php')){
		wp_enqueue_style('about-style', get_template_directory_uri() . '/css/about.css');
	}	
	if(is_404('404.php')){
		wp_enqueue_style('policy-style', get_template_directory_uri() . '/css/policy.css');
		wp_enqueue_script('policy-style-js', get_template_directory_uri() . '/js/policy.js', array(), '1.1', true);
	}
		
	if(is_page_template('policy.php')){
		wp_enqueue_style('policy-style', get_template_directory_uri() . '/css/policy.css');
		wp_enqueue_script('policy-style-js', get_template_directory_uri() . '/js/policy.js', array(), '1.1', true);
	}	
	
	
	
	if(is_page_template('cooperation.php')){
		wp_enqueue_style('about-style', get_template_directory_uri() . '/css/about.css');
		wp_enqueue_script('modal-two', get_template_directory_uri() . '/js/modal-two.js', array(), '1.1', true);
	}	
		if(is_page_template('useful.php')){
		wp_enqueue_style('about-style', get_template_directory_uri() . '/css/about.css');
		wp_enqueue_script('pagination', get_template_directory_uri() . '/js/pagination.js', array(), '1.1', true);
	}	


	 if(is_home() || is_front_page()):
        wp_enqueue_style('slick', get_template_directory_uri() . '/assets/slick/slick.css');
		wp_enqueue_style('slick-theme.css', get_template_directory_uri() . '/assets/slick/slick-theme.css');
		wp_enqueue_script('modal', get_template_directory_uri() . '/js/modal.js', array(), '1.1', true);	
    endif;

	wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.1', true);	

}


add_action( 'wp_enqueue_scripts', 'wpcf7_modal_invalid_js' );
add_action( 'wp_footer', 'wpcf7_modal_invalid_js_inline', 999 );



add_action('wp_enqueue_scripts', 'scripts');



/*
 * Options Page - function.php
*/
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
	  'page_title' => 'Настройка сайта',
	  'menu_title' => 'Настройка сайта',
	  'menu_slug' => 'theme-general-settings',
	  'capability' => 'edit_posts',
	  'update_button' => __('Обновить', 'acf'),
	  'redirect' => false
	));
}

/*
* delete type="text/javascript"
*/
add_action('template_redirect', function () {
	ob_start(function ($buffer) {
		$buffer = str_replace(array('type="text/javascript"', "type='text/javascript'"), '', $buffer);
		$buffer = str_replace(array('type="text/css"', "type='text/css'"), '', $buffer);
		return $buffer;
	});
});

add_filter( 'wp_mail_smtp_custom_options' , function( $phpmailer ){
        $phpmailer->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        return $phpmailer;
    });


add_filter('wpcf7_spam', '__return_false');
add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $data;
}
/*
* delete emoji
*/
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
add_filter('tiny_mce_plugins', 'disable_wp_emojis_in_tinymce');
	add_filter( 'excerpt_more', fn() => '...' );
	add_filter( 'excerpt_length', function(){
		return 50;
	} );

	
function disable_wp_emojis_in_tinymce($plugins)
{
	if (is_array($plugins)) {
		return array_diff($plugins, array('wpemoji'));
	} else {
		return array();
	}
}