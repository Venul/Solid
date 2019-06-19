<?php
/**
 * Template Name: Список участников
 */

// Подготовка списка аргументов для списка участников
$args = [
    'post_type' => 'participants',
    'orderby' => 'id',
    'order' => 'DESC',
    'paged' => get_query_var('paged'),
    'posts_per_page' => 16,
];

$category = null;

// Если выбрана категория - фильтруем по категории
if (array_key_exists('category', $_GET)) {
    $category = $_GET['category'];

    $args['tax_query'][] = [
        'taxonomy' => 'participants_categories',
        'field' => 'slug',
        'terms' => $category,
        'operator' => 'IN',
        'include_children' => true
    ];
}

// Получить список категорий
$categories = get_terms([
    'taxonomy' => 'participants_categories',
    'orderby' => 'name'
]);

// Объект для запросов к бд
$wp = new WP_Query;

// Получили список учатников
$participants = $wp->query($args);

get_header(); ?>
<!-- Page start -->
<div class="participans-page">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p>Категории:</p>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/participants">Показать все</a></li>
                    <?php
                        // Выводим список категорий
                        foreach ($categories as $term) {
                            ?>
                            <li>
                                <a class="<?= $category == $term->slug ? ' active' : '' ?>"
                                   href="/participants/?category=<?=$term->slug?>">
                                    <?=$term->name?>
                                </a>
                            </li>
                            <?php
                        }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="group-participans container">
        <?php
        // Выводим список участников
        foreach($participants as $post) {
            $image = get_field('title-image', $post->ID);
            ?>
            <div class="col-md-4">
                <a href="<?= esc_url(get_permalink($post->ID)) ?>">
                    <img src="<?= $image['sizes']['participants-list-thumbnail'] ?>"
                         alt="<?php the_title(); ?>"
                         class="img-responsive"/>
                    <p><?= $post->post_title ?></p>
                </a>
            </div>
        <?php } ?>

        <!--            <div class="btn-group" role="group">-->
        <!--                <a href="#" class="btn btn-default">Показать еще</a>-->
        <!--            </div>-->
    </div>
    <!-- Page end -->
    <?php get_footer(); ?>
