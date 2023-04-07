<?php 
  get_header()
?>
<?php
/*
Template Name: Новости
*/
?>

    <main>
      <section class="page__title">
        <div class="page__title-body container">
          <h1 class="title">Новости</h1>
        </div>
      </section>

      <section class="page__content">
        <div class="container">
          <div class="news__row ">

            <?php 
              $my_posts = get_posts( array(
                'numberposts' => 5,
                'category'    => 0,
                'orderby'     => 'date',
                'order'       => 'DESC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => 'news',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ) );
              
              global $post;
              
              foreach( $my_posts as $post ){
                setup_postdata( $post );
              
                ?>
                  <a href="<?php the_permalink()?>" class="news__row-item box">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="item__image image" />
                      <div class="item__body">
                        <p class="news__item-text"><?php the_title()?></p>
                      </div>
                    <span class="item__date"><?php echo date('d.m.Y'); ?></span>
                  </a>
            <?php
              }
              
              wp_reset_postdata(); // сброс
            ?>

            </div>
        </div>
      </section>
    </main>

<?php 
  get_footer()
?>   