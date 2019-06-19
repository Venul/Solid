<?php
/**
 * Template Name: О проекте
 */
get_header();
// get_post();
?>
<!-- Page start -->
        <div class="about-us-page container">
            <h1 class="text-center"><?= the_title(); ?></h1>
            <?= the_content(); ?>

            <div class="col-md-6 m-lg-top">
                <img src="<?= get_template_directory_uri(); ?>/img/about-1.png" alt="" />
            </div>
            <div class="col-md-6 m-lg-top">
                <img src="<?= get_template_directory_uri(); ?>/img/about-2.png" alt="" class="p-md-left"/>
            </div>
            <div class="col-md-12">
                <img src="<?= get_template_directory_uri(); ?>/img/about-3.png" alt="" />
            </div>
        </div>
        <div class="partners-line bot-line"></div>
        <div class="about-us-contacts container">
            <div class="partners-detail">
                <p>Свяжитесь с нами</p>
                <div class="detail-description">
                    <h2>923-667-9290</h2>
                    <h2>wilderman.jana@ena.me</h2>
                </div>
            </div>
        </div>
<!-- Page end -->
<?php get_footer(); ?>
