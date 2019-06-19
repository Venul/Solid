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
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <?php wp_head(); ?>
        <title><?=the_title()?></title>
    </head>
       
    <body <?php body_class(); ?>>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=225349557475647";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
        <div class="ui vertical inverted sidebar menu">
            <a class="item" href="/">Home</a>
            <a class="item" href="/gallery">Gallery</a>
            <a class="item" href="/larp-props">Larp & Props</a>
            <a class="item" href="/about">About</a>
            <a class="item" href="/meet-the-team">Meet the Team</a>
            <a class="item" href="/contacts">Contacts</a>
        </div>
        <div class="pusher">
        <div class="ui raised very padded container main-container">
            <!--    start header    -->
            <div class="header">
                
                <div class="ui secondary menu language-menu"></div>
                <div class="logo">
                    <a href="/">
                        <img src="/public/images/logo-small.svg" alt="logo" class="ui mobile tablet only grid" />
                        <img src="/public/images/logo.svg" alt="logo" class="ui computer only grid" />
                    </a>
                </div>
                <div class="ui inverted">
                    <div class="ui inverted secondary pointing menu head">
                        <div class="right menu">
                            <a class="toc item"><i class="sidebar icon"></i></a>
                            <a class="item" href="/">home</a>
                            <a class="item" href="/gallery">gallery</a>
                            <a class="item" href="/larp-props">larp & props</a>
                            <a class="item" href="/about">about</a>
                            <a class="item" href="/contacts">contacts</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line-slider"></div>