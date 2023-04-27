<?php
    get_header()
?>
<?php
/*
Template Name: Вакансии
*/
?>

<main>
    <section class="page__title">
        <div class="page__title-body container">
            <h1 class="title">Реквизиты предприятия</h1>
        </div>
    </section>

    <section class="page__content">
        <div class="page__content-wrapper row container">
            <aside class="page__sidebar">
                <div class="content__row box">
                    <?php get_template_part( 'templates_parts/aside/aside_menu', null, ['name' => 'about'] )?>
                </div>
            </aside>
            <article class="page__content-body">
                <div class="content__row box" id="vacancies">

                </div>
            </article>
        </div>
    </section>

</main>

<?php
    get_footer()
?>