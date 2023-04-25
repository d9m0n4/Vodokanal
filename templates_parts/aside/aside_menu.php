<?php

?>
<nav class="page__sidebar-nav">
  <?php 
    wp_nav_menu( [
      'theme_location'  => '',
      'menu'            => $args['name'],
      'container'       => false,
      'container_class' => '',
      'container_id'    => '',
      'menu_class'      => 'page__sidebar-nav__list',
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
      'list_item_class' => '',
      'sub_menu_class'  => ''
    ] );
  ?>  
</nav>