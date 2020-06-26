<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<meta name="author" content="Justin Rodriguez Montoya">
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary" role="navigation">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Justin Rodriguez Montoya</a>
            <?php
            wp_nav_menu(array(
                'theme_location'    => 'main-menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ));
            ?>
        </div>
    </nav>
    <div class="jumbotron" style="background-image: url(<?php //echo get_template_directory_uri() . '/img/header.jpg' ?>);">
        <div class="container">
            <h1 class="display-4"><a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a></h1>
            <p class="lead"><?php bloginfo('description') ?></p>
        </div>
    </div>