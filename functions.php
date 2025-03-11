<?php

function loading_css_and_js() {
    wp_enqueue_style( 
		'google-font', 
		'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i'
	);
    wp_enqueue_style( 
		'bootstrap', 
		'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
	);
	wp_enqueue_style( 
		'theme-main-style-file', 
		//get_parent_theme_file_uri( 'build/index.css' )
        get_template_directory_uri() . '/build/index.css',
        false, '1.1', 'all'
	);

    wp_enqueue_style( 
		'theme-second-main-style-file', 
        get_template_directory_uri() . '/build/style-index.css',
        false,
        '1.1', 
        'all'
		//get_parent_theme_file_uri( 'build/style-index.css' )
	);

    /** Loading JavaScript */
    wp_enqueue_script( 
        'main-js-file',
        get_parent_theme_file_uri( 'build/index.js' ),
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'loading_css_and_js' );
// get_parent_theme_file_uri