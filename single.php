<?php 
    get_header()
?>

<main>
    <section class="page__title page__title-cover" style="background-image: url('images/main/2.jpg')">
        <div class="page__title-body container" >
            <h1 class="title"><?php the_title(); ?></h1>
        </div>
    </section>

    <section class="page__content">
        <div class="page__content-wrapper row container">

            <article class="page__content-body">
                <div class="content__row box">
                    <div class="news__item-content">
                        <span class="news__date"><?php echo date('d.m.Y'); ?></span>
                        <?php the_content()?>
                    </div>
                </div>
            </article>
        </div>
    </section>

</main>

<?php 
    get_footer()
?>