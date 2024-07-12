<?php
function hexShop_add_theme_scripts()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.1', 'all');
    wp_enqueue_style('slider', get_template_directory_uri() . '/assets/css/flex-slider.css', array(), '1.1', 'all');
    wp_enqueue_style('awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '1.1', 'all');
    wp_enqueue_style('lightbox', get_template_directory_uri() . '/assets/css/lightbox.css', array(), '1.1', 'all');
    wp_enqueue_style('carousel', get_template_directory_uri() . '/assets/css/owl-carousel.css', array(), '1.1', 'all');
    wp_enqueue_style('main-hexShop', get_template_directory_uri() . '/assets/css/templatemo-hexashop.css', array(), '1.1', 'all');
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-2.1.0.min.js', array('jquery'), 1.1, true);
    wp_enqueue_script('accordions', get_template_directory_uri() . '/assets/js/accordions.js', array(), 1.1, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 1.1, true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', array(), 1.1, true);
    wp_enqueue_script('datepicker', get_template_directory_uri() . '/assets/js/datepicker.js', array(), 1.1, true);
    wp_enqueue_script('imgfix', get_template_directory_uri() . '/assets/js/imgfix.min.js', array(), 1.1, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.js', array(), 1.1, true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), 1.1, true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.js', array(), 1.1, true);
    wp_enqueue_script('lightbox', get_template_directory_uri() . '/assets/js/lightbox.js', array(), 1.1, true);
    wp_enqueue_script('carousel', get_template_directory_uri() . '/assets/js/owl-carousel.js', array(), 1.1, true);
    wp_enqueue_script('scrollreveal', get_template_directory_uri() . '/assets/js/scrollreveal.min.js', array(), 1.1, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.js', array(), 1.1, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array(), 1.1, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'hexShop_add_theme_scripts');
