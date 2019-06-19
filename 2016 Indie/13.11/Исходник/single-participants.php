<?php
/**
 * Template Name: Страница участника
 */

get_header();
the_post();
$meta = get_post_meta(get_the_ID());
$image = get_field('title-image');
?>
        <div class="participant-page container">
            <div class="top-info-participant">
                <div class="col-md-7">
                    <img src="<?= $image['sizes']['participants-thumbnail'] ?>"
                         alt="<?php the_title(); ?>"
                         class="img-responsive"/>
                </div>
                <div class="col-md-5">
                    <h2><?php the_title(); ?></h2>
                    <?php if (!empty($meta['developer'][0])) { ?>
                        <p><span>Разработчик:</span> <?= $meta['developer'][0] ?></p>
                    <?php } ?>
                    <?php if (!empty($meta['update'][0])) { ?>
                        <p><span>Aпдейт:</span> <?= $meta['update'][0] ?></p>
                    <?php } ?>
                    <?php if (!empty($meta['small-description'][0])) { ?>
                        <p><span>Инфо:</span> <?= $meta['small-description'][0] ?></p>
                    <?php } ?>
                    <ul>
                        <?php if (!empty($meta['site'][0])) { ?>
                            <li><a href="<?=$meta['site'][0]?>">Сайт</a></li>
                        <?php } ?>
                        <?php if (!empty($meta['gameplay'][0])) { ?>
                            <li><a href="<?=$meta['gameplay'][0]?>">Геймплей</a></li>
                        <?php } ?>
                        <?php if (!empty($meta['trailer'][0])) { ?>
                            <li><a href="<?=$meta['trailer'][0]?>">Трейлер</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            
            <div class="center-txt-participant col-md-9">
               <?= the_content(); ?>
            </div>
        
            <div class="new-members container">
                <section class="regular slider col-lg-12">
                    <div><a>
                      <img src="http://138.68.83.3/wp-content/themes/indiecup/img/img-new-player-optional-1.png" alt="">
                      <p>Madnes road</p></a>
                    </div>
                    <div><a>
                      <img src="http://138.68.83.3/wp-content/themes/indiecup/img/img-new-player-optional-2.png" alt="">
                      <p>Illumination</p></a>
                    </div>
                    <div><a>
                      <img src="http://138.68.83.3/wp-content/themes/indiecup/img/img-new-player-optional-3.png" alt="">
                      <p>Madnes road</p></a>
                    </div>
                    <div><a>
                      <img src="http://138.68.83.3/wp-content/themes/indiecup/img/img-new-player-optional-1.png" alt="">
                      <p>Madnes road</p></a>
                    </div>
                    <div><a>
                      <img src="http://138.68.83.3/wp-content/themes/indiecup/img/img-new-player-optional-2.png" alt="">
                      <p>Illumination</p></a>
                    </div>
                    <div><a>
                      <img src="http://138.68.83.3/wp-content/themes/indiecup/img/img-new-player-optional-3.png" alt="">
                      <p>Madnes road</p></a>
                    </div>
                </section>
            </div>
        </div>

<!-- Page end -->
<?php get_footer(); ?>
