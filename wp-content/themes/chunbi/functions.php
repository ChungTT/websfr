
<?php 
	
	/** 
	 * @ khai bao hang gia tri
	 * 	@THEME_URL = lay duong dan de thu muc theme
	 * 	@CORE = lay duong dan de thu muc core
	 */
	
	define('THEME_URL', get_stylesheet_directory());
	define('CORE', THEME_URL . "/core");

	/*
	@ Thiet lap chieu rong noi dung 
	*/
	if (!isset($content_width)) {
		$content_width = 629;
	}


	/*
	@ Khai bao chuc nang cua theme
	*/
	if( !function_exists("chunbi_theme_setup") ) {
		function chunbi_theme_setup(){

			/* tu dong them link RSS len <head> */
			add_theme_support('automatic-feed-links');

			/* Them post thumbnail */
			add_theme_support('post-thumbnails');
			
			/* Them title-tag */
			add_theme_support('title-tag');

			/* Them menu */
			/*add_theme_support('menus');*/
			register_nav_menus(
				array(
					'primary-menu' =>  __('Primary Menu', 'chunbi'),
					'project-menu' =>  __('Project Menu', 'chunbi')
				)
			);
			/*  add class for next, prev posts link */
			add_filter('next_posts_link_attributes', 'posts_link_attributes');
			add_filter('previous_posts_link_attributes', 'posts_link_attributes');

			function posts_link_attributes() {
			    return 'class="btn btn-primary"';
			}
		}

		add_action( 'init', 'chunbi_theme_setup' );
	}

	/*chunbi_entry_tag = hien thi tag*/
	if(!function_exists('chunbi_entry_tag')) {
		function chunbi_entry_tag() {
			if(has_tag()):
				echo '<div class="entry_tag">';
				printf( __('Tagged in %1$s','chunbi'), get_the_tag_list('',','));
				echo '</div>';
			endif;
		}
	}

	/* chunbi_entry_content = hien thu noi dung cua post, page */
	if (!function_exists("chunbi_entry_content")) {
		function chunbi_entry_content(){ 
			if(!is_single() && !is_page()) {
				the_excerpt();
			} else {
				the_content();

				//  phan trang trong single 
				$link_pages = array(
					'before' => __('<p> Page: ', 'chunbi'),
					'after' => '</p>',
					'nextpagelink' => __('Next Page','chunbi'),
					'previouspagelink' => __('Previous Page','chunbi')
				);

				wp_link_pages ($link_pages);
			}
		}
	}



	function chunbi_theme_styles() {
		wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
		wp_enqueue_style('clean-blog_css', get_template_directory_uri() . '/css/sfr.css');
		wp_enqueue_style('font-awesome_css', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');
		wp_enqueue_style('slick-theme_css', get_template_directory_uri() . '/vendor/slick/css/slick-theme.css');
		wp_enqueue_style('slick_css', get_template_directory_uri() . '/vendor/slick/css/slick.css');
		wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
	}
	add_action('wp_enqueue_scripts','chunbi_theme_styles');

	function chunbi_theme_scripts() {
		wp_enqueue_script('jquery_js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
		wp_enqueue_script('bootstrap_js',get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js');
		wp_enqueue_script('slick_js', get_template_directory_uri() . '/vendor/slick/js/slick.js');
		wp_enqueue_script('c-slick_js',get_template_directory_uri() . '/js/slick.js');
		
	}
	add_action('wp_enqueue_scripts','chunbi_theme_scripts');

?>