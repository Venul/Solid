<?php get_header(); ?>
<!-- Page start -->
<div class="post-page ui grid single-gallery">
    <div class="ten wide column">
        <?php
        if (have_posts()) {
            the_post();
            $image = get_field('post_image', get_the_ID()); 
        ?>
            <img src="<?= $image['sizes']['medium_large'] ?>" alt="<?= the_title() ?>" />
            <?php
        }
        ?>
    </div>
    <div class="six wide column">
        <h2><?=the_title()?></h2>
        <?=the_content()?>
        <?php /*
        <div class="gallery-spans">
            <span>
                <i class="thumbs outline up icon"></i>
                49 Likes
            </span>
            <span>
                <i class="unhide icon"></i>
                766 views
            </span>
            <span>
                <i class="comments outline icon"></i>
                0 comments
            </span>
        </div>
        */ ?>
        <div class="gallery-buttons">
            <a class="ui facebook button"
                target="_blank"
                href="https://www.facebook.com/sharer/sharer.php?u=<?=get_permalink(get_the_ID())?>">
                <i class="facebook icon"></i>
                Share
            </a>
            <a class="ui youtube button"
                target="_blank"
                href="https://pinterest.com/pin/create/button/?url=<?=get_permalink(get_the_ID())?>&media=<?= $image['sizes']['large'] ?>&description=<?=the_title()?>">
                <i class="pinterest icon"></i>
                Pin It
            </a>
            <a class="ui twitter button"
                target="_blank"
                href="https://twitter.com/share?url=<?=get_permalink(get_the_ID())?>">
                <i class="twitter icon"></i>
                Tweet
            </a>
        </div>
    </div>
</div>
<!-- Page end -->
<?php get_footer(); ?>
