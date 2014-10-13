<?php
        // Translations can be filed in the /languages/ directory
        load_theme_textdomain( 'html5reset', TEMPLATEPATH . '/languages' );
 
        $locale = get_locale();
        $locale_file = TEMPLATEPATH . "/languages/$locale.php";
        if ( is_readable($locale_file) )
            require_once($locale_file);
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !function_exists(core_mods) ) {
		function core_mods() {
			if ( !is_admin() ) {
				wp_deregister_script('jquery');
				wp_register_script('jquery', ("//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"), false);
				wp_enqueue_script('jquery');
			}
		}
		core_mods();
	}
	
	
	
	add_action( 'wp_enqueue_scripts', 'load_javascript_files' );

	function load_javascript_files() {
	
	wp_register_script('modernizr', get_template_directory_uri() . '/_/js/modernizr-1.7.min.js', array('jquery'), '1.7.0', false);
	wp_enqueue_script( 'modernizr', '', '', '', false );
	
	wp_register_script('functions', get_template_directory_uri() . '/_/js/functions.js', array('jquery'), '2.0.0', true);
	wp_enqueue_script( 'functions', '', '', '', true );
	
	//wp_register_script('jqueryui', get_template_directory_uri() . '/_/js/jquery-ui.min.js', array('jquery'), '2.0.0', true);
	//wp_enqueue_script( 'jqueryui', '', '', '', true );
	
	wp_register_script('magnific', get_template_directory_uri() . '/_/js/magnificpopup.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script( 'magnific', '', '', '', true );
	
	wp_register_script('bxslider', get_template_directory_uri() . '/_/js/bxslider-min.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script( 'bxslider', '', '', '', true );
	
	wp_register_script('easytabs', get_template_directory_uri() . '/_/js/easyResponsiveTabs.js', array('jquery'), '1.0.0', true);
	wp_enqueue_script( 'easytabs', '', '', '', true );
	
	
	wp_enqueue_style( 'sourcesans', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' );
	
	}
	
	
	
	// CUSTOM EDITOR SCREEN FONTS  //
		function my_theme_add_editor_styles() {
		    add_editor_style( 'custom-editor-style.css' );
		}
		add_action( 'init', 'my_theme_add_editor_styles' );
		
		
	
	

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => __('Sidebar Widgets','html5reset' ),
    		'id'   => 'sidebar-widgets',
    		'description'   => __( 'These are widgets for the sidebar.','html5reset' ),
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.




	// Custom Post Type - Team
	
	add_action( 'init', 'create_my_post_types' );

			function create_my_post_types() {
			register_post_type('team', array(    
			
			'label' => 'Team',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			// 'capabilities' => array(
			                   // 'publish_posts' => 'publish_team_member',
			                   // 'edit_posts' => 'edit_team_members',
			                   // 'edit_others_posts' => 'edit_others_team_members',
			                   // 'delete_posts' => 'delete_team_members',
			                   // 'delete_others_posts' => 'delete_others_team_members',
			                   // 'read_private_posts' => 'read_private_team_members',
			                   // 'edit_post' => 'edit_team_members',
			                   // 'delete_post' => 'delete_team_members',
			                   // 'read_post' => 'read_team_members'
			              // ),
			'hierarchical' => false,
			'rewrite' => array('slug' => ''),
			'query_var' => true,
			'exclude_from_search' => false,
			'menu_position' => 2,
			'supports' => array('title', 'editor'),
			'labels' => array (
			  'name' => 'People',
			  'singular_name' => 'Person',
			  'menu_name' => 'Team Members',
			  'add_new' => 'Add Person',
			  'add_new_item' => 'Add New Person',
			  'edit' => 'Edit',
			  'edit_item' => 'Edit Person',
			  'new_item' => 'New Person',
			  'view' => 'View v',
			  'view_item' => 'View Person',
			  'search_items' => 'Search People',
			  'not_found' => 'No People Found',
			  'not_found_in_trash' => 'No People Found in Trash',
			  'parent' => 'Parent Person',
			),) );
			
			register_post_type('carriers', array(    
			
			'label' => 'Carriers',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'rewrite' => array('slug' => ''),
			'query_var' => true,
			'exclude_from_search' => false,
			'menu_position' => 2,
			'supports' => array('title', 'editor'),
			'labels' => array (
			  'name' => 'Carriers',
			  'singular_name' => 'Carrier',
			  'menu_name' => 'Carriers',
			  'add_new' => 'Add Carrier',
			  'add_new_item' => 'Add New Carrier',
			  'edit' => 'Edit',
			  'edit_item' => 'Edit Carrier',
			  'new_item' => 'New Carrier',
			  'view' => 'View Carrier',
			  'view_item' => 'View Carrier',
			  'search_items' => 'Search Carriers',
			  'not_found' => 'No Carrier Found',
			  'not_found_in_trash' => 'No Carrier Found in Trash',
			  'parent' => 'Parent Carrier',
			),) );
			
			
			register_post_type('products', array(    
			
			'label' => 'Featured Products',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'rewrite' => array('slug' => ''),
			'query_var' => true,
			'exclude_from_search' => false,
			'menu_position' => 2,
			'supports' => array('title', 'editor'),
			'labels' => array (
			  'name' => 'Products',
			  'singular_name' => 'Product',
			  'menu_name' => 'Featured Products',
			  'add_new' => 'Add Product',
			  'add_new_item' => 'Add New Product',
			  'edit' => 'Edit',
			  'edit_item' => 'Edit Product',
			  'new_item' => 'New Product',
			  'view' => 'View Product',
			  'view_item' => 'View Product',
			  'search_items' => 'Search Products',
			  'not_found' => 'No Product Found',
			  'not_found_in_trash' => 'No Product Found in Trash',
			  'parent' => 'Parent Product',
			),) );

			
			
			}












?>