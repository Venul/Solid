<?php 
    get_header();
?>
<div class="mini_news">
    <div class="small_group">

        <div class="ui four column grid doubling stackable">
        <?php
            $args = [
                'post_type' => 'gallery',
                'orderby' => 'id',
                'order' => 'DESC',
                'paged' => get_query_var('paged'),
                'posts_per_page' => 16,
            ];

            $filter = null;
            $category = null;

            if (array_key_exists('filter', $_GET)) {
                $filter = $_GET['filter'];

                $args['tax_query'][] = [
                    'taxonomy' => 'photo-tag',
                    'field' => 'slug',
                    'terms' => $filter,
                    'operator' => 'IN',
                    'include_children' => true
                ];
            }

            if (array_key_exists('category', $_GET)) {
                $category = $_GET['category'];

                $args['tax_query'][] = [
                    'taxonomy' => 'photo-category',
                    'field' => 'slug',
                    'terms' => $category,
                    'operator' => 'IN',
                    'include_children' => true
                ];
            }

            $categorys = get_terms([
                'taxonomy' => 'photo-category',
                'orderby' => 'name',
                'hide_empty' => true,
            ]);

            $wp = new WP_Query;
            $recent_posts = $wp->query($args);

            if ($category) {
                $tags = [];

                foreach ($recent_posts as $post) {
                    $postTerms = wp_get_post_terms($post->ID, 'photo-tag');
                    foreach ($postTerms as $postTerm) {
                        if (!array_key_exists($postTerm->slug, $tags)) {
                            $tags[$postTerm->slug] = $postTerm;
                        }
                    }
                }
            } else {
                $tags = get_terms([
                    'taxonomy' => 'photo-tag',
                    'orderby' => 'name',
                    'hide_empty' => true,
                ]);
            }
        ?>

            <div class="ui inverted menu-gallery-nav wow fadeInLeft">
                <div class="ui secondary inverted pointing menu head in-gallery">
                    <div class="right menu gallery-mar">
                        <?php
                            $baseUrl = '/gallery/?';
                            if ($category) {
                                $baseUrl .= 'category='.$category.'&';
                            }
                            if ($filter) { ?>
                                <a class="item" href="<?=$baseUrl?>">All</a>
                            <?php } ?>
                            <?php
                                foreach ($tags as $term) {
                            ?>
                                    <a class="item <?= $filter == $term->slug ? ' active' : '' ?>"
                                        href="<?=$baseUrl?>filter=<?=$term->slug?>">
                                        <?=$term->name?>
                                    </a>
                                <?php } ?>
                            <select name="category-top-selector" class="selector-gallery">
                            <?php
                                if ($filter) {
                            ?>
                                <option value="<?=$baseUrl?>">All</option>
                                <?php } ?>
                                <?php
                                    foreach ($tags as $term) {
                                ?>
                                        <option value="<?=$baseUrl?>filter=<?=$term->slug?>"<?= $filter == $term->slug ? ' selected' : '' ?>>
                                            <?=$term->name?>
                                        </option>
                                    <?php } ?>
                            </select>
                    </div>
                </div>
                <div class="line-slider"></div>
            </div>
            <div class="two wide column categorys-list">
                <div class="ui secondary inverted pointing menu head">
                    <div class="right menu">
                        <ul>
                            <li>
                                <a class="item<?= $category ? '' : ' active' ?>" href="/gallery">All</a>
                            </li>
                            <?php
                                foreach ($categorys as $term) {
                                  ?>
                                    <li>
                                        <a class="item <?= $category == $term->slug ? ' active' : '' ?>"
                                            href="/gallery/?category=<?=$term->slug?>">
                                            <?=$term->name?>
                                        </a>
                                    </li>
                                    <?php
                                }
                            ?>
                        </ul>
                        <div class="ui hidden divider"></div>
                        <select name="category-selector" class="selector-gallery">
                             <option value="/gallery">All</option>
                             <?php
                                 foreach ($categorys as $term) {
                             ?>
                                    <option value="/gallery/?category=<?=$term->slug?>"<?= $category == $term->slug ? ' selected' : '' ?>>
                                        <?=$term->name?>
                                    </option>
                                <?php } ?>
                         </select>
                    </div>
                </div>
            </div>
            <div class="fourteen wide column">
                <?php
                    foreach($recent_posts as $post) {
                        $image = get_field('post_image', $post->ID);
                ?>
                        <div class="column photo-block">
                            <div class="ui segment wow fadeInRight galler">
                                <a href="<?= esc_url(get_permalink($post->ID)) ?>" target="_blank">
                                    <img src="<?= $image['sizes']['gallery-page-thumbnail'] ?>" alt="<?= $post->post_title ?>" width="225" height="225">
                                </a>
                            </div>
                        </div>
                        <?php
                      }
                    ?>
            </div>
            <div class="two wide column">
            </div>
            <div class="fourteen wide column">
                <div class="pagination">
                    <?=wp_pagenavi(['query' => $wp]);?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
