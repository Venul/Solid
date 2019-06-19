<?php get_header(); ?>
<!-- Page start -->
<div class="post-page ui grid">
    <div class="sixteen wide column">
        <?php 
        if (have_posts()) {
            the_post();

            if (in_category(6)){
                $image = get_field('post_image', get_the_ID());

                if ($image) {
                    ?>
                        <img src="<?= $image['sizes']['large'] ?>" alt="<?= the_title() ?>" />
                    <?php
                }
            } else {
            ?>
                <h2 class="ui"><?php the_title(); ?></h2>
                <?= the_content(); ?>
                <div class="ui small label"><?= get_the_date(); ?> <?= get_the_time(); ?></div>
                <?php
            // Категория
            $categories = get_the_category();
            if ( ! empty( $categories ) ) {
                foreach($categories as $category) {
                    ?>
                    <div class="ui small red label">
                        <a href="<?= esc_url(get_category_link($category->term_id)) ?>" alt="<?=esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name))?>">
                            <?= esc_html($category->name )?>
                        </a>
                    </div>
                <?php 
                }
            }
        } 
        }
        ?>
    </div>
</div>
<!-- Page end -->
<?php get_footer(); ?>
