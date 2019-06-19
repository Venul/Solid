<!DOCTYPE html>
    <!--[if IE 7]>
    <html class="ie ie7" <?php language_attributes(); ?>>
    <![endif]-->
    <!--[if IE 8]>
    <html class="ie ie8" <?php language_attributes(); ?>>
    <![endif]-->
    <!--[if !(IE 7) & !(IE 8)]><!-->
    <html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Play:400,700|Roboto:400,700&amp;subset=cyrillic" rel="stylesheet" />
        <?php wp_head(); ?>
        <title><?=the_title()?></title>
    </head>
    <body <?php body_class(); ?>>
        <div class="navbar navbar-default head-menu" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="mini-logo" href="/">
                        <img src="<?= get_template_directory_uri(); ?>/img/img-logo-header.png" />
                    </a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/about">О проекте</a></li>
                        <li><a href="/nominations">Жюри и номинации</a></li>
                        <li><a href="/participants">Участники</a></li>
                        <li class="badge"><a href="#">f</a></li>
                        <li class="badge"><a href="#">f</a></li>
                    </ul>
                </div>
            </div>
        </div>
