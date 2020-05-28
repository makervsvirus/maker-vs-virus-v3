<?php

if ('posts' == get_option('show_on_front')) {
    include(get_home_template());
} else {
    if (!is_page_template()) {
        get_header();

        get_template_part('template-parts/front-page/cover');
        get_template_part('template-parts/front-page/services');

?>

        <?php if (get_theme_mod('show_main_content', 1)) : ?>
            <section class="wp-bp-main-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <?php while (have_posts()) : the_post(); ?>
                                <h2 class="text-left mb-4"><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>

<?php
        get_footer();
    } else {
        include(get_page_template());
    }
}
?>