<?php

if (!defined('ABSPATH')) {
	exit;
}

if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

add_action( 'wp_enqueue_scripts', 'register_assets');

function register_assets() {
	wp_enqueue_style( 'styles', get_template_directory_uri() . '/assets/styles/styles.css', false, null, false );
	wp_enqueue_style( 'styles_media', get_template_directory_uri() . '/assets/styles/media.css', array('styles'), null, false );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/common.js', false, null, true );
	wp_enqueue_script( 'form', get_template_directory_uri() . '/assets/js/form.js', false, null, true );
}

add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array('news') );
add_theme_support( 'post-thumbnails', array('post') );

add_theme_support( 'menus' );



define( 'ML_TEMPLATES_DIR', get_template_directory() . '/templates' );

// add_filter( 'page_template_hierarchy', 'templates_path');

// function templates_path( $templates ){
// 	array_unshift( $templates, 'templates/'. $templates[0] ); 
// 	return $templates;
// };

// add_filter( 'template_include', 'my_templates' );

// function my_templates( $templates ) {
	
// 	$array_templates = array_diff( scandir( ML_TEMPLATES_DIR ), array('.', '..') );

// 	foreach($array_templates as $pl_template) {

// 		$str_tplt = str_replace(".php", "", $pl_template);
// 		$tplt_name = mb_convert_case($str_tplt, MB_CASE_TITLE, 'UTF-8');
		
// 	}
	
	
// 	return $templates;

// }

?>


