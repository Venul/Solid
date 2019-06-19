<?php get_header(); ?>
<!-- Page start -->
<div class="post-page ui grid">
    <div class="sixteen wide column">
        <h2 class="ui"><?php the_title(); ?></h2>
        <?php 
        if (have_posts()) {
            the_post();
            the_content();
        }
        ?>
    </div>
</div>
<!-- Page end -->
<?php get_footer(); ?>
