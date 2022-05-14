<?php 
    add_action('wp_enqueue_scripts', 'pogotowie_styles');
    add_action('wp_enqueue_scripts', 'pogotowie_scripts');


    function pogotowie_styles() {
        wp_enqueue_style( 'pogotowie-style', get_stylesheet_uri() );
    };

    function pogotowie_scripts() {
        wp_enqueue_script( 'pogotowie-scripts', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
    };

    add_theme_support( 'custom-logo');
    add_theme_support( 'menus' );

    add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
    add_filter( 'nav_menu_css_class', 'change_menu_item_css_classes', 10, 4 );


    function filter_nav_menu_link_attributes($atts, $item, $args) {
        if ($args->menu === 'Main') {
            $atts['class'] = 'menu__link';
        } elseif ($args->menu === 'Footer') {
            $atts['class'] = 'footer__menu-link';
        }

        return $atts;
    }

    function change_menu_item_css_classes( $classes, $item, $args, $depth ) {
        if ($args->menu === 'Main') {
            $classes[] = 'menu__item';
        } elseif ($args->menu === 'Footer') {
            $classes[] = 'footer__menu-item';
        }

        return $classes;
    }

    add_action( 'template_redirect', function(){
        ob_start( function( $buffer ){
            $buffer = str_replace( array( 'type="text/javascript"', "type='text/javascript'" ), '', $buffer );
            $buffer = str_replace( array( 'type="text/css"', "type='text/css'" ), '', $buffer );
            return $buffer;
        });
    });

    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    add_action('wp_default_scripts', function ($scripts) {
        if (!empty($scripts->registered['jquery'])) {
            $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
        }
    });

?>
