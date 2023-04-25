<?php

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