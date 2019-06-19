<?php
/**
 * Template Name: Главная
 */

get_header();
?>
<!-- Page start -->
<div class="container cup">
    <div class="col-md-5">
        <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/img-main-banner.png" alt=""/>
    </div>
    <div class="col-md-7">
        <div class="prize-txt">
            <h3>Выиграй кубок и отправься на Indie Prize!</h3>
            <p>GTP Indie Cup дает возможность побороться за звание лучшего разработчика и войти в сотню мировых
                финалистов на Indie Prize!</p>
            <div class="btn-group" role="group">
                <a href="/" class="btn btn-default">Подать заявку</a>
            </div>
        </div>
    </div>
</div>
<div class="arrow-down">
    <a href="#top" class="scrollto">
        <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/ic-scroll-down.png" alt=""/>
    </a>
</div>

<div class="contest">
    <hr class="contest-top">
    <h3>
        GTP Media проводит контест среди независимых разработчиков
        и приглашает к участию всех желающих продемонстрировать
        свой проект и побороться за звание лучшего.
    </h3>
    <p>
        Совместно с Indie Prize мы хотим поддержать наш рынок разработки видеоигр и показать небольшим студиям и
        независимым разработчикам, что индустрия развивается именно благодаря молодым талантам и индивидуальному
        характеру.
    </p>
    <span>
        Прием работ стартует 15.06.16 и заканчивается 15.08.16
    </span>
    <hr class="contest-bottom">
</div>

<a id="top"></a>
<div class="partners">
    <h3 class="headers"><span></span>Призы и Партнеры<span></span></h3>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="container">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
            </ol>
        </div>
        <div class="carousel-inner" role="listbox">
            <div class="item">
                <img class="first-slide img-responsive" src="<?= get_template_directory_uri(); ?>/img/img-banner-optional.png"
                     alt="First slide"/>
            </div>
            <div class="item">
                <img class="second-slide img-responsive" src="<?= get_template_directory_uri(); ?>/img/img-banner-optional.png"
                     alt="Second slide"/>
            </div>
            <div class="item active">
                <img class="third-slide img-responsive" src="<?= get_template_directory_uri(); ?>/img/img-banner-optional.png"
                     alt="Third slide"/>
            </div>
        </div>
        <div class="container">
            <a class="left carousel-control" href="http://getbootstrap.com/examples/carousel/#myCarousel" role="button"
               data-slide="prev">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/ic-left.png" alt=""/>
            </a>
            <a class="right carousel-control" href="http://getbootstrap.com/examples/carousel/#myCarousel" role="button"
               data-slide="next">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/ic-right.png" alt=""/>
            </a>
        </div>
    </div>
    <div class="container">
        <div class="btn-group" role="group">
            <a href="/partners" class="btn btn-default">Посмотреть все призы</a>
        </div>
    </div>
</div>

<div class="nomination container">
    <h3 class="headers"><span></span>Жюри и Номинации<span></span></h3>
    <div class="nominations-list">
        <div class="col-md-3">
            <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/ic-art.png" alt=""/>
            <p>Лучший арт</p>
        </div>
        <div class="col-md-3">
            <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/ic-vr.png" alt=""/>
            <p>Лучшая VR игра</p>
        </div>
        <div class="col-md-3">
            <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/ic-pc.png" alt=""/>
            <p>Лучшая PC игра</p>
        </div>
        <div class="col-md-3">
            <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/ic-mobile.png" alt=""/>
            <p>Лучшая mobile игра</p>
        </div>
    </div>
    <div class="col-xs-12 m-0">
        <div class="btn-group center-btn" role="group">
            <a href="/nominations" class="btn btn-default">Подробней</a>
        </div>
    </div>
</div>

