<!DOCTYPE html>
<html <?php language_attributes(); # for example if using a language writing RTL ?>>
<head>
    <meta charset="<?php bloginfo('charset'); # bloginfo() contains a whole lot of information about the site ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' )?>" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <?php wp_head(); # tells wp the header ends and is possible to add more material ?>
</head>

<body>
    <div id="container">
        <header id="main">
            <div id="logo">
                <?php
                    if(get_header_image( )) { ?>
                        <a href="<?php echo esc_url( home_url('/')); ?>" rel="home">
                            <img src="<?php header_image(); ?>"
                                width="<?php get_custom_header()->width; ?>"
                                height="<?php get_custom_header()->height; ?>"
                                alt="Logo" />
                        </a>
                    <?php } ?>
            </div> <!-- /logo -->     
            <nav id="main">
                <?php wp_nav_menu(); # using wps own system for nav menus ?>
            </nav> <!-- /main -->
        </header>