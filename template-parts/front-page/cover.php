<?php
$default_cover_title = get_bloginfo('name');
$default_cover_lead = get_bloginfo('description');
?>


<section class="jumbotron text-center wp-bs-4-jumbotron border-bottom text-white">
    <div class="wp-bp-jumbo-overlay">
        <img src="https://www.makervsvirus.org/wp-content/themes/maker-vs-virus-theme-v2/assets/images/big-logo.svg" style="height:400px; max-width:80vw; max-height: 60vh; margin-bottom: 40px">
        <div class="col-12">
            <button style="border: solid 3px white; width: 200px; border-radius:30px; background:transparent;color:white; height: 50px; margin-right:10px">BEDARF ANMELDEN</button>
            <button style="border: solid 3px white; width: 200px; border-radius:30px; background:transparent;color:white; height: 50px">SPENDEN</button>
            <button style="border: solid 3px white; width: 200px; border-radius:30px; background:transparent;color:white; height: 50px; margin-left:10px">HELFEN</button>
        </div>
        <div class="container" style="margin-top: 60px">
            <h1 class="jumbotron-heading"><?php echo wp_kses_post(get_theme_mod('front_cover_title', $default_cover_title)); ?></h1>
            <p class="lead mb-4"><?php echo wp_kses_post(get_theme_mod('front_cover_lead', $default_cover_lead)); ?></p>
            <?php if (get_theme_mod('front_cover_btn_text')) : ?><a href="<?php echo esc_url(get_theme_mod('front_cover_btn_link')); ?>" class="btn btn-primary btn-lg"><?php echo esc_html(get_theme_mod('front_cover_btn_text')); ?></a><?php endif; ?>
        </div>
    </div>
    <?php wp_bootstrap_4_post_thumbnail(); ?>
</section>