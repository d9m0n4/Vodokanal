<?php

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

?>
<nav class="header__main-navigation">
  <?php 
    wp_nav_menu( [
      'theme_location'  => '',
      'menu'            => 'menu',
      'container'       => false,
      'container_class' => '',
      'container_id'    => '',
      'menu_class'      => 'header__navigation-list',
      'menu_id'         => '',
      'echo'            => true,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
      'depth'           => 0,
      'walker'          => '',
      'link_class'      => 'nav__link',
      'list_item_class' => 'header__navigation-list__item',
      'sub_menu_class'  => 'navigation__sub-menu box'
    ] );
  ?>  
</nav>

<div class="mobile__navigation-button">
  <button class="mobile__burger">
    <span></span>
  </button>
</div>
<nav class="mobile__navigation"></nav>