<div class="new-members container">
    <h3 class="headers"><span></span>Новые участники<span></span></h3>
    <section class="regular col-lg-12">
        <div>
            <a href="/participants/madness-road">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/img-new-player-optional-1.png" alt=""/>
                <p>Madnes road</p>
            </a>
        </div>
        <div>
            <a href="/participants/madness-road">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/img-new-player-optional-2.png" alt=""/>
                <p>Illumination</p>
            </a>
        </div>
        <div>
            <a href="/participants/madness-road">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/img-new-player-optional-3.png" alt=""/>
                <p>Madnes road</p>
            </a>
        </div>
        <div>
            <a href="/participants/madness-road">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/img-new-player-optional-1.png" alt=""/>
                <p>Madnes road</p>
            </a>
        </div>
        <div>
            <a href="/participants/madness-road">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/img-new-player-optional-2.png" alt=""/>
                <p>Illumination</p>
            </a>
        </div>
        <div>
            <a href="/participants/madness-road">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/img-new-player-optional-3.png" alt=""/>
                <p>Madnes road</p>
            </a>
        </div>
    </section>
    <div class="btn-group center-btn" role="group">
        <a href="/participants" class="btn btn-default">Посмотреть всех</a>
    </div>
</div>

<div class="our-partners container">
    <h3 class="headers"><span></span>Наши партнеры<span></span></h3>
    <div class="platinum">
        <p>Платиновые партнеры</p>
        <div class="group-partners">
            <div class="col-md-6">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/logo-golden-partners-optional.png"/>
                <p>Indie Prize</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/logo-golden-partners-optional_2.png"/>
                <p>Razer</p>
            </div>
        </div>
    </div>
    <div class="gold">
        <p>Золотые партнеры</p>
        <div class="group-partners">
            <div class="col-md-4">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/logo-golden-partners-optional.png"/>
                <p>Indie Prize</p>
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/logo-golden-partners-optional.png"/>
                <p>Indie Prize</p>
            </div>
            <div class="col-md-4">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/logo-golden-partners-optional_2.png"/>
                <p>Razer</p>
            </div>
        </div>
    </div>
    <div class="partner-nomin">
        <p>Партнеры номинация</p>
        <div class="group-partners">
            <div class="col-md-2">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/partner-logo-optional_3.png"/>
                <p>Ea Games</p>
            </div>
            <div class="col-md-2">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/partner-logo-optional_4.png"/>
                <p>Blizzard Games</p>
            </div>
            <div class="col-md-2">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/partner-logo-optional_5.png"/>
                <p>GLU Games</p>
            </div>
            <div class="col-md-2">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/partner-logo-optional.png"/>
                <p>Good Games</p>
            </div>
            <div class="col-md-2">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/partner-logo-optional_2.png"/>
                <p>DigiCode</p>
            </div>
        </div>
        <p>Инфопартнеры</p>
        <div class="group-partners">
            <div class="col-md-2">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/partner-logo-optional_3.png"/>
                <p>Ea Games</p>
            </div>
            <div class="col-md-2">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/partner-logo-optional_4.png"/>
                <p>Blizzard Games</p>
            </div>
            <div class="col-md-2">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/partner-logo-optional_5.png"/>
                <p>GLU Games</p>
            </div>
            <div class="col-md-2">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/partner-logo-optional.png"/>
                <p>Good Games</p>
            </div>
            <div class="col-md-2">
                <img class="img-responsive" src="<?= get_template_directory_uri(); ?>/img/partner-logo-optional_2.png"/>
                <p>DigiCode</p>
            </div>
        </div>
    </div>
    <div class="btn-group center-btn" role="group">
        <a href="/partners" class="btn btn-default">Посмотреть всех</a>
    </div>
</div>

<div class="winner">
    <h3 class="headers"><span></span>Победитель прошлого сезона<span></span></h3>
    <div class="win-banner"></div>
</div>

<div class="news">
    <h3 class="headers"><span></span>Новости<span></span></h3>
    <div class="news-banner"></div>
</div>

<!-- Page end -->
<?php get_footer(); ?>
