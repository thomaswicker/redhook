<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
    if ( !is_admin() ) {
        wp_deregister_script('jquery');
        wp_register_script( 'jqueryJS', get_template_directory_uri() . '/js/jquery.js',array('jquery') );
        wp_enqueue_script('jqueryJS');
    }
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');


    // BEGIN - Load the Main Theme CSS
    add_action( 'wp_enqueue_scripts', 'theme_styles' );

    function theme_styles() {
        wp_enqueue_style( 'wordpress_core_style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'googlefonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Montserrat:400,700' );
        wp_enqueue_style( 'googlefonts2', 'http://fonts.googleapis.com/css?family=Lato:100,300,400,700,100italic,300italic,400italic,700italic' ); 
        wp_enqueue_style( 'styles', get_template_directory_uri() . '/css/styles.css' );
        wp_enqueue_style( 'prefix-font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css', array(), '4.1.0' );
    }

    // END - Load the Main Theme CSS


    // BEGIN - Load the Main Theme JS
    add_action( 'wp_enqueue_scripts', 'theme_js' );

    function theme_js() {

        wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js',array('jquery') );
        wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js',array('jquery') );  
       
        wp_enqueue_script( 'modernizr' );
        wp_enqueue_script( 'bootstrap' );
    }
    // END - Load the Main Theme JS
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

?>