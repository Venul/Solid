<?php 
    get_header();
?>
<?php dynamic_sidebar('home_slider'); ?>
<div class="line-slider"></div>
<!--    start mini news    -->
<div class="mini-news">
    <div class="ui inverted segment wow fadeInDown">
        <div class="ui inverted secondary pointing menu">
        <?php
            $categories = get_categories(array(
                'orderby' => 'name',
                'parent'  => 0
            ));
            foreach ($categories as $category) { ?>
                <?php if ($category->term_id == 6) continue; ?>
                <a class="item" href="<?= esc_url(get_category_link($category->term_id)) ?>"><?= esc_html($category->name) ?></a>
            <?php } ?>
        </div>
    </div>
    <div class="small-group wow fadeInRight">
        <div class="ui six column grid doubling stackable">
        <?php
            $args = array(
                'numberposts' => '6',
                'orderby' => 'post_date',
                'order' => 'DESC',
            );
            $recent_posts = wp_get_recent_posts($args);
            foreach($recent_posts as $post){
                $image = get_field('post_image', $post["ID"]);
                ?>
                    <div class="column">
                        <div class="ui segment">
                            <a href="<?= esc_url(get_permalink($post["ID"])) ?>">
                                <img src="<?= $image['sizes']['post-index-thumbnail'] ?>" alt="<?= $post["post_title"] ?>" width="175" height="175">   
                                <div class="ui compact message">
                                    <p>
                                        <?= $post["post_title"] ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php
            }
        ?>
        </div>
    </div>
</div>
<!--    finish mini news    -->
<div class="line"></div>
<!--    start armory    -->
<div class="wow fadeInLeft">
    <h2 class="ui wow fadeInDown">workshop</h2>
    <div class="workshop ui grid">
         <div class="ten wide column">
             <img class="ui image" src="<?= get_template_directory_uri(); ?>/img/white_bg.png" alt="">
         </div>
         <div class="six wide column">
            <div class="workshop-text">
                <?php dynamic_sidebar('home_workshop'); ?>
            </div>
         </div>
    </div>
</div>
<!--    finish armory    -->
<div class="line"></div>
<!--    start photogalery    -->
<div class="wow fadeInRight">
    <h2 class="ui wow fadeInDown">photo gallery</h2>
    <div class="galery">
        <div class="ui grid">
            <div class="seven wide column">
                <img class="ui image" src="<?= get_template_directory_uri(); ?>/img/big_photo.png" alt="">
            </div>
            <div class="nine wide column">
                <?php dynamic_sidebar('home_gallery'); ?>
            </div>
        </div>
    </div>
</div>
<!--    finish photogalery    -->
<div class="line"></div>
<!--    start about us    -->
<div class="about-us wow fadeInLeft">
    <div class="ui grid stackable">
        <div class="six wide column wow fadeInDown">
            <?php dynamic_sidebar('home_about_us'); ?>
        </div>
        <div class="ten wide column">
            <div class="ui grid">
                <div class="eight wide column wow fadeInUp hided-block">
                    <?php dynamic_sidebar('twitter_widget'); ?>
                    <?php /* <a class="twitter-timeline" href="https://twitter.com/arthammer_larp" data-widget-id="730180617636335618">Твиты от @arthammer_larp</a> */ ?>
                </div>
                <div class="eight wide column wow fadeInRight right aligned hided-block">
                    <?php /* dynamic_sidebar('facebook_widget'); */ ?>
                        <div class="fb-page" data-href="https://www.facebook.com/arthammerLARP" data-tabs="timeline" data-height="350" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/arthammerLARP"><a href="https://www.facebook.com/arthammerLARP">Arthammer LARP Workshop</a></blockquote></div></div>
                        
                </div>
            </div>
        </div>
    </div>
</div>
<div class="line"></div>
<!--    start order process us    -->
<div class="order wow fadeInRight">
    <div class="ui grid stackable">
        <div class="sixteen wide column">
            <h2 class="ui wow fadeInDown">The order process is very easy</h2>
            <div class="ui grid stackable">
                <div class="row">
                    <div class="four wide column">
                        <div class="ui center aligned segment">
                            <i class="find icon"></i>
                            <p>Search for your item</p>
                        </div>
                    </div>
                    <div class="four wide column">
                        <div class="ui center aligned segment">
                            <i class="paypal card icon"></i>
                            <p>Make payment</p>
                        </div>
                    </div>
                    <div class="four wide column">
                        <div class="ui center aligned segment">
                            <i class="lab icon"></i>
                            <p>Our wizards will prepare the item</p>
                        </div>
                    </div>
                    <div class="four wide column">
                        <div class="ui center aligned segment">
                            <i class="plane icon"></i>
                            <p>Wait for delivery!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
