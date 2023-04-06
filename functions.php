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
}

add_theme_support( 'post_thumbnails' );
add_theme_support( 'menus' );


// фильтр передает переменную $template - путь до файла шаблона.
// Изменяя этот путь мы изменяем файл шаблона.
add_filter( 'template_include', 'my_template' );
function my_template( $template ) {
	$dir    = get_template_directory_uri() . '/templates';
	$array_templates = scandir( $dir  );

	echo($array_templates);
	print_r($array_templates);

	if( is_page('tarif') ){
		if ( $new_template = locate_template( array( 'tarif.php' ) ) )
			return $new_template ;
	}
	
	return $template;

}

?>


