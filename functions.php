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

add_filter( 'nav_menu_submenu_css_class', 'change_wp_nav_menu', 10, 3 );

function change_wp_nav_menu( $classes, $args, $depth ) {
	foreach ( $classes as $key => $class ) {
		if ( $class == 'sub-menu' ) {
			$classes[ $key ] = $args->sub_menu_class;
		}
	}
	return $classes;
}


add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}


add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

function add_menu_list_item_class($classes, $item, $args) {
  if (property_exists($args, 'list_item_class')) {
      $classes = [];
      $classes[] = $args->list_item_class;
  }
  return $classes;
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


