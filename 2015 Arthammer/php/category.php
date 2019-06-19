<?php get_header(); ?>
<!-- Page start -->
<div class="category-page ui grid">
    <div class="sixteen wide column">
        <div class="ui large breadcrumb">
            <a href="/" class="section">Home</a>
            <i class="right chevron icon divider white"></i>
            <div class="active section"><?= single_cat_title() ?></div>
        </div>
        <div class="line"></div>
        <?php
             if (have_posts()) : 
                    while (have_posts()) {
                        the_post();
                        ?>
                        <h2 class="ui"><a href="<?php the_permalink() ?>"><?= the_title(); ?></a></h2>
                        <?= the_content('Continue reading...'); ?>
                        <div class="line"></div>
                   <?php
                    }
                else :
                    // If no content, include the "No posts found" template.
                    get_template_part('content', 'none');
                endif;

                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
                    'next_text'          => __( 'Next page', 'twentyfifteen' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
                ) );
            ?>
    </div>
</div>
<!-- Page end -->
<?php get_footer(); ?>
