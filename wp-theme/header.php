<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo bloginfo("template_url"); ?>/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo bloginfo("template_url"); ?>/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo bloginfo("template_url"); ?>/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo bloginfo("template_url"); ?>/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo bloginfo("template_url"); ?>/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo bloginfo("template_url"); ?>/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo bloginfo("template_url"); ?>/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo bloginfo("template_url"); ?>/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo bloginfo("template_url"); ?>/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo bloginfo("template_url"); ?>/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo bloginfo("template_url"); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo bloginfo("template_url"); ?>/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo bloginfo("template_url"); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo bloginfo("template_url"); ?>/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo bloginfo("template_url"); ?>/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <title>POGOTOWIE HIGIENICZNE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap-reboot.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Lato:wght@300;400;700&family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap-reboot.min.css"/>
    <?php 
        wp_head();
    ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="menu">
                <!-- <a href="#" class="menu__logo"> -->
                    <?php the_custom_logo(); ?>
                <!-- </a> -->
                <div class="menu__right">
                    <nav>
                        <?php
                            wp_nav_menu( [
                                'menu'                 => 'Main',
                                'container'            => 'false',
                                'menu_class'           => 'menu__items',
                                'echo'                 => true,
                                'fallback_cb'          => 'wp_page_menu',
                                'items_wrap'           => '<ul class="menu__items">%3$s</ul>',
                                'depth'                => 0
                            ] );
                        ?>
                    </nav>
                    <div class="search__panel">
                    <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
                        <!-- <input type="text" class="search__input" placeholder="Введитe...">
                        <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                            <input type="text" class="search__input" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" placeholder="Wyszukiwanie w witrynie:" />
                            <input type="submit" class="search__btn" id="searchsubmit"/>
                        </form>
                        <div class="search__img"></div> -->
                    </div>
                    <div class="menu__hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    