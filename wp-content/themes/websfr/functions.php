<?php 
	if( !function_exists("chunbi_theme_setup") ) {
		function chunbi_theme_setup(){
			/* Them post thumbnail */
			add_theme_support('post-thumbnails');

			/* Them menu */
			add_theme_support('menus');
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

	function chunbi_theme_styles() {
		wp_enqueue_style('bootstrap_css', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
		wp_enqueue_style('clean-blog_css', get_template_directory_uri() . '/css/sfr.css');
		wp_enqueue_style('font-awesome_css', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');
		wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
	}
	add_action('wp_enqueue_scripts','chunbi_theme_styles');

	function chunbi_theme_scripts() {
		wp_enqueue_script('jquery_js', get_template_directory_uri() . '/vendor/jquery/jquery.min.js');
		wp_enqueue_script('bootstrap_js',get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js');
		wp_enqueue_script('clean-blog_js', get_template_directory_uri() . '/js/clean-blog.min.js');
		wp_enqueue_script('contact_me_js', get_template_directory_uri() . '/js/contact_me.min.js');

	}
	add_action('wp_enqueue_scripts','chunbi_theme_scripts');

?>